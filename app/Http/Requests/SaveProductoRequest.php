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
            'codigo'=>'required',
            'nombre'=>'required',
            'precio'=>'required',
            'stock'=>'required',
            'vencimiento'=>'required',
            'estado'=>'required',
            'um'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'codigo.required'=>'No tiene codigo',
            'nombre.required'=>'Se necesita un nombre para reconocer producto',
            'precio.required'=>'el precio tiene que ser en decimal',
            'stock.required'=>'Cuantas cantidades dispone de este producto',
            'vencimiento.required'=>'¿El producto tiene vencimiento? Por favor indique fecha',
            'estado.required'=>'En que estado se encuentra el producto',
            'um.required'=>'Como mides la cantidad del producto',
        ];
    }

}
