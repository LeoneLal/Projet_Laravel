@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                </div>
            </div>
            <p>
    Voici une photo que j'ai prise lors de mes dernières vacances à la montagne :<br />
    <img src="images/search.png" alt="Photo de montagne" />
</p>
            <div class="col-md-5">
            <div class="row"><a href="{{ route('entreprises.index') }}" title="Ajouter une catégorie">Voir vos entreprises</a></div>
            <div class="row"><a href="{{ route('contact.index') }}" title="Ajouter une catégorie">Voir vos contacts</a></div>
            </div>
        </div>
    </div>
</div>
@endsection
