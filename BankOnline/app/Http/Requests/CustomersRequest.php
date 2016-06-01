<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CustomersRequest extends Request
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
          // Customers
            'nombre' => 'required',
            'apellido' => 'required',
            'dpi' => 'required',
            'email' => 'email',
            'direccion' => 'required',
            'telefono' => 'required|numeric|min:8',
            'beneficiario' => 'required',
            // Accounts
            'idTipo' => 'required',
            'monto' => 'required|numeric',
            'fechaCreacion' => 'required|date',
            // users
            'usuario' => 'required',
            'password' => 'required|min:8'
        ];
    }
}
