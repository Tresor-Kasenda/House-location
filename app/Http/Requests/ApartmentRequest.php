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
            'prices' => ['required', 'min:2', 'numeric'],
            'address' => ['required' , 'max:255'],
            'guarantees' => ['required', 'min:2', 'max:4'],
            'phoneNumber' => ['required', 'min:10'],
            'email' => ['required', 'email'],
            'latitude' => ['nullable', 'required_with:longitude', 'max:15'],
            'longitude' => ['nullable', 'required_with:longitude', 'max:15'],
            'images' => ['required', 'mimes:jpeg,jpg,png', 'max:5000'],
            'commune' => ['required', 'min:4'],
            'district' => ['required', 'min:4'],
            'roomNumber' => ['required', 'min:1'],
            'town' => ['required', 'min:3'],
            'categories' => ['required'],
            'type' => ['required']
        ];
    }
}
