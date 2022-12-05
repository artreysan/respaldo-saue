@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="container-nav">
        <div class="row">
            <div class="col-md-1 p-4"></div>
            <div class="col-md-9 p-4">
                <h4><strong>Solicitudes</strong></h4>
                <h6>Ciudad de México a <?php echo date('j-m-Y'); ?> </h6>
            </div>
            <div class="col-md-2 p-3">
                <img class="imagen-header" src="{{ URL::asset('img/download.png') }}" alt="">
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="container">
        <table class="table table-bordered">
            <thead class="table-secondary">
                <th>Folio</th>
                <th>Empresa</th>
                <th>Fecha</th>
                <th>Colaborador</th>
                <th>Status</th>
                <th>Ver</th>
            </thead>
            @foreach ($petitions as $petition)
                <tbody>
                    <td>{{ $petition->fileID }}</td>
                    <td>{{ $petition->collaborator->enterprise->name }}</td>
                    <td>{{ $petition->created_at }}</td>
                    <td>{{ $petition->collaborator->nombre }} {{ $petition->collaborator->apellido_paterno }}</td>
                    <td>
                        <?php
                        switch ($petition->status) {
                            case 0:
                                echo '<div class="far fa-circle pendiente"></div>';
                                break;
                            case 1:
                                echo '<div class="far fa-circle en-proceso"></div>';
                                break;
                            case 2:
                                echo '<div class="far fa-circle atendida"></div>';
                                break;
                            case 3:
                                echo '<div class="far fa-circle validada"></div>';
                                break;
                        }
                        ?>
                    </td>
                    <td><a href="/petition/{{ $petition->id }}" alt="Perfil" class="col-md-1 fas fa-eye"></a></td>
                </tbody>
            @endforeach
        </table>
    </div>
@stop
