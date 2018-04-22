@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            @if (Auth::user()->listOfAdmin())
                Liste des clients
            @else
                Création du cahier des charges
            @endif
        </div>
        <div class="card-body">
            @if (Auth::user()->listOfAdmin())
                <form method="GET" action="{{route('liste_specifications') }}">
                    <input type="submit" value="Consulter la liste des spécifications">
                </form>
            @else
                <form method="GET" action="{{route('liste_specifications') }}">
                    <input type="button" value="Création des specifications">
                </form>
                <input type="button" value="Création des specifications">
                <input type="button" value="Consulter ces spécifications">
            @endif
        </div>
    </div>
</div>
@endsection
