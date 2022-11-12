@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    <div class="container">
        {{-- Bloque de titulo de la solicitud --}}
        <div class="container">
            <h4><strong>EMPRESAS REGISTRADAS EN LA UTIC: </strong></h4>
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
                <th>Nombre</th>
                <th>Contrato</th>
            </thead>
            @foreach ($enterprises as $enterprise)
                <tbody>
                    <td>{{ $enterprise->id }}</td>
                    <td>{{ $enterprise->nombre}}</td>
                    <td>{{ $enterprise->contrato}}</td>
                </tbody>
            @endforeach
        </table>
    </div>
@stop
