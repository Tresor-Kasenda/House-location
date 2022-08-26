<?php

declare(strict_types=1);

namespace App\Repository\Backend;

use App\Contracts\ApartmentRepositoryInterface;
use App\Models\House;
use App\Services\ToastService;
use App\Traits\ApartmentCrud;
use App\Traits\RandomValues;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class ApartmentRepository implements ApartmentRepositoryInterface
{
    use RandomValues, ApartmentCrud;

    public function __construct(protected ToastService $service)
    {
    }

    public function getContents(): Collection
    {
        return House::query()
            ->select([
                'id',
                'images',
                'phone_number',
                'status',
                'commune',
                'town',
            ])
            ->orderByDesc('created_at')
            ->get();
    }

    public function show(string $key): Model|Builder
    {
        $house = House::query()
            ->select([
                'id',
                'user_id',
                'prices',
                'warranty_price',
                'commune',
                'town',
                'district',
                'address',
                'phone_number',
                'email',
                'latitude',
                'longitude',
                'images',
                'status',
                'reference',
                'type_id',
            ])
            ->with(['categories'])
            ->where('id', '=', $key)
            ->firstOrFail();

        return $house->load(['type:id,name', 'detail']);
    }

    public function deleted(string $key): Model|Builder|int|null
    {
        $room = $this->show(key: $key);
        if ($room->status) {
            $this->service->errors(
                messages: 'Appartement dois être suspendue avant d’être suspendue'
            );

            return null;
        }
        $room->delete();
        $this->service->success(
            messages: 'Appartement a été suspéndue pour des raisons de sécurité'
        );

        return $room;
    }
}
