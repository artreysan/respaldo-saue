@extends('adminlte::page')

@section('title', 'UTIC')

@section('content_header')
    <div class="container">
        {{-- Bloque de titulo de la solicitud --}}
        <div class="container">
            <h4><strong>REGISTRO DE COLABORADOR EXTERNO EN EL SIGTIC:</strong></h4>
            <div class="row">
                <div class="col-md-8">
                    <h5>Ciudad de México a <?php echo date('j-m-Y'); ?> </h5>
                </div>
                <div class="col-md-1">
                    <a href="/dashboard"><button type="button" class="btn btn-secondary">Inicio</button></a>
                </div>
                <div class="col-md-2">
                    <a href="home"><button type="button" class="btn btn-secondary">Ver todos</button></a>
                </div>
            </div>
            <hr class="red">
        </div>
        <br>

        <!--Información del colaborador-->
        <div class="container">
            <div class="container">
                <h4><strong>Información del colaborador:</strong></h4>
            </div>
            <br>

            <form action="/collaborators/register" method="POST">
                @csrf
                {{-- Inicio del contenedor de los datos del colaborador collaborador_id --}}
                <div class="container">
                    <div class="row">
                        <div class="col-md-2"><strong>Nombre(s):</strong></div>
                        <div class="col-md-3"><input type="text" id="nombre" name="nombre" required></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-2"><strong>Apellido Paterno:</strong></div>
                        <div class="col-md-3"><input type="text" id="apellido_paterno" name="apellido_paterno" required>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-2"><strong>Apellido Materno:</strong></div>
                        <div class="col-md-3"><input type="text" id="apellido_materno" name="apellido_materno">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-2"><strong>Email:</strong></div>
                        <div class="col-md-3"><input type="text" id="email" name="email" required></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-2"><strong>Ubicación en la SICT:</strong></div>
                        <select name="location_id" id="location_id">
                            @foreach ($locations as $location)
                                <option value="{{ $location->id }}">{{ $location->ubicacion }}</option>
                            @endforeach
                        </select>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-2"><strong>Empresa:</strong></div>
                        <select name="enterprise_id" id="enterprise_id">
                            @foreach ($enterprises as $enterprise)
                                <option value="{{ $enterprise->id }}" id="enterprise_id">{{ $enterprise->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-2"><strong>Rol:</strong></div>
                        <select name="rol_id" id="rol_id">
                            @foreach ($rols as $rol)
                                <option value="{{ $rol->id }}" id="rol_id">{{ $rol->rol }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <br>
                <br>
                {{-- Fin del contenedor de los datos del colaborador --}}


                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <input class="btn btn-primary btn-lg active" type="submit" value="Registrar">
                        </div>
                        <div class="col-md-5">

                        </div>

                    </div>
                </div>

            </form>
        </div>
        <br>
        <br>
    @stop
