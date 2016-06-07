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
        $retiro->fecha= $request->fecha;
        $retiro->save();
        $account = Cuenta::find($idCuenta[0]->id);
        $account->monto = $account->monto - $request->monto;
        $account->save();



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

    public function verificarCuenta($cuenta,$monto)
    {
      $valor=Cuenta::where('noCuenta','=',$cuenta)->count();
      $estado=Cuenta::where('noCuenta','=',$cuenta)->get();

      if($valor==0){
            return 'noExiste';
      }else{
            if($estado[0]->estado==0){
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
