@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="bg-black">
        <div class="row">
            <div class="col-md-8 p-4">
                <h4><strong>TODOS LOS TICKETS</strong></h4>
                <h5>Ciudad de México a <?php echo date('j-m-Y'); ?> </h5>
            </div>
            <div class="col-md-3">
                <img src="img/logoSAUEcompleto.png" alt="">
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <div class="container">
        <table class="table table-bordered">
            <thead class="table-dark">
                <th>Ticket</th>
                <th>Peticion</th>
                <th>Gitlab</th>
                <th>Glpi</th>
                <th>Jira</th>
                <th>D. Activo</th>
                <th>Nodo</th>
                <th>IP</th>
                <th>Internet</th>
                <th>VPN</th>
            </thead>
            @foreach ($tickets as $ticket)
                <tbody>
                    <td>{{ $ticket->id }}</td>
                    <td>{{ $ticket->petition->fileID}}</td>
                    <td>{{ $ticket->tk_gitlab_account_1}}</td>
                    <td>{{ $ticket->tk_glpi_account_1}}</td>
                    <td>{{ $ticket->tk_jira_account_1 }}</td>
                    <td>{{ $ticket->tk_da_account_1 }}</td>
                    <td>{{ $ticket->tk_nodo_1 }}</td>
                    <td>{{ $ticket->tk_ip_1}}</td>
                    <td>{{ $ticket->tk_internet_1}}</td>
                    <td>{{ $ticket->tk_vpn_1}}</td>
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
