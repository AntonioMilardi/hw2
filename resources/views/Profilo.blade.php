@extends('layouts.Default')

@section('script')

<script src="{{ asset('js/Profilo.js') }}" defer></script>

@endsection

@section('css')

<link rel="stylesheet" href="{{ url('css/Profilo.css') }}">


@endsection

@section('content')

<div class= "pre-section"> Gentile Utente,</br> ecco le tue credenziali </div> 

<section>

 <div class='display-user-style'> </div>

<div class="container">
<form name="cambio" id="cambio">
   
 <label>Vuoi cambiarne qualcuna?</label>
 <button onclick="location.href='controlloPassword'" type="button">Voglio Cambiarle</button> </br> 
 <label>Vuoi eliminare l'account?</label>
 <button type="submit">Elimina</button>
 </form>
</div>    

</section>


@endsection