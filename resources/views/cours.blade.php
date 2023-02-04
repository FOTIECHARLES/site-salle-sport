@extends('base')

@section('page_title', 'cours')

@section('vite')
    @parent
    @vite(['resources/css/cours.css'])
@endsection

@section('content')
    <h2>Cours</h2>
    <p>
        Vous êtes sur la page cours
    </p>
@endsection