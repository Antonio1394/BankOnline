<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\DepositosRequest;

use App\Movimiento;
use App\Cuenta;

class DepositosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $depositos = Movimiento::where('idTipo', '1')->orderBy('id', 'DESC')->get();
        return view('admin/depositos/index', compact('depositos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/depositos/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DepositosRequest $request)
    {
        $numberAccount = Cuenta::where('noCuenta', $request->cuenta_destino)->take(1)->get();
        $deposito = new Movimiento();

        if( $numberAccount->count() == 0 or $numberAccount[0]->estado == false )
            return redirect('admin/depositos')->with('error', 'La cuenta no existe o esta desactiva.');
        else {
            $deposito->idCuenta = $numberAccount[0]->id;
            $deposito->cuenta_destino = $numberAccount[0]->id;
            $deposito->idTipo = 1;
            $deposito->cuenta_origen = 0;
            $deposito->monto = $request->monto;
            $deposito->fecha = $request->fecha;
            $deposito->save();

            $account = Cuenta::find($numberAccount[0]->id);
            $account->monto = $account->monto + $request->monto;
            $account->save();

            return redirect('admin/depositos')->with('message', 'Deposito realizado correctamente.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
}
