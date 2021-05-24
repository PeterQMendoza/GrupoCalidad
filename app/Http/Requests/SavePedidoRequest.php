<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SavePedidoRequest extends FormRequest
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
            'PED_FechaPedido'=>'required',
            'PED_Monto'=>'required',
            'PED_Estado'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'PED_FechaPedido.required'=>'Se Necesita una Fecha',
            'PED_Monto.required'=>'De cuanto es el monto del pedido',
            'PED_Estado.required'=>'En que estado se encuentra el pedido',
        ];
    }
}
