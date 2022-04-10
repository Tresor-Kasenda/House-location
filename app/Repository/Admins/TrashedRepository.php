<?php
declare(strict_types=1);

namespace App\Repository\Admins;

use App\Contracts\TrashedRepositoryInterface;
use App\Models\House;
use App\Traits\ImageUploader;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class TrashedRepository implements TrashedRepositoryInterface
{
    use ImageUploader;

    public function trashed()
    {
        // TODO: Implement trashed() method.
    }

    public function restore(string $key): Model|Builder|House
    {
        $room = House::withTrashed()
            ->where('key', '=', $key)
            ->firstOrFail();
        $room->restore();
        toast('Appartement restaurer avec success', 'success');
        return $room;
    }

    public function forceDelete(string $key): Model|Builder
    {
        $room = House::query()
            ->where('key' , '=', $key)
            ->withTrashed()
            ->first();
        $this->removePathOfImages($room);
        $room->forceDelete();
        $room->categories()->detach();
        toast('L appartement a ete supprimer définitivement de la plate-forme', 'success');
        return $room;
    }
}
