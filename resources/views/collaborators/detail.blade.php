@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    <div class="container">
        {{-- Bloque de titulo de la solicitud --}}
        <div class="container">
            <br>
            <div class="row">
                <div class="col-md-6">
                    <h5>Ciudad de México a <?php echo date('j-m-Y'); ?> </h5>
                </div>
                <div class="col-md-1">
                    <a href="/dashboard"><button type="button" class="btn btn-secondary">Inicio</button></a>
                </div>
                <div class="col-md-2">
                    <a href="/collaborators/home"><button type="button" class="btn btn-secondary">Ver todos</button></a>
                </div>
                <div class="col-md-3">
                    <a href="/petition/register"><button type="button" class="btn btn-danger">Hacer solicitud</button></a>
                </div>
            </div>
            <hr class="red">
        </div>
    </div>
    <br>
    <div class="container">

            <h4><strong>{{ $collaborator->nombre }}</strong></h4>

    </div>
@stop
