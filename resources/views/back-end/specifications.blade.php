@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Liste des clients
            </div>
            <div class="card-body">
                <table class="table-hover col-md-12">
                    <thead>
                    <tr>
                        <th>Entreprise</th>
                        <th>Nom du responsable</th>
                        <th>Téléphone</th>
                        <th>Nom de domaine</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($specifications as $key => $spe)
                            <tr>
                                <td>{{ $spe->company }}</td>
                                <td>{{ $spe->resp_name }}</td>
                                <td>{{ $spe->resp_tel }}</td>
                                <td>{{ $spe->domain_name ? $spe->domain_name : $spe->domain_wanted }}</td>
                            </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
