@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="p-3 bg-secondary bg-opacity-10 border-gray rounded-end">
        <h4><strong>PROYECTOS: </strong></h4>
        <div>
            <h5>Ciudad de México a <?php echo date('j-m-Y'); ?> </h5>
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
        <table class="table table-bordered">
            <thead class="table-dark">
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
