@extends('adminlte::page')

@section('title', 'UTIC')

@section('content_header')
    <div class="container-nav">
        <div class="row">
            <div class="col-md-1 p-4"></div>
            <div class="col-md-8 p-4">
                <h4><strong>Solicitud: {{ $petition->fileID}}</strong></h4>
                <h6>Ciudad de México a <?php echo date('j-m-Y'); ?> </h6>
            </div>
            <div class="col-md-2 p-3">
                <img class="imagen-header" src="{{ URL::asset('img/download.png') }}" alt="">
            </div>
        </div>
    </div>
    <br>
    <div class="row p-5">
        <div class="col-md-4 p-2">
            <div>
                <div class="card-header bg-secondary">
                    <div class="card-title"><h6 class="p-1">{{ $petition->fileID}}</h6></div>
                </div>
                <div class="card-body table-bordered">
                    <div>
                        <h4><strong>Solicitud:</strong></h4>
                    </div>
                    <div>
                        <div>
                            <p>{{ $petition->created_at }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <div>
                                <h5><strong>Nodo:</strong></h5>
                            </div>
                        </div>
                        <div class="col-md-5">
                            @if ($petition->collaborator->nodo == '0')
                                <h5>{{ 'No tiene Nodo' }}<h5>
                                    @else
                                        <h5>{{ $petition->collaborator->nodo }}</h5>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            @if ($petition->account_glpi == '0')
                            @else
                                <div>
                                    <h5><strong>C. Glpi:</strong></h5>
                                </div>
                            @endif
                        </div>
                        <div class="col-md-5">
                            @if ($petition->account_glpi == '0')
                            @else
                                <h5>{{ 'Trámite' }}<h5>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            @if ($petition->account_gitlab == '0')
                            @else
                                <div>
                                    <h5><strong>C. Gitlab:</strong></h5>
                                </div>
                            @endif
                        </div>
                        <div class="col-md-5">
                            @if ($petition->account_gitlab == '0')
                            @else
                                <h5>{{ 'Trámite' }}<h5>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            @if ($petition->account_jira == '0')
                            @else
                                <div>
                                    <h5><strong>C. Jira:</strong></h5>
                                </div>
                            @endif
                        </div>
                        <div class="col-md-5">
                            @if ($petition->account_jira == '0')
                            @else
                                <h5>{{ 'Trámite' }}<h5>
                            @endif
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            @if ($petition->internet == '0')
                            @else
                                <div>
                                    <h5><strong>Internet</strong></h5>
                                </div>
                            @endif
                        </div>
                        <div class="col-md-5">
                            @if ($petition->internet == '0')
                            @else
                                <h5>{{ 'Trámite' }}</h5>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            @if ($petition->vpn == '0')
                            @else
                                <div>
                                    <h5><strong>VPN:</strong></h5>
                                </div>
                            @endif
                        </div>
                        <div class="col-md-5">
                            @if ($petition->vpn == '0')
                            @else
                                <h5>{{ 'Trámite' }}</h5>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            @if ($petition->ip == '0')
                            @else
                                <div>
                                    <h5><strong>IP:</strong></h5>
                                </div>
                            @endif
                        </div>
                        <div class="col-md-5">
                            @if ($petition->ip == '0')
                            @else
                                <h5>{{ 'Trámite' }}</h5>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2 p-2"></div>
        <div class="col-md-4 p-2">Aqui va una grafica en semaforo</div>
        <br>
        <div class="row">
            <br>
            <hr>
            <div class="p-3">
                <h4><strong>Responder a la solicitud:</strong></h4>
            </div>
            <div class="container card-body p-2">
                <form action="">
                    <div class="row">
                        <div class="col-sm-3"><strong>Nodo:</strong></div>
                        <div><input type="text" class="col-sm-4"></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-3"><strong>IP:</strong></div>
                        <div><input type="text" class="col-sm-4"></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-3"><strong>Internet:</strong></div>
                        <div><input type="text" class="col-sm-4"></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-3"><strong>VPN:</strong></div>
                        <div><input type="text" class="col-sm-4"></div>
                    </div>
                    <br>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6"></div>
                            <div class="col-md-2"><input class="btn btn-danger btn-sm active" type="submit"
                                    value="Guardar"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-md-4 p-2">
            <br>
            <br>
            <br>
            <br>
            <div class="container p-3">
                <form action="">
                    <div class="row">
                        <div class="col-sm-5"><strong>C. Gitlab:</strong></div>
                        <div><input type="text" class="col-sm-5"></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-5"><strong>C. Glpi:</strong></div>
                        <div><input type="text" class="col-sm-5"></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-5"><strong>C. Jira:</strong></div>
                        <div><input type="text" class="col-sm-5"></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-5"><strong>D. Activo:</strong></div>
                        <div><input type="text" class="col-sm-5"></div>
                    </div>
                    <br>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6"></div>
                            <div class="col-md-2"><input class="btn btn-danger btn-sm active" type="submit"
                                    value="Guardar"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <hr>
    <br>
    <div class="container">
        <h5><strong> Tickets: </strong></h5>
        <br>
        <div class="row">
            <br>
            <div class="col-md-4">
                <form action="{{ route('petition.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-sm-5"><strong>Ticket C. Gitlab:</strong></div>
                        <div class="col-sm-4"><input type="text" id="tk_gitlab_account_1" name="tk_gitlab_account_1">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-5"><strong>Ticket C. Glpi:</strong></div>
                        <div class="col-sm-3"><input type="text" id="tk_glpi_account_1" name="tk_glpi_account_1">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-5"><strong>Ticket C. Jira:</strong></div>
                        <div class="col-sm-5"><input type="text" id="tk_jira_account_1" name="tk_jira_account_1">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-5"><strong>Ticket D. Activo:</strong></div>
                        <div class="col-sm-5"><input type="text" id="tk_da_account_1" name="tk_da_account_1"></div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-sm-5"><strong>Ticket Nodo:</strong></div>
                        <div class="col-sm-5"><input type="text" id="tk_nodo_1" name="tk_nodo_1"></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-5"><strong>Ticket IP:</strong></div>
                        <div class="col-sm-5"><input type="text" id="tk_ip_1" name="tk_ip_1"></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-5"><strong>Ticket Internet:</strong></div>
                        <div class="col-sm-5"><input type="text" id="tk_internet_1" name="tk_internet_1"></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-5"><strong>Ticket VPN:</strong></div>
                        <div class="col-sm-5"><input type="text" id="tk_vpn_1" name="tk_vpn_1"></div>
                    </div>
                    <br>
                    <br>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-sm-5"><strong>Folio de solicitud:</strong></div>
                    <select name="petition_id" id="petition_id ">
                        <option value="{{ $petition->id }}">{{ $petition->fileID }}</option>
                    </select>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-5"><strong>Colaborador:</strong></div>
                    <select name="collaborator_id" id="collaborator_id ">
                        <option value="{{ $petition->collaborator->id }}">{{ $petition->collaborator->nombre }}
                            {{ $petition->collaborator->apellido_paterno }}
                            {{ $petition->collaborator->apellido_materno }}</option>
                    </select>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-5"></div>
                    <div class="col-md-2"><input class="btn btn-danger btn-sm active" type="submit" value="Guardar">
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-md-9"></div>
        <div class="col-md-1"><a href="/collaborator" class="btn btn-secondary">Regresar</a></button></div>
    </div>
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
