<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\AccountRequest;

use App\Cuenta;
use App\TipoCuenta;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts = Cuenta::orderBy('id', 'DESC')->get();
        return view('admin/accounts/index', compact('accounts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    // Mostrar formulario de crear cuenta
    public function new($id)
    {
        $typeAccount = TipoCuenta::lists('descripcion', 'id');
        return view('admin.accounts.create', compact('typeAccount'))->with('id', $id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AccountRequest $request)
    {
        $account = new Cuenta;

        $account->idTipo = $request->idTipo;
        $account->monto = $request->monto;
        $account->fechaCreacion = $request->fechaCreacion;
        $account->idCliente = $request->idCliente;
        $account->estado = true;
        $account->noCuenta = '2016-' . $this->accountNumber();

        $account->save();

        return redirect('/admin/cuentas')->with('message', 'Cuenta creada correctamente.');
    }

    private function accountNumber()
    {
        $number = Cuenta::count();
        $number++;

        return $number;
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
          return view('admin.accounts.partials.deleteForm')->with('id', $id);
        }else {
          return view('admin.accounts.partials.activate')->with('id', $id);
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $account = Cuenta::find($id);///obtengo el Usuario
        $account->estado = false;// Cambio el Estaado del Paciente
        $account->save();
        return redirect('/admin/cuentas')->with('message','Temporalmente la cuenta fue dada de baja');
    }

    public function activate($id)
    {
        $account = Cuenta::find($id);///obtengo el Usuario
        $account->estado = true;// Cambio el Estaado del Paciente
        $account->save();
        return redirect('/admin/cuentas')->with('message','Cuenta Activada.');
    }
}
