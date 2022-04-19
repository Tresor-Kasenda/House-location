<?php
declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules()
    {
        return [
            "username" => ['required', 'string'],
            "email" => ['required', 'email'],
            "subject" => ['required', 'string'],
            "message" => ['required', 'string', 'min:20']
        ];
    }
}
