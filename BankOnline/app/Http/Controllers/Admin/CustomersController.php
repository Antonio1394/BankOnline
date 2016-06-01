<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\CustomersRequest;
use App\Http\Requests\CustomersEditRequest;

use App\Cuenta;
use App\TipoCuenta;
use App\Cliente;

class CustomersController extends BaseCustomersController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Cuenta::all();
        return view('admin/customers/index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $typeAccount = TipoCuenta::lists('descripcion', 'id');
        return view('admin/customers/create', compact('typeAccount'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomersRequest $request)
    {
        $this->begin($request);
        $this->customersSave();
        $this->accountSave();
        $this->userSave();

        return redirect('/admin/clientes')->with('message', 'Cliente creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $account=Cuenta::find($id);
        if ( $account->estado == true ) {
          return view('admin.customers.partials.deleteForm')->with('id', $id);
        }else {
          return view('admin.customers.partials.activate')->with('id', $id);
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Cliente::find($id);
        return view('admin/customers/edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CustomersEditRequest $request, $id)
    {
        $customer = Cliente::find($id);
        $customer->fill($request->all());
        $customer->save();

        return redirect('/admin/clientes')->with('message','Cliente Editado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        echo 'desactivar';
    }

    public function activate($id)
    {
        echo 'activar';
    }
}
