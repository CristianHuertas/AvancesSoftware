<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App;
use App\Models\Product;
use App\Models\Category;
use App\Models\Customer;

use App\Models;
use Illuminate\Database\Eloquent\Collection;


class avancesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // auth()->user(); Es un objeto que contiene todo los datos del usuario
        //return auth()->user();
        $productoMostrado = Product::with('categorias')->paginate();

        //retorna toda la tabla product, tomado del model Product
        //$productoMostrado = Product::all();
        return $productoMostrado;
       

    }

 


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('productos.crear');
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
        $unProducto= Product::findOrFail($id);
        //return $unProducto;
        return view('productos.detalleProducto', compact('unProducto'));
    }

    public function buscarCategoria($id)
    {
        $claseProducto= Category::findOrFail($id);
        //return $unProducto;
        return view('productos.lista', compact('claseProducto'));
    }

    public function todosProductos()
    {
        $todosProductos = Product::with('categorias')->paginate(20);

        //$todosProductos= Product::Paginate(20);
        $categoriaUnica= Category::all();
        $proveedorUnico= Models\Supplier::all();

        //return $unProducto;
        return view('productos.lista', compact('todosProductos', 'categoriaUnica', 'proveedorUnico'));
    }

    public function compras(){
        return view('compras.index');
    }


   /*  public function comprasEmpresa(Request $request)
    {

        $buscarpor = $request->get('buscarpor');
        $comprasEmpresa= Customer::where('companyName', 'like', '%'.$buscarpor.'$');
        //return $unProducto;
        return view('compras.saleOrder', compact('comprasEmpresa', 'buscarpor'));
    } */
   
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
