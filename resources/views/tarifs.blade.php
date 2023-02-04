@extends('base')

@section('page_title', 'tarifs')

@section('vite')
    @parent
    @vite(['resources/css/tarifs.css'])
@endsection

@section('content')
    <h2>Tarifs</h2>
    <p>
        Vous êtes sur la page tarifs
    </p>
@endsection