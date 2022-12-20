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
        <div class="row">
            <div class="col-md-10"></div>
            <div class="col-md-1"><a href="/dashboard"><button type="button" class="btn btn-secondary">Inicio</button></a></div>
            <div class="col-md-1"><a href="enterprise/create"><button type="button" class="btn btn-secondary">Registrar</button></a></div>
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
                    <td>{{ $enterprise->name}}</td>
                    <td>{{ $enterprise->contract}}</td>
                </tbody>
            @endforeach
        </table>
    </div>
@stop
