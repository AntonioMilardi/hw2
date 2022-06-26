@extends('layouts.log')

@section('script')

<script src="{{ url('js/login.js') }}" defer></script>

@endsection



@section('content')

<div class="container">
                 <h1>The Truth</h1>

                 @if($error == 'campo_vuoto')
                <section class='error'>Compilare tutti i campi</section>
                @elseif($error == 'errato')
                <section class='error'>credenziali errate o inesistenti</section>
                @endif
                <form name='form' method='post'>
                    @csrf
                    <p><label>Username <input type='text' name='username' value ='{{ old("username") }}'></label></p>
                    <p><label>Password <input type='password' name='password'></label></p>
                    <button type="submit">Entra</button>
					<button onclick="location.href='register'" type="button">Registrati</button>       
				 </form>
        </div>

@endsection


