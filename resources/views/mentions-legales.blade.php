@extends('base')

@section('page_title', 'mentions-legales')

@section('vite')
    @parent
    @vite(['resources/css/mentions-legales.css'])
@endsection

@section('content')
    <h2>Mentions-Legales</h2>
    <p>
        Vous êtes sur la page mentions-legales
    </p>
@endsection