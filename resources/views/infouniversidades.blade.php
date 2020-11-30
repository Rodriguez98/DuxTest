@extends('layouts.app')

@section('content')

    <div class="container text-center">

        <div class="card bg-dark text-white">
            <img src="/img/uniportada.jpg" class="card-img" alt="...">
            <div class="card-img-overlay">
                {{-- <h5 class="card-title">Card title</h5> --}}
                {{-- <p class="card-text">This is a wider card with supporting text below as a
                    natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text">Last updated 3 mins ago</p> --}}
            </div>
        </div>

        <br>
        <br>
        <div class="card-deck">
            <div class="card">
                <a target="_blank" href="https://www.uraccan.edu.ni/"><img src="/img/uni1.jpg" class="card-img-top"
                        alt="..."></a>
                <div class="card-body">
                    <h5 class="card-title">URACCAN</h5>
                    <p class="card-text">La primera universidad comunitaria intercultural en América Latina. Con cuatro
                        recinto en la costa caribe y reconocimiento internacional oferta las de...</p>

                    <div class="card-footer">
                        <svg width="2.5em" height="3em" viewBox="0 0 16 16" class="bi bi-telephone-fill" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z" />
                        </svg>
                        <a href="https://goo.gl/maps/2FddHr71REHbNntu6" target="_blank">
                            <svg width="2.5em" height="3em" viewBox="0 0 16 16" class="bi bi-geo-alt-fill"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            </svg>
                        </a>
                        <i class="fa fa-instagram" aria-hidden="true"></i>

                    </div>

                </div>
            </div>
            <div class="card">
                <a target="_blank" href="https://www.tecnacional.edu.ni/"><img src="/img/uni4.jpg" class="card-img-top"
                        alt="..."></a>
                <div class="card-body">
                    <h5 class="card-title">INATEC</h5>
                    <p class="card-text">Constituyéndose como pilar fundamental en la preparación de los recursos humanos
                        calificados necesarios para el logro de los objetivos de crecimiento económico y desarrollo social
                        de nuestro país desde 1991.</p>

                    <div class="card-footer">

                        <svg width="2.5em" height="3em" viewBox="0 0 16 16" class="bi bi-telephone-fill" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z" />
                        </svg>
                        <a href="https://goo.gl/maps/n4s7iBaoTJwLkSAz6" target="_blank">
                            <svg width="2.5em" height="3em" viewBox="0 0 16 16" class="bi bi-geo-alt-fill"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card">
                <a target="_blank" href="https://www.ualn.edu.ni/"><img src="/img/uni3.png" class="card-img-top"
                        alt="..."></a>
                <div class="card-body">
                    <h5 class="card-title">UALN</h5>
                    <p class="card-text">Tiene como objetivo fortalecer las universidades miembros del Consejo Nacional de
                        Universidades, con el propósito de ampliar una oferta educativa inclusiva, de calidad, flexible, de
                        cobertura nacional y responda a las necesidades educativas territoriales.</p>

                    <div class="card-footer">


                        <svg width="2.5em" height="3em" viewBox="0 0 16 16" class="bi bi-telephone-fill" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z" />
                        </svg>

                        <a href="https://goo.gl/maps/r3b8JEkMcickXpp48" target="_blank">
                            <svg width="2.5em" height="3em" viewBox="0 0 16 16" class="bi bi-geo-alt-fill"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            </svg>
                        </a>

                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection
