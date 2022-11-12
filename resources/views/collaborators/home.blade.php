@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    <div class="container">
        {{-- Bloque de titulo de la solicitud --}}
        <div class="container">
            <h4><strong>TODOS LOS COLABORADORES EN LA UTIC DE EMPRESAS EXTERNAS</strong></h4>
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
                <th>Apellidos</th>
                <th>Rol</th>
                <th>Empresa</th>
                <th>Ver</th>
            </thead>
            @foreach ($collaborators as $collaborator)
                <tbody>
                    <td>{{ $collaborator->id }}</td>
                    <td>{{ $collaborator->nombre }}</td>
                    <td>{{ $collaborator->apellido_paterno }} {{ $collaborator->apellido_materno }} </td>
                    <td>{{ $collaborator->rol_id }} </td>
                    <td>{{ $collaborator->enterprise_id }} </td>
                    <td><a href="/collaborators/detail"><button type="button" class="btn btn-secondary">Ver</button></a>
                    </td>
                </tbody>
            @endforeach
            {{-- @php
                  echo "<pre>";
                  print_r($collaborators);
                  echo "</pre>";
            @endphp --}}
        </table>
    </div>
@stop
