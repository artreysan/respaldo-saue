@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="container-nav">
    <div class="row">
        <div class="col-md-6 p-4">
            <h4><strong>TODOS LOS COLABORADORES EN LA UTIC DE EMPRESAS EXTERNAS</strong></h4>
            <h6>Ciudad de México a <?php echo date('j-m-Y'); ?> </h6>
        </div>
        <div class="col-md-3">
            <img src="img/logosict.png" alt="">
        </div>
    </div>
</div>
    <div class="container p-5 ">
        <div class="row">
            <div class="col-md-10"></div>
            <div class="col-md-1"><a href="/dashboard"><button type="button" class="btn btn-secondary">Inicio</button></a>
            </div>
            <div class="col-md-1"><a href="collaborator/create"><button type="button"
                        class="btn btn-danger">Registrar</button></a></div>
        </div>
    </div>
    <div class="container">
        <table class="table table-bordered">
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
                    <td>{{ $collaborator->rol->rol }} </td>
                    <td>{{ $collaborator->enterprise->name }} </td>
                    <td><a href="/collaborator/{{$collaborator->id}}" alt="Perfil" ><button class=" fas fa-address-card"></button></a></td>
                </tbody>
            @endforeach
        </table>
    </div>
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
