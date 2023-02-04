@extends('base')

@section('page_title', 'accueil')

@section('vite')
    @parent
    @vite(['resources/css/accueil.css'])
@endsection

@section('content')
    <h2>Accueil</h2>
    <p>
        Vous êtes sur la page d'accueil
    </p>
@endsection