<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SlideRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'min:4', 'string'],
            'images' => ['required', 'image', 'mimes:jpeg,jpg,png', 'max:5000'],
            'description' => ['nullable', 'string'],
        ];
    }
}
