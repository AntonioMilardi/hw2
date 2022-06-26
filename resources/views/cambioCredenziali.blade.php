@extends('layouts.log')

@section('script')

<script src="{{ url('js/registrazione.js') }}" defer></script>

@endsection

@section('content')


<div class="container">
<h1>Inserisci i nuovi dati</h1>


                @if($error == 'campo_vuoto')
                <section class='error'>Compilare tutti i campi</section>
                @elseif($error == 'esistente')
                <section class='error'>Username esistente</section>
                @elseif($error == 'corta')
                <section class='error'>Password troppo corta</section>
                @endif


                <form name='form' method='post'>
                    @csrf
                <p><label>Nome <input type='text' name='nome' value ='{{ old("nome") }}'></label></p>

                <p><label>Cognome <input type='text' name='cognome' value ='{{ old("cognome") }}'></label></p>

                    <p><label>Username <input type='text' name='username' value ='{{ old("username") }}'></label></p>
                    <p><label>Password <input type='password' name='password' value ='{{ old("password") }}'></label></p>
                    <button type="submit">Cambia credenziali</button>
                    <button onclick="location.href='Profilo'" type="button">Indietro</button>       
       
				 </form>
        </div>
</div>


@endsection

