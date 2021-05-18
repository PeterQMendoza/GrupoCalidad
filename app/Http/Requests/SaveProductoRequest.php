<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveProductoRequest extends FormRequest
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
            'PRO_Descripcion'=>'required',
            'PRO_Stock'=>'required',
            'PRO_Precio'=>'boolean',
            'PRO_UM'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'PRO_Descripcion.required'=>'Se necesita un nombre al producto',
            'PRO_Stock.required'=>'Cuantas cantidades se dispone',
            'PRO_Precio.boolean'=>'Seguro que tienes marcado esa casilla',
            'PRO_UM.required'=>'Como se mide este producto',
        ];
    }

}
