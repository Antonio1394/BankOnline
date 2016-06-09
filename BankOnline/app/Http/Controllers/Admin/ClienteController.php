<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Cliente;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Servicio;
use App\PagoServicio;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $Cliente=Cliente::find(Auth::user()->idCliente);
      $Usuario=User::find(Auth::user()->id);
      $alertServers = $this->checkServices($request);
      return view('cliente.index',compact('Cliente','Usuario', 'alertServers'));
    }

    private function checkServices($request)
    {
        $services = Servicio::whereHas('Tarjeta', function($query) use ($request) {
            $query->whereHas('Cuenta', function($queryTwo) use ($request) {
                    $queryTwo->where('idCliente', $request->user()->idCliente);
            });
        })->get();

        $currentDate = \Carbon\Carbon::now();
        $month = date('m', strtotime($currentDate));
        $year = date('Y', strtotime($currentDate));

        $alertServers = [];

        foreach ($services as $key => $value) {

            $payment = PagoServicio::where('idServicio', $value->id)->get();

            foreach ($payment as $item => $data) {
                if ( $data->mes <= $month
                        and $data->año == $year
                        and $data->estado == false ) {
                    $alertServers[$key] = $data;
                }
            }
        }

        return $alertServers;
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
