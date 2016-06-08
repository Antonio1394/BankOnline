<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Cliente;
use App\Servicio;
use App\Tarjeta;
use App\PagoServicio;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $services = Servicio::whereHas('Tarjeta', function($query) use ($request) {
            $query->whereHas('Cuenta', function($queryTwo) use ($request) {
                    $queryTwo->where('idCliente', $request->user()->idCliente);
            });
        })->get();

        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $cards = Tarjeta::whereHas('Cuenta', function($query) use($request){
            $query->where('idCliente', $request->user()->idCliente);
        })->lists('numeroTarjeta', 'id');

        return view('admin.services.create', compact('cards'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service = new Servicio;
        $service->fill($request->all());
        $service->save();

        $currentDate = \Carbon\Carbon::now();
        $month = date('m', strtotime($currentDate));
        $year = date('Y', strtotime($currentDate));

        for ($i=$month; $i <= 12; $i++) {
            $payment = new PagoServicio;
            $payment->idServicio = $service->id;
            $payment->año = $year;
            $payment->mes = $i;
            $payment->estado = false;
            $payment->save();
        }

        return redirect('/admin/servicios')->with('message', 'Servicio creado correctamente.');
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
        $payment = PagoServicio::find($id);
        $payment->estado = true;
        $payment->save();

        return redirect('/admin/servicios')->with('message', 'Servicio Pagado');
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
