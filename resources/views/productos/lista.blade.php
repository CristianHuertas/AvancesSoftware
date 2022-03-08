@extends('plantilla')

@section('seccion')
    <div class="row" style="margin: auto; height: 100%">
        <div class="col-lg-4">
            <h5 class="h3">Filtro por categoria</h5>
            @foreach ($categoriaUnica as $item2)
                <div class="form-check"">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        {{ $item2->categoryName }}
                    </label>
                </div>
            @endforeach
            <h3 class="h3">Filtro por proveedor</h3>
            @foreach ($proveedorUnico as $item2)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        {{ $item2->companyName }}
                    </label>
                </div>
            @endforeach


        </div>
        <div class="col-lg-8">
            <h1 class="display-4">Listado de productos</h1>

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
                        {{ $item->categoryName }}
                        <tr>
                            {{-- ->productId son los titulos de la tabla Product de la db --}}
                            <th scope="row">{{ $item->productId }}</th>
                            <td>
                                {{-- productos.detalle es el name de la ruta webweb --}}
                                <a href="{{ route('productos.detalle', $item) }}">
                                    {{ $item->productName }}
                                </a>

                            </td>

                            {{-- Busca la coincidencia entre las tablas product y categoria --}}
                            @foreach ($categoriaUnica as $item2)
                                @if ($item2->categoryId == $item->categoryId)
                                    <td> {{ $item2->categoryName }}</td>
                                @endif
                            @endforeach


                            @foreach ($proveedorUnico as $item2)
                                @if ($item2->supplierId == $item->supplierId)
                                    <td> {{ $item2->companyName }}</td>
                                @endif
                            @endforeach


                        </tr>
                    @endforeach
                </tbody>


            </table>
        </div>

    </div>
    {{ $todosProductos->links() }}
@endsection
