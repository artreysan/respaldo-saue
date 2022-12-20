@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
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
    <div class="container">
        <div class="row">
            <div class="col-md-11"></div>
            <div class="col-md-1">
                <a href="/dashboard"><button type="button" class="btn btn-secondary">Inicio</button></a>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <table class="table">
            <thead class="table-secondary">
                <th>Id</th>
                <th>Nombre largo</th>
                <th>Nombre corto</th>
                <th class="col-md-4">Coordinador</th>
            </thead>
            @foreach ($projects as $project)
                <tbody>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->nombre_completo }}</td>
                    <td>{{ $project->nombre_corto }}</td>
                    <td class="col-md-4">{{ $project->coordinador }}</td>
                </tbody>
            @endforeach
        </table>
    </div>
    <br>
    <br>
    <br>
    <div class="container">
        <footer>
            ©
            <script>
                document.write(new Date().getFullYear())
            </script>
            Desarrollado en CDMX,<strong> UTIC </strong>
        </footer>
    </div>
@stop
