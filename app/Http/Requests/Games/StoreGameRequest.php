<?php

namespace App\Http\Requests\Games;

use Illuminate\Foundation\Http\FormRequest;

class StoreGameRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
//        ddd($this->request->all());
        // games can be created by admin only...
        return $this->user()->id === 1;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'image' => 'required|image',
            'name' => 'required|string',
            'relase_date' => 'required|digits:4|integer|min:1900|max:2099',
            'platform' => 'required|string|max:30',
            'genre' => 'required|string|max:30',
            'HW_requirements' => 'required|string|max:15',
            'rating' => 'required|integer|min:0|max:100',
            'description' => 'required|string|max:100'
        ];
    }
}
