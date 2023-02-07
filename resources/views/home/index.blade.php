@extends('app-master')

@section('content')
<br>
<div class="bg-light p-5 rounded">
    <div class="row">
        <div class="col">
            <img class="img-fluid mx-auto d-block" src="{{ asset('img/logo_uml.png') }}" alt="logo" width="190" height="190" />
        </div>
    </div>
    <br>
    @auth
    <h1>Centro de control</h1>

    @endauth

    @guest
    @include('layouts.partials.guestalert')
    @endguest
</div>
@endsection