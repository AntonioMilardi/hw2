@extends('layouts.Default')

@section('script')

<script src="{{ asset('js/NotizieTue.js') }}" defer></script>

@endsection

@section('css')

<link rel="stylesheet" href="{{ url('css/Home.css') }}">
<link rel="stylesheet" href="{{ url('css/preferiti.css') }}">

@endsection

@section('content')

<p> Ecco le tue notizie  preferite </p>

<div id="informazioni"></div> 

<p> Se non ne vedi aggiungine qualcuna dalla Home </p>


@endsection