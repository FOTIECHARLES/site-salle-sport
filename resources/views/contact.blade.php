@extends('base')

@section('page_title', 'contact')

@section('vite')
    @parent
    
@endsection

@section('content')
    <h2>Contact</h2>
    <h3>
       Quartier général: QG et contact pour savoir où nous sommes et pouvoir t'entraîner
    </h3>
 
  <ul>
    <li><p> téléphone : 06 00 00 00 00</p></li>
    <li><p> adresse : 5 Bd Louis XIV, 59800 Lille
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2530.9156913348866!2d3.06821561573786!3d50.62868297950037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2d58d87da5f2d%3A0x739db98176c2b59d!2s5%20Bd%20Louis%20XIV%2C%2059800%20Lille!5e0!3m2!1sfr!2sfr!4v1675980988981!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <form>
    @csrf
    @method('PUT')
    <p>votre email :   <input type="email" name="email" id=""></p>
    <p>votre demande : <input type="text" name="text" id=""></p>
    <p>votre message : <textarea name="" id="" cols="30" rows="10">nous sommes à votre écoute</textarea>
    <p><button> Envoyer </button></p>
    </form>

    
@endsection