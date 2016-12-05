<?php

namespace App\Http\Requests\Sucursal;

use Illuminate\Foundation\Http\FormRequest;

class StoreSucursalRequest extends FormRequest
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
            'user_id' => 'numeric',
            'nombre' => 'required|string',
            'coordenadaLatitud' => 'required|numeric',
            'foto' => 'required',
            'descripcion' => 'required|string|min:1|max:500'
        ];
    }
    public function messages()
    {
        return [
            'coordenadaLatitud.required' => 'La ubicacion de la sucursal es obligatoria',
        ];
    }
}
