<?php
declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use JetBrains\PhpStorm\ArrayShape;

class ImageRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'images' => ['required', 'mimes:jpeg,jpg,png'],
            'house_id' => ['required'],
            'house_id.*' => ['integer', Rule::exists('houses', 'id')],
        ];
    }
}
