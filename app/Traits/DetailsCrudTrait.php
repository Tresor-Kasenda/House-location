<?php
declare(strict_types=1);

namespace App\Traits;

use App\Models\Detail;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;

trait DetailsCrudTrait
{
    public function getContents(): array|Collection
    {
        return Detail::query()
            ->with('house')
            ->get();
    }

    public function show(string $key): Model|Builder|null
    {
        return Detail::query()
            ->where('key', '=', $key)
            ->first();
    }

    public function created($attributes): Model|Builder
    {
        $detail = Detail::query()
            ->create([
                'house_id' => $attributes->input('house_id'),
                'chamberNumber' => $attributes->input('chamberNumber'),
                'electricity' => $attributes->input('electricity'),
                'roomNumber' => $attributes->input('roomNumber'),
                'toilette' => $attributes->input('toilette'),
            ]);
        toast('Details for house added with success', 'success');
        return $detail;
    }

    public function updated(string $key, $attributes): Model|Builder|null
    {
        $detail = $this->show(key: $key);
        $detail->update([
            'house_id' => $attributes->input('house_id'),
            'chamberNumber' => $attributes->input('chamberNumber'),
            'electricity' => $attributes->input('electricity'),
            'roomNumber' => $attributes->input('roomNumber'),
            'toilette' => $attributes->input('toilette'),
        ]);
        toast('Details for house updated with success', 'success');
        return $detail;
    }

    public function deleted(string $key): RedirectResponse
    {
        $detail = $this->show(key: $key);
        $detail->delete();
        toast('Details for house deleted with success', 'success');
        return back();
    }
}
