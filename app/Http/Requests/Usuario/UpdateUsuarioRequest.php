<?php

namespace App\Http\Requests\Usuario;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUsuarioRequest extends FormRequest
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
            'rol_id' => 'required',
            'name' => 'required|string|min:3|max:80',
            'email' => "required|email|unique:users,email,{$this->usuario}",
            'password' => 'min:2|max:60',
            'status' => 'required|string'
        ];
    }
}
