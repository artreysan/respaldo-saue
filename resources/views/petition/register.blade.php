@extends('adminlte::page')

@section('title', 'UTIC')

@section('content_header')

    {{-- Bloque de titulo de la solicitud --}}
    <div class="container">
        <br>
        <h4><strong>SOLICITUD DE ALTA SERVICIOS INTERNOS DE TICS USUARIOS EXTERNOS EN EL SIGTIC.</strong></h4>
        <br>
        <div class="row">
            <div class="col-md-6">
                <h5>Ciudad de México a <?php echo date('j-m-Y'); ?> </h5>
            </div>
            <div class="col-md-1">
                <a href="/dashboard"><button type="button" class="btn btn-secondary">Inicio</button></a>
            </div>
            <div class="col-md-4">
                <a href="/collaborators/register"><button type="button" class="btn btn-secondary">Registrar colaborador</button></a>
            </div>
        </div>
        <hr class="red">
    </div>

    {{-- Bloque del formulario de la peticion --}}
    <form action="/petition/register" method="POST">
        @csrf

        <!--Información del colaborador-->
        <div class="container">
            <div class="row container">
                <div class="col-md-3">
                    <h4><strong>Colaborador:</strong></h4>
                </div>
                <select name="collaborator_id" id="collaborator_id">
                    @foreach ($collaborators as $collaborator)
                        <option value="{{ $collaborator->id }}"> {{ $collaborator->nombre }}
                            {{ $collaborator->apellido_paterno }} {{ $collaborator->apellido_materno }}</option>
                    @endforeach
                </select>
            </div>
            <br>
            {{-- Fin del contenedor de los datos del colaborador --}}

            {{-- Inicio del bloque de los servicios requeridos --}}
            <div class="container">
                <h4><strong>Servicios requeridos:</strong></h4>
            </div>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h5>Servicios TIC</h5>
                    </div>
                    <div class="col-md-4">
                        <h5>Acceso a proyectos</h5>
                    </div>
                </div>
                <br>
                <div class="container">
                    <div class="row">
                        <div class="col-md-1"><strong>VPN:</strong></div>
                        <div class="col-sm-1"><input type="radio" name="vpn" value="si" checked> Sí</div>
                        <div class="col-sm-2"><input type="radio" name="vpn" value="no"> No</div>

                        <div class="col-md-1"><strong>GLPI:</strong></div>
                        <div class="col-sm-1"><input type="radio" name="cuenta_glpi" value="si" checked> Sí</div>
                        <div class="col-sm-1"><input type="radio" name="cuenta_glpi" value="no"> No</div>
                    </div>
                    <div class="row">
                        <div class="col-md-1"><strong>IP Fija:</strong></div>
                        <div class="col-sm-1"><input type="radio" name="ip_fija" value="si" checked> Sí</div>
                        <div class="col-sm-2"><input type="radio" name="ip_fija" value="no"> No</div>

                        <div class="col-md-1"><strong>GitLab:</strong></div>
                        <div class="col-sm-1"><input type="radio" name="cuenta_gitlab" value="si" checked> Sí</div>
                        <div class="col-sm-1"><input type="radio" name="cuenta_gitlab" value="no"> No</div>
                    </div>
                    <div class="row">
                        <div class="col-md-1"><strong>Internet:</strong></div>
                        <div class="col-sm-1"><input type="radio" name="internet" value="si" checked> Sí</div>
                        <div class="col-sm-2"><input type="radio" name="internet" value="no"> No</div>

                        <div class="col-md-1"><strong>JIRA:</strong></div>
                        <div class="col-sm-1"><input type="radio" name="cuenta_jira" value="si" checked> Sí</div>
                        <div class="col-sm-1"><input type="radio" name="cuenta_jira" value="no"> No</div>
                    </div>
                </div>
                <br>
                <br>
                {{-- Fin del bloque de los servicios requeridos --}}


                <!--Inicio del bloque del equipo-->
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h4><strong>¿Registrar equipo nuevo?</strong></h4>
                        </div>
                        <div class="col-sm-1"><input type="radio" name="equipo" value="no" checked> Si</div>
                        <div class="col-sm-1"><input type="radio" name="equipo" value="si"> No</div>
                    </div>
                </div>
                <br>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3"><strong>Tipo del equipo:</strong></div>
                        <div class="col-md-2">
                            {{-- @foreach ($equipment as $equipment)
                <select name="equipment_id" id="equipment_id" required>
                    <option value="{{ $equipment->tipo }}"> {{ $equipment->tipo }}</option>
                </select>
                @endforeach --}}
                        </div>
                    </div>
                </div>
                <br>
                <div class="container">
                    <div class="row">
                        <div class="col-md-2"><strong>Marca:</strong></div>
                        <div class="col-md-4">
                            <input class="border-success" id="marca" name="marca" type="text"
                                placeholder=" Marca " value="{{ old('marca') }}" required />
                        </div>
                        <div class="col-md-2"><strong>Modelo:</strong></div>
                        <div class="col-md-4">
                            <input class="border-success" id="modelo" name="modelo" type="text"
                                placeholder=" Modelo " value="{{ old('modelo') }}" required />
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-2"><strong>Serie:</strong></div>
                        <div class="col-md-4">
                            <input class="border-success" id="serie" name="serie" type="text"
                                placeholder=" Serie " value="{{ old('modelo') }}" required />
                        </div>
                        <div class="col-md-2"><strong>MAC:</strong></div>
                        <div class="col-md-4">
                            <input class="border-success" id="mac" name="mac" type="text"
                                placeholder=" MAC " value="{{ old('mac') }}" required />
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-2"><strong>IP Antigua:</strong></div>
                        <div class="col-md-4">
                            <input type="text" minlength="7" maxlength="15" size="15"
                                pattern="^((\d{1,2}|1\d\d|2[0-4]\d|25[0-5])\.){3}(\d{1,2}|1\d\d|2[0-4]\d|25[0-5])$"
                                class="border-success" id="ip_antigua" name="ip_antigua" placeholder=" IP Antigua "
                                value="{{ old('ip_antigua') }}" required />
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-md-3"><strong>Propiedad de la SICT: </strong></div>
                        <div class="col-sm-1"><input type="radio" name="equipo_sict" value="si"> Sí</div>
                        <div class="col-sm-1"><input type="radio" name="equipo_sict" value="no" checked> No</div>
                        <br>

                        <br>
                        <div class="col-md-3"><strong>Nombre del propietario: </strong></div>
                        <div class="col-md-3"><input type="text" name="equipo_propio" required></div>
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
