<?php
declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ReservationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules()
    {
        return [
            'house' => ['required', Rule::exists('houses', 'key')],
            'username' => ['required', 'string', 'min:3'],
            'email' => ['nullable', 'email'],
            'phoneNumber' => ['required', 'min:10'],
            'message' => ['required', 'string', 'min:10']
        ];
    }
}
