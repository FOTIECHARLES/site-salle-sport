@extends('base')

@section('page_title', 'contact')

@section('vite')
    @parent
    @vite(['resources/css/contact.css'])
@endsection

@section('content')
    <h2>Contact</h2>
    <p>
        Vous êtes sur la page contact
    </p>
@endsection