@extends('adminlte::page')

@section('title', 'UTIC')

@section('content_header')
    <div class="container">
            {{-- Bloque de titulo de la solicitud --}}
            <div class="container">
                <h4><strong>REGISTRO DE EQUIPO DE COMPUTO EN LA UTIC:</strong></h4>
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
            <br>

            <div class="container">
                <form action="/equipment/register" method="POST">
                    @csrf

                    <!--Inicio del bloque del equipo-->
                    <div class="container">
                        <h4>Información del equipo a asignar y/o registrar:</h4>
                    </div>
                    <br>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3"><strong>Tipo del equipo:</strong></div>
                            <div class="col-md-2">
                            <select name="tipo" id="tipo" required>
                                <option value="Laptop" id="Laptop">Laptop</option>
                                <option value="AllOne" id="AllOne">AllOne</option>
                                <option value="PC" id="PC">PC</option>
                            </select>
                    </div>
                </div>
                <br>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3"><strong>Marca:</strong></div>
                        <div class="col-md-3">
                            <input class="border-success" id="marca" name="marca" type="text" placeholder=" Marca "
                                value="{{ old('marca') }}" required />
                        </div>
                        <div class="col-md-3"><strong>Modelo:</strong></div>
                        <div class="col-md-3">
                            <input class="border-success" id="modelo" name="modelo" type="text"
                                placeholder=" Modelo " value="{{ old('modelo') }}" required />
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-3"><strong>Serie:</strong></div>
                        <div class="col-md-3">
                            <input class="border-success" id="serie" name="serie" type="text" placeholder=" Serie "
                                value="{{ old('modelo') }}" required />
                        </div>

                        <div class="col-md-3"><strong>IP Antigua:</strong></div>
                        <div class="col-md-3">
                            <input type="text" minlength="7" maxlength="15" size="15"
                                pattern="^((\d{1,2}|1\d\d|2[0-4]\d|25[0-5])\.){3}(\d{1,2}|1\d\d|2[0-4]\d|25[0-5])$"
                                class="border-success" id="ip_antigua" name="ip_antigua" placeholder=" IP Antigua "
                                value="{{ old('ip_antigua') }}" required />
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-3"><strong>MAC_ETHERNET:</strong></div>
                        <div class="col-md-3">
                            <input class="border-success" id="mac_ethernet" name="mac_ethernet" type="text"
                                placeholder=" mac_ethernet " value="{{ old('mac_ethernet') }}" required />
                        </div>
                        <div class="col-md-3"><strong>MAC_WIFI:</strong></div>
                        <div class="col-md-3">
                            <input class="border-success" id="mac_wifi" name="mac_wifi" type="text"
                                placeholder=" mac_wifi " value="{{ old('mac_wifi') }}" required />
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-2"><strong>Propiedad UTIC: </strong></div>
                        <div class="col-sm-1"><input type="radio" name="equipo_sict" value="equipo_sict"> Sí</div>
                        <div class="col-sm-1"><input type="radio" name="equipo_sict" value="equipo_sict" checked> No</div>
                        <br>
                        <br>
                        <div class="col-md-3"><strong>Nombre del propietario: </strong></div>
                        <div class="col-md-3"><input id="propietario" type="text" name="propietario" required></div>
                    </div>
                    <br>
                    <br>
                </div>
                <!--Fin del bloeque de información del usuario a registrar-->

                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <input class="btn btn-primary btn-lg active" type="submit" value="Enviar solicitud">
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
