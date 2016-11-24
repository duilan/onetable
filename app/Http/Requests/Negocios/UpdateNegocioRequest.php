<?php

namespace App\Http\Requests\Negocios;

use Illuminate\Foundation\Http\FormRequest;

class UpdateNegocioRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'pais_id'        => 'required|numeric',
            'user_id'        => 'numeric',
            'razonSocial'    => 'required|string',
            'rfc'            => "required|string|unique:negocios,rfc,{$this->negocio}",
            'email'          => "required|email|unique:negocios,email,{$this->negocio}",
            'calle'          => 'required|string',
            'numeroExterior' => 'required|integer|min:1|max:1000',
            'numeroInterior' => 'integer|min:1|max:100',
            'colonia'        => 'required|string',
            'delegacion'     => 'required|string',
            'estado'         => 'required|string',
            'codigoPostal'   => 'required|Integer'
        ];
    }
}
