<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrder_itemRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'order_id'=>['required'],
            'user_id' => ['required', 'numeric'],
            'ticket_id' => ['required', 'numeric', 'exists:tickets,id'],
            'quantity' => ['required', 'numeric', 'min:1'],
            'subtotal' => ['required', 'numeric', 'min:0'],
            'remember' => ['boolean'],
        ];
    }
}
