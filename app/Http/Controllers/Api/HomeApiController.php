<?php

namespace App\Http\Controllers\Api;

use App\Contracts\BookingHouseRepositoryInterface;
use App\Contracts\HomeRepositoryInterface;
use App\Enums\HouseEnum;
use App\Enums\ReservationEnum;
use App\Events\BookingEvent;
use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\House;
use App\Models\Reservation;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class HomeApiController extends Controller
{
    public function __construct(
        public HomeRepositoryInterface $repository,
        public BookingHouseRepositoryInterface $reservation
    ) {
    }

    public function home()
    {
        return json_encode([
            'apartments' => $this->repository->getContent(),
            'sliders' => $this->repository->getSliders(),
        ]);
    }

    public function details_homes(Request $request){
        return json_encode(
            \App\Models\House::query()
                ->where('id', '=', $request->id)
                ->withCount(['reservations' => function($builder) {
                    $builder->where('status', false);
                }])
                ->firstOrFail()
        );
    }

    public function reservation(Request $request){
        $house = $this->getHouse(attributes: $request);

        $client = $this->storeClients($request);

        $reservation = $this->createReservation($house, $request, $client);

        BookingEvent::dispatch($reservation);

        return json_encode($reservation);
    }

    private function getHouse($attributes): Model|Builder|null
    {
        return House::query()
            ->select([
                'id',
                'prices',
            ])
            ->where('id', '=', $attributes->input('apartment'))
            ->when('status',
                fn ($builder) => $builder->where('status', HouseEnum::VALIDATED_HOUSE)
            )
            ->first();
    }

    private function storeClients($attributes): Model|Builder|Client|_IH_Client_QB
    {
        return Client::query()
            ->create([
                'name' => $attributes->input('username'),
                'last_name' => $attributes->input('email'),
                'phones_number' => $attributes->input('phone_number'),
                'email' => $attributes->input('email'),
            ]);
    }

    private function createReservation($house, $attributes, $client): _IH_Reservation_QB|Reservation|Builder|Model
    {
        return Reservation::query()
            ->create([
                'house_id' => $house->id,
                'user_id' => auth()->id() ?? null,
                'status' => ReservationEnum::PENDING_RESERVATION,
                'messages' => $attributes->input('messages'),
                'client_id' => $client->id
            ]);
    }
}
