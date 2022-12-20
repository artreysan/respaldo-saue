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
                <img class="imagen-header" src="{{ URL::asset('img/download.png') }}" alt="">
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-7"></div>
            <div class="col-md-2"><a href="/collaborator" class="btn btn-secondary">Ver todos</a></button></div>
            <div class="col-md-2"><a href="/collaborator/petition/{{ $collaborator->id }}"><button type="button"
                        class="btn btn-danger">Hacer solicitud</button></a></button></div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5 p-3">
            <div class="card">
                <div class="card-header card-header-primary bg-secondary">
                    <div class="card-title">{{ $collaborator->rol->rol }}</div>
                </div>
                <div class="card-body table-bordered">
                    <div class="row">
                        <div class="col-md-5">
                            <div>
                                <h6><strong>Nombre:</strong></h6>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div>
                                <h6>{{ $collaborator->nombre }} {{ $collaborator->apellido_paterno }}
                                    {{ $collaborator->apellido_materno }}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div>
                                <h6><strong>Empresa:</strong></h6>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div>
                                <h6>{{ $collaborator->enterprise->name }}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div>
                                <h6><strong>Rol:</strong></h6>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div>
                                <h6>{{ $collaborator->rol->rol }}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div>
                                <h6><strong>Ubicación:</strong></h6>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div>
                                <h6>{{ $collaborator->location->ubicacion }}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div>
                                <h6><strong>Email:</strong></h6>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div>
                                <h6>{{ $collaborator->email }}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div>
                                <h6><strong>Nodo:</strong></h6>
                            </div>
                        </div>
                        <div class="col-md-7">
                            @if ($collaborator->nodo == '')
                                <h6>{{ 'No tiene Nodo' }}<h6>
                                    @else
                                        <h6>{{ $collaborator->nodo }}</h6>
                            @endif
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-5">
                            <div>
                                <h6><strong>Directorio Activo:</strong></h6>
                            </div>
                        </div>
                        <div class="col-md-7">
                            @if ($collaborator->account_da == '')
                                <h6>{{ 'No tiene cuenta D. Activo' }}<h6>
                                    @else
                                        <h6>{{ $collaborator->account_da }}</h6>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div>
                                <h6><strong>Cuenta Glpi:</strong></h6>
                            </div>
                        </div>
                        <div class="col-md-7">
                            @if ($collaborator->account_glpi == '')
                                <h6>{{ 'No tiene cuenta Glpi' }}<h6>
                                    @else
                                        <h6>{{ $collaborator->account_glpi }}</h6>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div>
                                <h6><strong>Cuenta Gitlab:</strong></h6>
                            </div>
                        </div>
                        <div class="col-md-7">
                            @if ($collaborator->account_gitlab == '')
                                <h6>{{ 'No tiene cuenta Gitlab' }}<h6>
                                    @else
                                        <h6>{{ $collaborator->account_gitlab }}</h6>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div>
                                <h6><strong>Cuenta Jira:</strong></h6>
                            </div>
                        </div>
                        <div class="col-md-7">
                            @if ($collaborator->account_jira == '')
                                <h6>{{ 'No tiene cuenta Jira' }}<h6>
                                    @else
                                        <h6>{{ $collaborator->account_jira }}</h6>
                            @endif
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-5">
                            <div>
                                <h6><strong>Internet</strong></h6>
                            </div>
                        </div>
                        <div class="col-md-7">
                            @if ($collaborator->internet == '')
                                <h6>{{ 'No tiene internet' }}<h6>
                                    @else
                                        <h6>{{ 'Cuenta con internet' }}</h6>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div>
                                <h6><strong>VPN:</strong></h6>
                            </div>
                        </div>
                        <div class="col-md-7">
                            @if ($collaborator->vpn == '')
                                <h6>{{ 'No tiene vpn' }}<h6>
                                    @else
                                        <h6>{{ 'Cuenta con una VPN' }}</h6>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div>
                                <h6><strong>IP:</strong></h6>
                            </div>
                        </div>
                        <div class="col-md-7">
                            @if ($collaborator->ip == '')
                                <h6>{{ 'No tiene IP' }}<h6>
                                    @else
                                        <h6>{{ $collaborator->ip }}</h6>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 p-3">
            <br>
            <div class="p-5">
                <p>Aqui va a ir una foto del colaboraador</p>
            </div>
            <br>
            <br>
            <div>
                @if ($collaborator->equipment_id == '')
                    <div class="card-header bg-secondary">
                        <h6><strong>Equipo de computo:</strong></h6>
                    </div>
                    <div class="row p-2">
                        <div class="col-sm-5">
                            <br>
                            <h6>{{ 'No tiene equipo' }}<h6>
                        </div>
                        <div class="col-sm-6">
                            <br>
                            <div>Asignar equipo</div>
                        </div>
                        <div class="container">
                            <form action="{{ route('collaborator.update', $collaborator->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <select name="equipment_id" id="equipment_id">
                                    @foreach ($equipments as $equipment)
                                        <option value="{{ $equipment->id }}">{{ $equipment->tipo }}
                                            {{ $equipment->marca }} - {{ $equipment->serie }} - {{ $equipment->modelo }}
                                        </option>
                                    @endforeach
                                    <br>
                                </select>
                                <input class="btn btn-secondary btn-sm" type="submit" value="Guardar">
                            </form>
                        </div>
                    </div>
                @else
                    <h6><strong>Equipo de computo:</strong></h6>
                    <table class="table table-bordered">
                        <thead class="table-secondary">
                            <th>Tipo</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Serie</th>
                            <th>Mac Ethernet</th>
                            <th>Mac Wifi</th>
                        </thead>
                        <tbody>
                            <td>{{ $collaborator->equipment->tipo }}</td>
                            <td>{{ $collaborator->equipment->marca }}</td>
                            <td>{{ $collaborator->equipment->modelo }}</td>
                            <td>{{ $collaborator->equipment->serie }}</td>
                            <td>{{ $collaborator->equipment->mac_ethernet }}</td>
                            <td>{{ $collaborator->equipment->mac_wifi }}</td>
                        </tbody>
                    </table>
                @endif
            </div>
            <div class="p-5">
                <table class="table table-bordered">
                    <thead class="table-secondary">
                        <th>Id</th>
                        <th>Folio</th>
                        <th>Fecha</th>
                        <th>Status</th>
                        <th>Ver</th>
                    </thead>
                    @foreach ($petitions as $petition)
                        <tbody>
                            <td>{{ $petition->id }}</td>
                            <td>{{ $petition->fileID }}</td>
                            <td>{{ $petition->created_at }}</td>
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
                    <td><a href="/petition/{{ $petition->id }}" alt="ver" class="col-md-1 fas fa-eye"></a></td>
                    @endforeach
                </table>
            </div>
        </div>
        <footer class="footer py-3 bg-green-900">
            <div class="row align-items-center justify-content-lg-between">
                    <div class="copyright text-center text-sm text-muted text-lg-start">
                        ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        Desarrollado en CDMX,<strong> UTIC </strong>
                        <a href="https://www.creative-tim.com" class="font-weight-bold " target="_blank">
                    </div>
            </div>
        </footer>
    </div>
@stop
