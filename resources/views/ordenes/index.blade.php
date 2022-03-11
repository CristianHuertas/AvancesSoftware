@extends('plantilla')

@section('seccion')
    <div class="container">
        <div class="row justify-content-center">

            <div>

                <h1 class="h2">Crear Orden de venta</h1>
            </div>
            <div class="" style="background-color: lightgrey ; margin: 3%; padding: 1%">
                <div class="col-auto"
                    style="background-color: lightgrey ; margin-right: auto; margin-left: auto; padding: 2%; align-content: center">
                    <h1 class="h4">Elija la empresa para la orden</h1>

                    {{-- <form action="{{ route('ordenes.create') }}" > --}}
                    <form action="">

                        {{-- token para evitar que envien formularios desde otra web --}}
                        @csrf

                        @if (session('datos'))
                            <div class="alert alert-warning alert-dismissible fade show mt-3" role="alert">
                                {{ session('datos') }}
                                <button type="button" class="Close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <label for="">Buscar por nombre empresa:</label>
                        <input type="text" name="custName" placeholder="Nombre de la empresa" aria-label="Search"
                            class="form-control" value="{{ $custName }}" required>
                        <br>
                        <button class="btn btn-outline-dark" type="submit" style="padding: 1%; margin: 1% ">Buscar
                            Empresa</button><br>
                    </form>

                    <form action="">

                        {{-- token para evitar que envien formularios desde otra web --}}
                        @csrf

                        {{-- Sesion "datos", para enviar mensajes de alerta --}}
                        @if (session('datos'))
                            <div class="alert alert-warning alert-dismissible fade show mt-3" role="alert">
                                {{ session('datos') }}
                                <button type="button" class="Close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <label for="" style="">Buscar por Id empresa: </label>
                        <input type="number" name="custId" placeholder="Id de la empresa" aria-label="Search"
                            class="form-control" value="{{ $custId }}" required>
                        <br>
                        <button class="btn btn-outline-dark" type="submit" style="padding: 1%; margin: 1% ">Buscar
                            ID</button><br>
                    </form>
                </div>
                {{-- {{ $custId }} --}}
            </div>

            <h1 class="h4">Resultados Consulta</h1>
            <div>
                {{-- {{ $custId }} --}}
                {{-- {{ $custName }} --}}
                {{-- {{ $datosEmpresa }} --}}
                {{-- {{ $datosEmpresaName }} --}}

                <table class="table">
                    <thead>
                        <tr>

                            <th scope="col">ID empresa</th>
                            <th scope="col">Nombre empresa</th>
                            <th scope="col">Pais</th>
                            <th scope="col">Ciudad</th>
                            <th scope="col">Nombre Contacto</th>

                        </tr>

                    </thead>
                    <tbody>
                        @foreach ($datosEmpresa as $item)
                            <tr>
                                <td>
                                    <a href="{{ route('ordenes.show', $item) }}">{{ $item->custId }}</a>
                                </td>
                                <td>
                                    <a href="{{ route('ordenes.show', $item) }}">{{ $item->companyName }}</a>
                                </td>

                                <td>{{ $item->country }}</td>
                                <td>{{ $item->city }}</td>
                                <td>{{ $item->contactName }}</td>


                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
