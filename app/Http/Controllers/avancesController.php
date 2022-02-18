<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Models\Product;
use App\Models;


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

        //retorna toda la tabla product, tomado del model Product
        $productoMostrado = Product::all();
        return $productoMostrado;
        //$id=1;
        //$nota = App\Models\Product::findOrFail($id);
        //return view('productos.lista', compact('nota'));
        //return view('productos.lista');

    }

  /*   public function lista($productId){
        $producto = App\Models\Product::findOrFail($productId);
        return view('productos.lista', compact('producto'));
    } */
   /*  public function lista($id){
        return Product::findOrFail($id);
    } */


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

    public function todosProductos()
    {
        $todosProductos= Product::Paginate(15);
        //return $unProducto;
        return view('productos.lista', compact('todosProductos'));
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
