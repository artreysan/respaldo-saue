@extends('adminlte::page')

@section('title', 'UTIC')

@section('content_header')
<div class="container-nav">
    <div class="row">
        <div class="col-md-1 p-4"></div>
        <div class="col-md-8 p-4">
            <h4><strong>Perfil del colaborador</strong></h4>
            <h6>Ciudad de México a <?php echo date('j-m-Y'); ?> </h6>
        </div>
        <div class="col-md-2 p-3">
                <img class="imagen-header" src="{{URL::asset('img/download.png')}}" alt="">
        </div>
    </div>
</div>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-8"></div>
        <div class="col-md-1"><a href="/collaborator" class="btn btn-secondary">Regresar</a></button></div>
        <div class="col-md-1"> <a href="/collaborator/petition/{{$collaborator->id}}"><button type="button" class="btn btn-danger">Solicitud</button></a></button></div>
    </div>
</div>
    <br>
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header card-header-primary bg-secondary">
                            <div class="card-title">{{ $collaborator->rol->rol}}</div>
                        </div>
                        <div class="card-body table-bordered">
                            <div class="row">
                                <div class="col-md-4">
                                    <div><h5><strong>Nombre completo:</strong></h5></div>
                                </div>
                                <div class="col-md-6">
                                    <div><h5>{{$collaborator->nombre}} {{$collaborator->apellido_paterno}} {{$collaborator->apellido_materno}}</h5></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div><h5><strong>Empresa:</strong></h5></div>
                                </div>
                                <div class="col-md-6">
                                    <div><h5>{{$collaborator->enterprise->name}}</h5></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div><h5><strong>Rol:</strong></h5></div>
                                </div>
                                <div class="col-md-6">
                                    <div><h5>{{$collaborator->rol->rol}}</h5></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div><h5><strong>Ubicación:</strong></h5></div>
                                </div>
                                <div class="col-md-6">
                                    <div><h5>{{$collaborator->location->ubicacion}}</h5></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div><h5><strong>Email:</strong></h5></div>
                                </div>
                                <div class="col-md-6">
                                    <div><h5>{{$collaborator->email}}</h5></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div><h5><strong>Nodo:</strong></h5></div>
                                </div>
                                <div class="col-md-6">
                                    @if ($collaborator->nodo == '')
                                        <h5>{{'No tiene Nodo'}}<h5>
                                    @else
                                        <h5>{{$collaborator->nodo}}</h5>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div><h5><strong>Cuenta Glpi:</strong></h5></div>
                                </div>
                                <div class="col-md-6">
                                    @if ($collaborator->account_glpi == '0')
                                        <h5>{{'No tiene cuenta Glpi'}}<h5>
                                    @else
                                        <h5>{{$collaborator->account->account_glpi}}</h5>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div><h5><strong>Cuenta Gitlab:</strong></h5></div>
                                </div>
                                <div class="col-md-6">
                                    @if ($collaborator->account_gitlab == '0')
                                        <h5>{{'No tiene cuenta Gitlab'}}<h5>
                                    @else
                                        <h5>{{$collaborator->account->account_gitlab}}</h5>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div><h5><strong>Cuenta Jira:</strong></h5></div>
                                </div>
                                <div class="col-md-6">
                                    @if ($collaborator->account_jira == '0')
                                        <h5>{{'No tiene cuenta Jira'}}<h5>
                                    @else
                                    <h5>{{$collaborator->account->account_jira}}</h5>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div><h5><strong>Internet</strong></h5></div>
                                </div>
                                <div class="col-md-6">
                                    @if ($collaborator->internet == '0')
                                        <h5>{{'No tiene internet'}}<h5>
                                    @else
                                    <h5>{{'Cuenta con internet'}}</h5>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div><h5><strong>VPN:</strong></h5></div>
                                </div>
                                <div class="col-md-6">
                                    @if ($collaborator->vpn == '0')
                                        <h5>{{'No tiene vpn'}}<h5>
                                    @else
                                    <h5>{{'Cuenta con una VPN'}}</h5>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div><h5><strong>IP:</strong></h5></div>
                                </div>
                                <div class="col-md-6">
                                    @if ($collaborator->ip == '0'  || ' ')
                                        <h5>{{'No tiene IP'}}<h5>
                                    @else
                                    <h5>{{$collaborator->service->IP}}</h5>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
