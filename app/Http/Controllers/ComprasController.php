<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\salesorder;

use Illuminate\Support\Facades\DB;

class ComprasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $buscarpor2 = $request->get('buscarpor2');

        //buscar por palabra clave
        /* $comprasEmpresa = DB::table('customer')
            ->where('companyName', 'like', '%' . $buscarpor2 . '%')
            ->get();
 */
        //buscar datos por id
        $comprasEmpresa = salesorder::where('custId', '=', $buscarpor2)->get();
        $datosEmpresa = Customer::where('custId', '=', $buscarpor2)->get();


        //$comprasEmpresa= Customer::findOrFail($buscarpor2);
        //$comprasEmpresa= Customer::where('custId', '=' , '2')->get();

        //return $unProducto;
        return view('compras.index', compact('comprasEmpresa',  'buscarpor2', 'datosEmpresa'));
    }

    //crearEmpresa
    /* public function crearEmpresa()
    {
        return view('compras.crearEmpresa');
    } */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('compras.crearEmpresa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empresa = new Customer();
        $empresa->address = $request->address;
        $empresa->city = $request->city;
        $empresa->companyName = $request->companyName;
        $empresa->contactName = $request->contactName;
        $empresa->contactTitle = $request->contactTitle;
        $empresa->country = $request->country;
        $empresa->email = $request->email;
        $empresa->fax = $request->fax;
        $empresa->mobile = $request->mobile;
        $empresa->phone = $request->phone;
        $empresa->postalCode = $request->postalCode;
        $empresa->region = $request->region;
        $empresa->save();

        //return redirect()->route('compras.crearEmpresa')->with('datos', 'Nueva empresa guardada');
        //return back()->with('mensaje', 'Nota Agregada!');

        return back()->with('datos', 'Empresa Creada!');
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
