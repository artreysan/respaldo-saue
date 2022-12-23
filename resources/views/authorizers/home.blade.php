@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    <div class="container">
        {{-- Bloque de titulo de la solicitud --}}
        <div class="container">
            <h4><strong>AUTORIZADORES DE SOLICITUDES:</strong></h4>
            <div class="row">
                <div class="col-md-10">
                    <h5>Ciudad de México a <?php echo date('j-m-Y'); ?> </h5>
                </div>
                <div class="col-md-1">
                    <a href="/home"><button type="button" class="btn btn-secondary">Inicio</button></a>
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
                <th>Nombre</th>
                <th>Puesto</th>
            </thead>
            @foreach ($authorizers as $authorizer)
                <tbody>
                    <td>{{ $authorizer->id }}</td>
                    <td>{{ $authorizer->nombre }}</td>
                    <td>{{ $authorizer->puesto }}</td>
                </tbody>
            @endforeach
        </table>
    </div>
@stop
