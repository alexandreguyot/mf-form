@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                @if (Auth::user()->listOfAdmin())
                    Liste des clients
                @endif
            </div>
            <div class="card-body">

            </div>
        </div>
    </div>
@endsection
