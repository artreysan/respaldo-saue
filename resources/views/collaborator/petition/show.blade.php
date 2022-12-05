@extends('adminlte::page')

@section('title', 'UTIC')

@section('content_header')
<div class="container-nav">
    <div class="row">
        <div class="col-md-1 p-4"></div>
        <div class="col-md-8 p-4">
            <h4><strong>Solicitud de servicios</strong></h4>
            <h6>Ciudad de México a <?php echo date('j-m-Y'); ?> </h6>
        </div>
        <div class="col-md-2 p-3">
                <img class="imagen-header" src="{{URL::asset('img/download.png')}}" alt="">
        </div>
    </div>
</div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-10"></div>
            <div class="col-md-1"><a href="/"><button type="button" class="btn btn-secondary"> Inicio </button></a>
            </div>
            <div class="col-md-1"><a href="/collaborator/{{ $collaborator->id }}"><button type="button"
                        class="btn btn-secondary">Regresar</button></a></div>
        </div>
    </div>
    <br>
    {{-- Bloque del formulario de la peticion --}}
    <form action="{{ route('petition.store') }}" method="POST">
        @csrf

        <!--Información del colaborador-->
        <div class="container">
            <div class="container table-bordered p-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h6><strong>Servicios requeridos para el colaborador:</strong></h6>
                            {{ $collaborator->rol->rol }}
                        </div>
                        <div class="col-md-4">
                            <select name="collaborator_id" id="collaborator_id ">
                                <option value="{{ $collaborator->id }}">{{ $collaborator->nombre }}
                                    {{ $collaborator->apellido_paterno }} {{ $collaborator->apellido_materno }}</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            <h6><strong>Solicitante:</strong></h6>
                        </div>
                        <div class="col-md-4">
                            <select name="user_id" id="user_id">
                                <option value="{{ Auth::user()->id }}">{{ Auth::user()->name }}
                                    {{ Auth::user()->apellido_paterno }} {{ Auth::user()->apellido_materno }}</option>
                            </select>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                @if ($collaborator->equipment == null)
                    <h6>{{ 'No tiene equipo de computo asignado'}}<h6>
                        @else
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h6><strong>Equipo actual del colaborador:</strong></h6>
                                    </div>
                                    <div class="col-md-6">
                                        <table class="table table-bordered">
                                            <thead class="table-dark">
                                                <th>Tipo</th>
                                                <th>Marca</th>
                                                <th>Modelo</th>
                                                <th>Serie</th>
                                            </thead>
                                            <tbody>
                                                <td>{{ $collaborator->equipment->tipo }}</td>
                                                <td>{{ $collaborator->equipment->marca }}</td>
                                                <td>{{ $collaborator->equipment->modelo }}</td>
                                                <td>{{ $collaborator->equipment->serie }}</td>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                @endif
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-md-1"> </div>
                <div class="col-md-4">
                    <div class="container p-2 bg-secondary">
                        <h6>Servicios TIC</h6>
                    </div>
                    <div class="container p-4 table-bordered">
                        @if ($collaborator->nodo == '1')
                        @else
                            <div class="row">
                                <div class="col-sm-3"><strong>Nodo:</strong></div>
                                <div class="col-sm-2"><input type="radio" name="nodo" value="1" checked> Sí</div>
                                <div class="col-sm-2"><input type="radio" name="nodo" value="0"> No</div>
                            </div>
                        @endif
                        <br>
                        @if ($collaborator->vpn == '1')
                        @else
                            <div class="row">
                                <div class="col-sm-3"><strong>VPN:</strong></div>
                                <div class="col-sm-2"><input type="radio" name="vpn" value="1" checked> Sí</div>
                                <div class="col-sm-2"><input type="radio" name="vpn" value="0"> No</div>
                            </div>
                        @endif
                        <br>
                        @if ($collaborator->ip == '1')
                        @else
                            <div class="row">
                                <div class="col-sm-3"><strong>IP:</strong></div>
                                <div class="col-sm-2"><input type="radio" name="ip" value="1" checked> Sí</div>
                                <div class="col-sm-2"><input type="radio" name="ip" value="0"> No</div>
                            </div>
                        @endif
                        <br>
                        @if ($collaborator->internet == '1')
                        @else
                            <div class="row">
                                <div class="col-sm-3"><strong>Internet:</strong></div>
                                <div class="col-sm-2"><input type="radio" name="internet" value="1" checked> Sí</div>
                                <div class="col-sm-2"><input type="radio" name="internet" value="0"> No</div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-md-1"> </div>
                <div class="col-md-4">
                    <div class="container p-2 bg-secondary">
                        <h6>Cuentas</h6>
                    </div>
                    <div class="container p-4 table-bordered">
                        @if ($collaborator->account_glpi == '0')
                            <div class="row">
                                <div class="col-sm-3"><strong>GLPI:</strong></div>
                                <div class="col-sm-2"><input type="radio" name="account_glpi" value="1" checked> Sí
                                </div>
                                <div class="col-sm-2"><input type="radio" name="account_glpi" value="0"> No</div>
                            </div>
                        @else
                        @endif
                        <br>
                        @if ($collaborator->account_gitlab == '0')
                            <div class="row">
                                <div class="col-sm-3"><strong>GLPI:</strong></div>
                                <div class="col-sm-2"><input type="radio" name="account_gitlab" value="1" checked> Sí
                                </div>
                                <div class="col-sm-2"><input type="radio" name="account_gitlab" value="0"> No</div>
                            </div>
                        @else
                        @endif
                        <br>
                        @if ($collaborator->account_jira == '0')
                            <div class="row">
                                <div class="col-sm-3"><strong>JIRA:</strong></div>
                                <div class="col-sm-2"><input type="radio" name="account_jira" value="1" checked> Sí
                                </div>
                                <div class="col-sm-2"><input type="radio" name="account_jira" value="0"> No</div>
                            </div>
                        @else
                        @endif
                        <br>
                        @if ($collaborator->account_da == '0')
                            <div class="row">
                                <div class="col-sm-3"><strong>D. A:</strong></div>
                                <div class="col-sm-2"><input type="radio" name="account_da" value="1" checked> Sí
                                </div>
                                <div class="col-sm-2"><input type="radio" name="account_da" value="0"> No</div>
                            </div>
                        @else
                        @endif
                    </div>
                </div>
            </div>
            <br>
        </div>
        <br>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-9"></div>
                <div class="col-md-2"><input class="btn btn-secondary btn-lg active" type="submit"
                        value="Enviar solicitud"></div>
            </div>
        </div>
    </form>
    <br>
    <footer class="footer py-3 bg-green-900">
        <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
                <div class="copyright text-center text-sm text-muted text-lg-start">
                    ©
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                    Desarrollado en CDMX,<strong> UTIC </strong>
                    <a href="https://www.creative-tim.com" class="font-weight-bold " target="_blank">
                </div>
            </div>
        </div>
    </footer>
@stop
