<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarRequest extends FormRequest
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
            'brand' => 'required',
            'model' => 'required',
            'image' => 'nullable | image |max:200',
            'price' => 'required',
            'seats' => 'nullable',
            'transmission' => 'nullable | in:automatic,manual',
            'fuel_type' => 'nullable | in:diesel,petrol,electric,gas,hybrid',
            'notes' => 'nullable'

        ];
    }
}
