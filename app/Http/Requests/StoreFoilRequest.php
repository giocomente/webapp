<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Support\Str;

class StoreFoilRequest extends FormRequest
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
            'article' => 'required|unique:foils|max:30',
            'name' => 'required|max:100',
            'price' => 'required',
        ];
    }

    protected function prepareForValidation(){
        $this->merge([
            'article' => Str::upper($this->article),
        ]);
    }
}
