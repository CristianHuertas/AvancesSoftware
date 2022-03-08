@extends('plantilla')

@section('seccion')
    <div>
        <div>
            <h1 class="h2">Ordenes de venta por Empresa</h1>
            <form class="d-flex">
                @csrf
                <input class="form-control me-2" type="number" name="buscarpor2" value="{{ old('buscarpor') }}"
                    placeholder="Buscar Id de la Empresa" aria-label="Search" required>
                <button class="btn btn-outline-dark" type="submit">Buscar</button>
            </form>
        </div>
        <br>

        {{-- {{ $comprasEmpresa }}
        {{ $buscarpor2 }} --}}


        <h2 class="h4">Resultados de la busqueda ID {{ $buscarpor2 }}</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Numero Orden</th>
                    <th scope="col">Empresa</th>
                    <th scope="col">Fecha orden</th>
                    <th scope="col">Pais Envío</th>
                    <th scope="col">Ciudad Envío</th>

                </tr>

            </thead>
            <tbody>
                @foreach ($comprasEmpresa as $item)
                    <tr>
                        <th scope="row">{{ $item->orderId }}</th>

                        @foreach ($datosEmpresa as $item2)
                            <td>{{ $item2->companyName }}</td>
                        @endforeach
                        <td>{{ $item->orderDate }}</td>
                        <td>{{ $item->shipCountry }}</td>
                        <td>{{ $item->shipCity }}</td>

                    </tr>
                @endforeach

            </tbody>

        </table>

    </div>
    {{-- {{ $datosEmpresa->links() }} --}}
@endsection
