@extends('base')

@section('page_title', 'cours')

@section('vite')
    @parent
   
@endsection

@section('content')
    <h2>Cours</h2>
    
<nav>
    <ul>
    <li><p>Lundi 19h à 21h zumba</p></li>
    <p><img src="{{ asset('img/cours/danielle-cerullo-3ckWUnaCxzc-unsplash(1).jpg') }}" alt="soulever de terre" class="zumba"></p>
    <li><p>Mardi 19h30 à 21h30 pilate</p></li>
    <p><img src="{{ asset('img/cours/bruce-mars-gJtDg6WfMlQ-unsplash.jpg') }}" alt="soulever de terre" class="pilate"></p>
    <li><p>Jeudi 20h à 22h boxe anglaise</p></li>
    <p><img src="{{ asset('img/cours/zachary-kadolph-hwHHq82Enf0-unsplash.jpg') }}" alt="soulever de terre" class="boxe"></p>
    <li><p>Vendredi 20h à 22h hiit</p></li>
    <p><img src="{{ asset('img/cours/graham-mansfield-2j6IzAIbifQ-unsplash.jpg') }}" alt="soulever de terre" class="hiit"></p>
    <li><p>Samedi 9h à 11h yoga</p></li>
    <p><img src="{{ asset('img/cours/jared-rice-NTyBbu66_SI-unsplash.jpg') }}" alt="soulever de terre" class="yoga"></p>
    </ul>
</nav>

@endsection