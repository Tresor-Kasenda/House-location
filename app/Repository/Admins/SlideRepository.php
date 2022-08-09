<?php

declare(strict_types=1);

namespace App\Repository\Admins;

use App\Contracts\SlideRepositoryInterface;
use App\Http\Requests\SlideRequest;
use App\Models\Slider;
use App\Services\ToastService;
use App\Traits\ImageUploader;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class SlideRepository implements SlideRepositoryInterface
{
    use ImageUploader;

    public function __construct(protected ToastService $service)
    {
    }

    public function getContents(): Collection|array
    {
        return Slider::query()
            ->select([
                'key',
                'title',
                'images',
                'description'
            ])
            ->orderByDesc('created_at')
            ->get();
    }

    public function show(string $key): Model|Builder
    {
        return Slider::query()
            ->select([
                'key',
                'title',
                'images',
                'description'
            ])
            ->where('key', '=', $key)
            ->firstOrFail();
    }

    public function created(SlideRequest $request): Model|Builder
    {
        $slide = Slider::query()
            ->create([
                'images' => self::uploadFiles($request),
                'title' => $request->input('title'),
                'description' => $request->input('description')
            ]);
        $this->service->success("Un nouveau slide a ete ajouter avec success", 'success');
        return $slide;
    }

    public function updated(string $key, SlideRequest $request): Model|Builder
    {
        $slide = $this->show($key);
        $this->removePathOfImages($slide);
        $slide->update([
            'images' => self::uploadFiles($request),
            'title' => $request->input('title'),
            'description' => $request->input('description')
        ]);
        $this->service->success("Un slide a ete modifier avec success", 'success');
        return $slide;
    }

    public function deleted(string $key): Model|Builder
    {
        $slide = $this->show($key);
        $slide->delete();
        $this->service->success("Un slide a ete supprimer avec success", 'success');
        return $slide;
    }
}
