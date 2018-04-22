@extends('.layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                    Création du cahier des charges

            </div>
            <div class="card-body">
                @include('form')
            </div>
        </div>
    </div>
@endsection