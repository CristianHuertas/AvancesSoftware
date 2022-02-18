@extends('plantilla')

@section('seccion')
    <h1>Lista de un producto</h1>

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
            @foreach ($todosProductos as $item)
                <tr>
                    {{-- ->productId son los titulos de la tabla Product de la db --}}
                    <th scope="row">{{ $item->productId }}</th>
                    <td>
                        {{-- productos.detalle es el name de la ruta webweb --}}
                        <a href="{{ route('productos.detalle', $item) }}">
                            {{ $item->productName }}
                        </a>
                        
                    </td>
                    <td> {{ $item->categoryId }}</td>
                    <td> {{ $item->	supplierId }}</td>


                </tr>
            @endforeach
        </tbody>


    </table>

    {{$notas->links()}}
@endsection
