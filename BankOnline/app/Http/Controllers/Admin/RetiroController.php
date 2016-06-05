<?php

namespace App\Http\Controllers\Admin;
use App\Movimiento;
use App\Cuenta;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RetiroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $retiro=Movimiento::where('idTipo','=','2')->get();
        return view('admin.retiros.list',compact('retiro'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.retiros.partials.createForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $retiro=new Movimiento;
        $idCuenta=Cuenta::where('noCuenta','=',$request->cuenta_destino)->get();

        $retiro->idCuenta=$idCuenta[0]->id;
        $retiro->idtipo=$request->idtipo;
        $retiro->cuenta_origen=$request->cuenta_origen;
        $retiro->cuenta_destino=$request->cuenta_destino;
        $retiro->monto=$request->monto;
        $retiro->fecha= date('d/m/Y');
        $retiro->save();

        return redirect('/admin/retiros')->with('message','Retiro Generado Exitosamente');

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

    public function verificarCuenta($cuenta)
    {
      
    }
}
