@extends('layouts.app')

@section('content')
<div class="">
    <div class="">
        <div class="title">
            @if (Auth::user()->listOfAdmin())
                Liste des clients
            @else
               Création du cahier des charges
            @endif
        </div>
        <div class="home-action">
            @if (Auth::user()->listOfAdmin())
                <form method="GET" action="{{route('liste_specifications') }}">
                    <input type="submit" value="Consulter la liste des spécifications">
                </form>
            @else
                <form method="GET" action="{{route('show_specification') }}">
                    <input type="submit" value="Création des specifications">
                </form>

                <form method="GET" action="{{route('liste_specifications') }}">
                    <input type="button" value="Consulter ces spécifications">
                </form>
            @endif
        </div>
    </div>
</div>
@endsection
