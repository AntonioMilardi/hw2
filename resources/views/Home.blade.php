@extends('layouts.Default')

@section('script')

<script src="{{ asset('js/Home.js') }}" defer></script>

@endsection

@section('css')

<link rel="stylesheet" href="{{ url('css/Home.css') }}">

@endsection




@section('content')

<p> Il giornale <strong> online</strong> affidabile! </p>


              
<div class="news"> 
  <h1> Rimanete aggiornati sulle notizie del mondo! </h1>
 <form name="ricerca" id="ricerca">
   <label>Inizia la tua ricerca</label>
   <input type="text" name="content" id="content">
   <input class="submit" type="submit">
 </form>
</div>  
   
<div id="informazioni" class="hidden"  ></div> 


<p> Grazie di averci scelto</br> 
</p> 



@endsection