@extends('plantilla')

@section('seccion')
    <h1>Detalle de un producto</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre Producto</th>
                <th scope="col">Categoria</th>
                <th scope="col">Proveedor</th>
            </tr>
        </thead>
        <tbody>
            {{ $unProducto->productId }}
                <tr>
                    <th scope="row">{{ $unProducto->productId }}</th>
                    <td>
                        
                            {{ $unProducto->productName }}
                        
                    </td>
                    <td>{{ $unProducto->categoryId }}</td>
                    
                </tr>
        </tbody>


    </table>
@endsection