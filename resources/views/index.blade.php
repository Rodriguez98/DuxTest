@extends('layouts.app')

@section('content')

    <div class="container-fluid">

        <div class="row">

            <div class="col-6">
                <img class="img-fluid rounded d-block m-l-none" src="/img/imgPortada.png" alt="foto">
            </div>

            <div class="col-6 align-self-center">
                <div class="f-titulo text-center text-justify">ENCUENTRA TU VERDADERA VOCACIÓN !!!</div>
                <br>
                <p class="f1 text-center">“La vocación es la espina dorsal de la vida.”
                    “¡Bienaventurado aquel que ha encontrado su trabajo! ¡Que no pida más felicidad!”
                    .</p>
                <div class="row justify-content-center">
                    <a href="{{ route('login') }}" class="btn btn-danger btn-success"> <strong>Iniciar Sesión</strong></a>
                    <a href="{{ route('register') }}" class="btn ml-2 btn-green btn-success"><strong>Registrarse</strong></a>
                    {{-- <button type="button" class="btn btn-primary btn-lg">Registrarse</button> --}}
                </div>
            </div>

        </div>
    </div>
@endsection
