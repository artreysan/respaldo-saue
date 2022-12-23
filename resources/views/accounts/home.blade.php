@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    <div class="container">
        {{-- Bloque de titulo de la solicitud --}}
        <div class="container">
            <h4><strong>CUENTAS DE ACCESO: </strong></h4>
            <div class="row">
                <div class="col-md-10">
                    <h5>Ciudad de México a <?php echo date('j-m-Y'); ?> </h5>
                </div>
                <div class="col-md-1">
                    <a href="dashboard"><button type="button" class="btn btn-secondary">Inicio</button></a>
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
                <th>cuenta_gitlab</th>
                <th>cuenta_glpi </th>
                <th>cuenta_jira</th>
                <th>cuenta_da</th>
                <th>Ver detalles</th>
            </thead>
            @foreach ($accounts as $accunt)
                <tbody>
                    <td>{{ $accunt->id }}</td>
                    <td>{{ $accunt->cuenta_gitlab}}</td>
                    <td>{{ $accunt->cuenta_glpi}}</td>
                    <td>{{ $accunt->cuenta_jira}}</td>
                    <td>{{ $accunt->cuenta_da}}</td>
                    <th>Propietario</th>
                </tbody>
            @endforeach
        </table>
    </div>
@stop
