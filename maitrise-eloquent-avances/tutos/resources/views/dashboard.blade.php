@extends('layouts.app')

@section('content')
<div class="container my-5">
    <!-- Header -->
    <div class="text-center mb-4">
        <h1 class="display-5">Tableau de Bord </h1>
        <p class="text-muted">Bienvenue, <span id="user-name" class="fw-bold"> <?php $user=auth::user(); echo $user->name;?></span></p>
    </div>

    <!-- User Info Card -->
    <div class="card mb-4">
        <div class="card-body">
            <h5 class="card-title">Informations sur l'utilisateur</h5>
            <p class="card-text">
                <strong>Nom :</strong> <span id="user-name-card"><?php  echo$user->name;?></span><br>
                <strong>Date de création du compte :</strong> <span id="account-date"><?php  echo $user->created_at;?></span>
            </p>
        </div>
    </div>

    <!-- Articles List -->
    <div class="card">
        <div class="card-header">
            <h5>Articles associés</h5>
        </div>
        <div class="card-body">
            <ul class="list-group" id="articles-list">
                <!-- Articles dynamiquement générés ici -->
                @foreach ( $user->articles as $article )
                <li class="list-group-item">{{$article->title}}</li>
                @endforeach 
            </ul>
        </div>
    </div>
</div>

@endsection