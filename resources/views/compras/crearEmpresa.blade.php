@extends('plantilla')

@section('seccion')
    <div class="container">
        {{-- <div class="row" style="margin: auto; height: 100%; margin-top: 3%"> --}}
        <div class="row justify-content-center">


            <div class="col-auto" style="background-color: lightgrey ; margin: 5%; padding: 1%">
                <h1 class="h2">Registrar nueva empresa "Cliente"</h1>
                <div class="col-auto"
                    style="background-color: lightgrey ; margin-right: 25%; margin-left: 25%; padding: 1%; align-content: center">
                    {{-- <form action="{{ route('compras.crearEmpresa')}}" method="POST"> --}}
                    <form action="{{ route('compras.store')}}" method="POST">

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

                        <input type="text" name="companyName" placeholder="Nombre de la empresa" required
                            class=".">
                        <br>
                        <input type="text" name="contactName" placeholder="Contacto en la empresa" required
                            class=".">
                        <br>
                        <input type="text" name="contactTitle" placeholder="Cargo del contacto" required
                            class=".">
                        <br>
                        <input type="text" name="address" placeholder="Direccion empresa" required class=".">
                        <br>
                        <input type="text" name="city" placeholder="Ciudad" required class=".">
                        <br>
                        <input type="text" name="region" placeholder="Region" required class=".">
                        <br>
                        <input type="number" name="postalCode" placeholder="Codigo Postal" class=".">
                        <br>
                        <input type="text" name="country" placeholder="País" required class=".">
                        <br>
                        <input type="number" name="phone" placeholder="Telefono" required class=".">
                        <br>
                        <input type="number" name="mobile" placeholder="Celular" class=".">
                        <br>
                        <input type="email" name="email" placeholder="Correo" required class=".">
                        <br>
                        <input type="number" name="fax" placeholder="Fax" class=".">
                        <br>
                        <button class="btn btn-outline-dark" type="submit"
                            style="margin: 10%; margin-left: 25% ">Registrar</button><br>
                    </form>
                </div>

            </div>
        </div>

    </div>
@endsection
