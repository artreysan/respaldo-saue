@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    <div class="container">

        {{-- Bloque de titulo de la solicitud --}}
        <div class="container">
            <h4><strong>SOLICITUD PARA ALTA DE SERVICIOS:</strong></h4>
            <div class="row">
                <div class="col-md-6">
                    <h5>Ciudad de México a <?php echo date('j-m-Y'); ?> </h5>
                </div>
                <div class="col-md-1">
                    <a href="/dashboard"><button type="button" class="btn btn-secondary">Inicio</button></a>
                </div>
                <div class="col-md-1">
                    <a href="register"><button type="button" class="btn btn-danger">Nueva</button></a>
                </div>
                <div class="col-md-4">
                    <a href="/collaborators/register"><button type="button" class="btn btn-secondary">Registrar colaborador</button></a>
                </div>
            </div>
            <hr class="red">
        </div>
    </div>
    <br>
    <div class="container">
        <table class="table">
            <thead class="table-dark">
                <th class="col-md-1">Id</th>
                <th class="col-md-1">Colaborador</th>
                <th class="col-md-1">Empresa</th>
                <th class="col-md-2">Usuario que realizó la peticion</th>
                <th class="col-md-1">Status</th>
            </thead>
            @foreach ($petitions as $petition)
                <tbody>
                    <td>{{ $petition->id }}</td>
                    <td>{{ $petition->collaborator_id }}</td>
                    <td>{{ $petition->user_id }}</td>
                    <td>{{ $petition->user_id }}</td>
                    <td>{{ $petition->user_id }}</td>
                </tbody>
            @endforeach
        </table>
    </div>
@stop
