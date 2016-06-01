<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Cuenta;
use App\Cliente;
use App\User;

class BaseCustomersController extends Controller
{
    private $request;
    private $customer;
    private $account;
    private $user;

    protected function begin($request)
    {
        $this->request = $request;
    }

    // Guardar Cliente
    protected function customersSave()
    {
        $this->customer = new Cliente;

        $this->customer->nombre = $this->request->nombre;
        $this->customer->apellido = $this->request->apellido;
        $this->customer->dpi = $this->request->dpi;
        $this->customer->email = $this->request->email;
        $this->customer->direccion = $this->request->direccion;
        $this->customer->telefono = $this->request->telefono;
        $this->customer->beneficiario = $this->request->beneficiario;

        $this->customer->save();
    }

    // Guardar Cuenta
    protected function accountSave()
    {
        $this->account = new Cuenta;

        $this->account->idTipo = $this->request->idTipo;
        $this->account->monto = $this->request->monto;
        $this->account->fechaCreacion = $this->request->fechaCreacion;
        $this->account->idCliente = $this->customer->id;
        $this->account->estado = true;
        $this->account->noCuenta = '2016-' . $this->customer->id;

        $this->account->save();
    }

    // Gurardar usuario
    protected function userSave()
    {
        $this->user = new User;

        $this->user->usuario = $this->request->usuario;
        $this->user->password = $this->request->password;
        $this->user->estado = true;
        $this->user->idCliente = $this->customer->id;

        $this->user->save();
    }
}
