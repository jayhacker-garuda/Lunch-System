<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class mealTypeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|min:4|unique:meal_types',
            'meals_category_id' => 'required'
        ];
    }
}