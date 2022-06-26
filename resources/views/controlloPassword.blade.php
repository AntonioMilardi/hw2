@extends('layouts.default')

@section('css')

<link rel="stylesheet" href="{{ url('css/Home.css') }}">

@endsection

@section('content')

<section>

<h1>Per favore, dacci conferma che sei veramente tu!</h1>

@if($error == 'not-equals')
<section class='error'>La password non corrisponde</section>
@endif

<p>Reinserisci la tua password</p>  

<form name='form' method='post'>
    @csrf
 <input type='password' name='password'>
<button type="submit">Entra</button>
</form>

</section> 


@endsection