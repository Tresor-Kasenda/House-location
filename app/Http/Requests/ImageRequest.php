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

    #[ArrayShape(['picture' => "string[]", 'house_id' => "string", 'house_id.*' => "array"])]
    public function rules(): array
    {
        return [
            'picture' => ['required', 'mimes:jpeg,jpg,png'],
            'house_id' => ['required'],
            'house_id.*' => ['integer', Rule::exists('houses', 'id')],
        ];
    }
}
