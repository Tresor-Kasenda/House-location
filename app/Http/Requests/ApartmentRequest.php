<?php
declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ApartmentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'price_per_month' => ['required', 'min:2', 'numeric'],
            'address' => ['required' , 'max:255'],
            'guarantees' => ['required', 'min:2', 'max:4'],
            'phone_number' => ['required', Rule::unique('houses', 'phone_number')],
            'email' => ['required', 'email', Rule::unique('houses', 'email')],
            'latitude' => ['nullable', 'required_with:longitude', 'max:15'],
            'longitude' => ['nullable', 'required_with:longitude', 'max:15'],
            'picture' => ['required', 'mimes:jpeg,jpg,png', 'max:5000'],
            'commune' => ['required', 'min:4'],
            'district' => ['required', 'min:4'],
            'piece_number' => ['required', 'min:1'],
            'characteristic' => ['required', 'array'],
            'town' => ['required', 'min:3']
        ];
    }
}
