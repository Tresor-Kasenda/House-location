<?php
declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ImageRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'picture' => ['required', 'mimes:jpeg,jpg,png|max:5000'],
            'house_id' => ['required'],
            'house_id.*' => ['integer', Rule::exists('houses', 'id')],
        ];
    }
}
