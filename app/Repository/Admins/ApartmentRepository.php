<?php

declare(strict_types=1);

namespace App\Repository\Admins;

use App\Contracts\ApartmentRepositoryInterface;
use App\Enums\UserRoleEnum;
use App\Models\House;
use App\Services\ToastService;
use App\Traits\ApartmentCrud;
use App\Traits\ImageUploader;
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
                'key',
                'images',
                'phone_number',
                'address',
                'status',
                'commune',
                'user_id'
            ])
            ->whereHas('user', function ($query) {
                $query->where('role_id', UserRoleEnum::DEALER_ROLE);
            })
            ->orderByDesc('created_at')
            ->get();
    }

    public function show(string $key): Model|Builder
    {
        $house = House::query()
            ->select([
                'key',
                'prices',
                'commune',
                'town',
                'district',
                'address',
                'guarantees',
                'phone_number',
                'email',
                'latitude',
                'longitude',
                'images',
                'status',
                'reference',
                'user_id',
                'type_id',
            ])
            ->with(['categories'])
            ->where('key', '=', $key)
            ->firstOrFail();
        return $house->load(['type:id,name', 'detail']);
    }

    public function deleted(string $key): Model|Builder|int|null
    {
        $room = $this->show(key: $key);
        if ($room->status){
            $this->service->errors(
                messages: "Appartement dois être suspendue avant d’être suspendue",
                type: 'warning'
            );
            return null;
        }
        $room->delete();
        $this->service->success(
            messages: "Appartement a été suspéndue pour des raisons de sécurité",
            type: "success"
        );
        return $room;
    }

}
