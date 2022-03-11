<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\salesorder;
use App\Models\Customer;
use App\Models\Category;
use App\Models\employee;


use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Void_;

class OrdenesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $custName = $request->get('custName');
        $custId = $request->get('custId');
        //$datosEmpresa = " ";
        /* $datosEmpresa = DB::table('customer')
            ->where('companyName', 'like', '%' . $custName . '%')
            ->get(); */

        /*      $datosArrayEmpresa=array();
        if ($custName != null) {
            $datosEmpresa = Customer::where('companyName', 'like', '%' . $custName . '%')->get();
            $datosArrayEmpresa=$datosEmpresa;
        } elseif ($custId != null) {
            $datosEmpresa = Customer::where('custId', '=', $custId)->get();
            $datosArrayEmpresa=$datosEmpresa;
        } */

        $datosEmpresaName = Customer::where('companyName', 'like', '%' . $custName . '%')->get();
        $datosEmpresaId = Customer::where('custId', '=', $custId)->get();

        if (empty($custName)) {
            if (empty($custId)) {
                $datosEmpresa = $datosEmpresaId;
            } else {
                $datosEmpresa = $datosEmpresaId;
            }
        } else {
            $datosEmpresa = $datosEmpresaName;
        }

        return view('ordenes.index', compact('custId', 'custName', 'datosEmpresa', 'datosEmpresaName'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $nuevaOrden= new salesorder();
        $nuevaOrden->custId = $request->custId ;
        $nuevaOrden->employeeId = $request->employeeId ;
        $nuevaOrden->orderDate = $request->orderDate ;
        $nuevaOrden->shipCountry = $request->shipCountry ;

        $nuevaOrden->shipperId  = 1;
        $nuevaOrden->save();

        return back()->with('datos', 'Orden Creada!');


        /* $datoPrueba = $nuevaOrden;
        return view('ordenes.create', compact('datoPrueba')); */
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
        $unaEmpresa= Customer::findOrFail($id);
        $categoria= Category::all();
        $empleado= employee::all();


        return view('ordenes.show', compact('unaEmpresa', 'categoria', 'empleado'));
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
