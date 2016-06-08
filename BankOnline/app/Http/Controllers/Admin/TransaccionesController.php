<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Cuenta;
use App\Movimiento;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TransaccionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $cuentas=Cuenta::where('idCliente','=',Auth::user()->idCliente)->get();
      return view('cliente.transacciones.list',compact('cuentas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
      $idCuenta=Cuenta::where('noCuenta','=',$request->cuenta_origen)->get();
      $idCuenta2=Cuenta::where('noCuenta','=',$request->cuenta_destino)->get();

      $retiro->idCuenta=$idCuenta[0]->id;
      $retiro->idtipo=3;
      $retiro->cuenta_origen=$request->cuenta_origen;
      $retiro->cuenta_destino=$request->cuenta_destino;
      $retiro->monto=$request->monto;
      $retiro->fecha= $request->fecha;
      $retiro->save();
      $account = Cuenta::find($idCuenta[0]->id);
      $account->monto = $account->monto - $request->monto;
      $account->save();

      $account2 = Cuenta::find($idCuenta2[0]->id);
      $account2->monto = $account2->monto + $request->monto;
      $account2->save();

      return redirect('/admin/transacciones')->with('message','Transferencia Generado Exitosamente');

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

    public function mostrar($cuentaOrigen)
    {
      return view('cliente.transacciones.partials.createForm')->with('cuentaOrigen',$cuentaOrigen);
    }

    public function verificarCuenta($cuentaDestino,$monto,$cuentaOrigen)
    {
      $valor=Cuenta::where('noCuenta','=',$cuentaDestino)->count();
      $estadoCuentaDestino=Cuenta::where('noCuenta','=',$cuentaDestino)->get();
      $estado=Cuenta::where('noCuenta','=',$cuentaOrigen)->get();
      if($valor==0){
            return 'noExiste';
      }else{
            if($estadoCuentaDestino[0]->estado==0){
            return 'no';
          }//fin del if de estado
          else{
            if($monto<=$estado[0]->monto){
              return 'menor';
            }
          }
      }///else principal
    }
}
