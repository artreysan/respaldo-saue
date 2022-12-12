@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    <div class="container">
        {{-- Bloque de titulo de la solicitud --}}
        <div class="container">
            <h4><strong>TODOS LOS EQUIPOS DE COMPUTO EN LA UTIC:</strong></h4>
            <div class="row">
                <div class="col-md-10">
                    <h5>Ciudad de México a <?php echo date('j-m-Y'); ?> </h5>
                </div>
                <div class="col-md-1">
                    <a href="/dashboard"><button type="button" class="btn btn-secondary">Inicio</button></a>
                </div>
                <div class="col-md-1">
                    <a href="register"><button type="button" class="btn btn-danger">Registrar</button></a>
                </div>
            </div>
            <hr class="red">
        </div>
    </div>
    <br>
    <div class="container">
        <table class="table">
            <thead class="table-dark">
                <th>Id</th>
                <th>Tipo</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Serie</th>
                <th>Mac Ethernet</th>
                <th>Mac wifi</th>
                <th>Propietario</th>
            </thead>
            @foreach ($equipments as $equipment)
                <tbody>
                    <td>{{ $equipment->id }}</td>
                    <td>{{ $equipment->tipo }}</td>
                    <td>{{ $equipment->marca }}</td>
                    <td>{{ $equipment->modelo }}</td>
                    <td>{{ $equipment->serie }}</td>
                    <td>{{ $equipment->mac_ethernet }}</td>
                    <td>{{ $equipment->mac_wifi }}</td>
                    <td>{{ $equipment->propietario }}</td>
                </tbody>
            @endforeach
        </table>
    </div>
@stop
