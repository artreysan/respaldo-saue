@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<<<<<<< HEAD
<div class="container-nav">
    <div class="row">
        <div class="col-md-1 p-4"></div>
        <div class="col-md-9 p-4">
            <h4><strong>Proyectos</strong></h4>
            <h6>Ciudad de México a <?php echo date('j-m-Y'); ?> </h6>
        </div>
        <div class="col-md-2 p-3">
            <img class="imagen-header" src="{{ URL::asset('img/download.png') }}" alt="">
        </div>
    </div>
</div>
    <br>
=======

>>>>>>> bd033d6b52d21121fd3154a15f1700a377c83440
    <div class="container">
        {{-- Bloque de titulo de la solicitud --}}
        <div class="container">
            <h4><strong>PROYECTOS: </strong></h4>
            <div class="row">
                <div class="col-md-10">
                    <h5>Ciudad de México a <?php echo date('j-m-Y'); ?> </h5>
                </div>
                <div class="col-md-1">
                    <a href="/dashboard"><button type="button" class="btn btn-secondary">Inicio</button></a>
                </div>
            </div>
            <hr class="red">
        </div>
    </div>
    <br>
    <div class="container">
        <table class="table">
<<<<<<< HEAD
            <thead class="table-secondary">
=======
            <thead class="table-dark">
>>>>>>> bd033d6b52d21121fd3154a15f1700a377c83440
                <th>Id</th>
                <th>Nombre largo</th>
                <th>Nombre corto</th>
                <th class="col-md-4">Coordinador</th>
            </thead>
            @foreach ($projects as $project)
                <tbody>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->nombre_completo}}</td>
                    <td>{{ $project->nombre_corto}}</td>
                    <td class="col-md-4">{{ $project->coordinador}}</td>
                </tbody>
            @endforeach
        </table>
    </div>
@stop
