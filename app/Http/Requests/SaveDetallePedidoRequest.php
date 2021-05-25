<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveDetallePedidoRequest extends FormRequest
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
            //
            'DP_Precio'=>'boolean',
            'DP_Cantidad'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'DP_Precio.boolean'=>'Se necesita el precio del producto',
            'DP_Cantidad.required'=>'Se necesita la cantidad de productos',
        ];
    }
}
