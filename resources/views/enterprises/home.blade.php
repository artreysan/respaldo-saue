@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

<div class="container-nav">
    <div class="row">
        <div class="col-md-1 p-4"></div>
        <div class="col-md-9 p-4">
            <h4><strong>Empresas</strong></h4>
            <h6>Ciudad de México a <?php echo date('j-m-Y'); ?> </h6>
        </div>
        <div class="col-md-2 p-3">
            <img class="imagen-header" src="{{ URL::asset('img/download.png') }}" alt="">
        </div>
    </div>
</div>
<br>
    <div class="container">
<<<<<<< HEAD:resources/views/enterprise/index.blade.php
        <div class="row">
            <div class="col-md-10"></div>
            <div class="col-md-1"><a href="/dashboard"><button type="button" class="btn btn-secondary">Inicio</button></a></div>
            <div class="col-md-1"><a href="enterprise/create"><button type="button" class="btn btn-secondary">Registrar</button></a></div>
=======
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
>>>>>>> bd033d6b52d21121fd3154a15f1700a377c83440:resources/views/enterprises/home.blade.php
        </div>
    </div>
<br>
    <div class="container">
        <table class="table">
            <thead class="table-secondary">
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
