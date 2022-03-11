@extends('plantilla')

@section('seccion')
    {{-- {{ $unaEmpresa }} --}}

    {{-- <div class="" style="background-color: lightgrey ; margin: 3%; padding: 1%">
        <div class="col-auto"
            style="background-color: lightgrey ; margin-right: auto; margin-left: auto; padding: 2%; align-content: center">
        </div>
    </div> --}}

    <div class="container">
        {{-- <div class="row" style="margin: auto; height: 100%; margin-top: 3%"> --}}
        <div class="row justify-content-center">


            <div class="col-5" style="background-color: lightgrey ; margin: 2%; padding: 1%">
                {{-- <h1 class="h2">Registrar nueva empresa "Cliente"</h1> --}}
                <h1 class="h4">Crear nueva orden para la empresa: {{ $unaEmpresa->companyName }}</h1>

                <div class="col-auto"
                    style="background-color: lightgrey ; margin-right: auto; margin-left: auto; padding: 1%; align-content: center; text-align: center">
                    {{-- <form action="{{ route('compras.crearEmpresa')}}" method="POST"> --}}
                    <form action="{{ route('ordenes.create') }}" method="">
                        {{-- token para evitar que envien formularios desde otra web --}}
                        @csrf
                        {{-- Sesion "datos", para enviar mensajes --}}
                        @if (session('datos'))
                            <div class="alert alert-warning alert-dismissible fade show mt-3" role="alert">
                                {{ session('datos') }}
                                <button type="button" class="Close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif


                        <input type="hidden" name="custId" value="{{ $unaEmpresa->custId }}">
                        <div class="container">
                            <div class="row align-items-start">

                                <table class="table" style="text-align: center">
                                    <thead>
                                        <th>
                                            <label for="">Empleado</label>
                                        </th>
                                        <th>
                                            <select name="employeeId" id="" class="" required>
                                                <option value="">Seleccionar</option>
                                                @foreach ($empleado as $item)
                                                    <option value="{{ $item->employeeId }}">{{ $item->firstname }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </th>
                                    </thead>

                                    <thead>
                                        <th>
                                            <label for="">Producto</label>
                                        </th>
                                        <th>
                                            <select name="" id="" class="" required>
                                                <option value="">Seleccionar</option>

                                                @foreach ($categoria as $item)
                                                    <option value="{{ $item->categoryId }}">{{ $item->categoryName }}
                                                    </option>
                                                @endforeach

                                            </select>
                                        </th>
                                    </thead>


                                    <thead>
                                        <th>
                                            <label for="">Fecha Orden</label>
                                        </th>
                                        <th>
                                            <input type="date" name="orderDate" required>
                                        </th>
                                    </thead>

                                    <thead>
                                        <th>
                                            <label for="">País Envío</label>
                                        </th>
                                        <th>
                                            <input type="text" placeholder="País" name="shipCountry" required>
                                        </th>
                                    </thead>



                                    <thead>
                                        <th>
                                            <label for="">Peso Envío (kg)</label>
                                        </th>
                                        <th>
                                            <input type="number" placeholder="kg" name="freight" required>
                                        </th>
                                    </thead>

                                </table>

                            </div>
                        </div>
                        <button class="btn btn-outline-dark" type="submit"
                            style="margin: 1%; margin-left: auto ">Registrar</button><br>
                    </form>
                </div>

            </div>
        </div>

    </div>
@endsection
