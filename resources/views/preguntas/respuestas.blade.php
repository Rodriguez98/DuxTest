@php

$orden=[0,0,0,0,0];
$orden2=[0,0,0,0,0];
$vector=['a','b','c','d','e'];
$pa=0; $pb=0; $pc=0; $pd=0; $pe=0;
if(isset($_POST['enviar']))
{
    for($i=0;$i<18;$i++){
        $var;
        if($i==0){
            $var=$_POST['p1'];

        }
        if($i==1){
            $var=$_POST['p2'];

        }
        if($i==2){
            $var=$_POST['p3'];

        }
        if($i==3){
            $var=$_POST['p4'];

        }
        if($i==4){
            $var=$_POST['p5'];

        }
        if($i==5){
            $var=$_POST['p6'];

        }
        if($i==6){
            $var=$_POST['p7'];

        }
        if($i==7){
            $var=$_POST['p8'];

        }
        if($i==8){
            $var=$_POST['p9'];

        }
        if($i==9){
            $var=$_POST['p10'];

        }
        if($i==10){
            $var=$_POST['p11'];

        }




        if($var=='a'){
            $pa++;
        }
        if($var=='b'){
            $pb++;
        }
        if($var=='c'){
            $pc++;
        }
        if($var=='d'){
            $pd++;
        }
        if($var=='e'){
            $pe++;
        }


    }

    $orden[0]=$pa;$orden[1]=$pb;$orden[2]=$pc;$orden[3]=$pd;$orden[4]=$pe;
    $orden2[0]=$pa;$orden2[1]=$pb;$orden2[2]=$pc;$orden2[3]=$pd;$orden2[4]=$pe;



    for($i=0;$i<5;$i++){
        for($j=$i+1;$j<5;$j++){
            if($orden[$i]<$orden[$j]){
                $aux=$orden[$i];
                $orden[$i]=$orden[$j];
                $orden[$j]=$aux;
            }

        }
    }

    if ($orden2) {
        # code...
    }
}

@endphp

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                 <div class="row">
                    <div class="col-6">
                        <h1 class="text-center"> Resultados Test</h1>
                        <h1 class="text-center">@php
                        for($i=0;$i<5;$i++){
                        echo $vector[$i]." = ".$orden2[$i]."<br>";
                        }
                        echo "<br><br>"
                        @endphp
                        </h1>
                            {{-- <h1>Su  puntuacion es: @php echo max($orden2).", La opción menos recomendable es: ".min($orden2) @endphp</h1> --}}
                            <h1>Su  puntuacion es: @php echo max($orden2)@endphp</h1>
                    </div>
                    <div class="col-6">
                        <h1 class="text-center">Areas del Conocimiento segun su puntuacion</h1>


                        <div id="accordion">
                            <div class="card">
                              <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                  <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <h3>Mayoría en A: Arte y Creatividad</h3>
                                  </button>
                                </h5>
                              </div>

                              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Tus actividades van encaminadas hacia los aspectos administrativos, económicos y de organización. Tu interés es generar riquezas mediante planeación de procedimientos, así como encaminar el logro de objetivos del algún grupo de personas.</p>
                                    <strong>Carreras relacionadas:</strong>
                                        <ul>
                                            <li>Diseño Gráfico</li>
                                            <li>Dibujo Publicitario</li>
                                            <li>Fotografía</li>
                                            <li>Producción en Radio y Televisión</li>
                                            <li>Comunicación  Escénica para televisión</li>
                                            <li>Producción Audiovisual y Multimedia</li>
                                        </ul>
                                        <a href="/infouniversidades" class="btn btn-success">Universidades y Cursos</a>
                                </div>
                              </div>
                            </div>
                            <div class="card">
                              <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <h3 class="text-center"> Mayoría en B: Area - Ciencias Sociales</h3>
                                  </button>
                                </h5>
                              </div>
                              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Tus actividades van encaminadas hacia los aspectos administrativos, económicos y de organización. Tu interés es generar riquezas mediante planeación de procedimientos, así como encaminar el logro de objetivos del algún grupo de personas.</p>
                                    <strong>Carreras relacionadas:</strong>
                                        <ul>
                                            <li>Psicología en general</li>
                                            <li>Derecho</li>
                                            <li>Comunicación  y Publicidad</li>
                                            <li>Comunicación  Social con mención en Marketing y Gestión de Empresas</li>
                                            <li>Relaciones Públicas y Comunicación  Organizacional</li>
                                            <li>Hotelería y Turismo</li>
                                        </ul>
                                        <a href="/infouniversidades" class="btn btn-success">Universidades y Cursos</a>
                                </div>
                              </div>
                            </div>
                            <div class="card">
                              <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <h3>Mayoría en C: Area - Económica, Administrativa y Financiera</h3>
                                  </button>
                                </h5>
                              </div>
                              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                    <p>El bienestar y la mejora de calidad de vida de otros es una de tus motivaciones para que las mismas puedan lograr una salud física y mental, la convivencia con la gente te permite conocer su comportamiento para llegar a un objetivo determinado.</p>
                                    <strong>Carreras relacionadas:</strong>
                                        <ul>
                                            <li>Administración de Empresas</li>
                                            <li>Contabilidad</li>
                                            <li>Comercio Exterior</li>
                                            <li>Banca y Finanzas</li>
                                            <li>Gestión de Recursos  Humanos</li>
                                            <li>Administración y Ciencias Políticas</li>
                                        </ul>
                                        <a href="/infouniversidades" class="btn btn-success">Universidades y Cursos</a>
                                </div>
                              </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                  <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                      <h3>Mayoría en D: Area - Ciencia y Tecnología</h3>
                                    </button>
                                  </h5>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                  <div class="card-body">
                                      <p>Tu desarrollo se logrará cuando interactúes con seres vivos y organismos. Te interesa conocer cómo es el funcionamiento de diversas sustancias, si es necesario, buscar su equilibrio y restablecer el funcionamiento previo a una alteración. La modificación y preservación de componentes orgánicos y naturales son también parte de tu interés.</p>
                                      <strong>Carreras relacionadas:</strong>
                                          <ul>
                                              <li>Ingeniería en Sistemas Computacionales</li>
                                              <li>Ingeniería Civil</li>
                                              <li>Arquitectura</li>
                                              <li>Electrónica</li>
                                              <li>Estadística Informática</li>
                                              <li>Tecnología en Informática Educativa</li>
                                          </ul>
                                          <a href="/infouniversidades" class="btn btn-success">Universidades y Cursos</a>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="card-header" id="headingTwo">
                                  <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                      <h3>Mayoría en E: Area - Ciencias ecológicas, biológicas y de la salud</h3>
                                    </button>
                                  </h5>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                                  <div class="card-body">
                                      <p>Te apasiona todo aquello que se encuentra relacionado con el arte, la música, lo bello y lo estético. Es de suma importancia tu sensibilidad y tu imaginación. Para comunicar tus ideas y emociones utilizas tu creatividad de manera visual o auditiva pero siempre son atractivas.</p>
                                      <strong>Carreras relacionadas:</strong>
                                          <ul>
                                              <li>Biología</li>
                                              <li>Farmacia</li>
                                              <li>Ciencias Ambientales</li>
                                              <li>Veterinaria</li>
                                              <li>Tecnología</li>
                                              <li>Física</li>
                                          </ul>
                                          <a href="/infouniversidades" class="btn btn-success">Universidades y Cursos</a>
                                  </div>
                                </div>
                              </div>

                          </div>

                    </div>
                 </div>

                    <button type="button" class="btn btn-danger" onclick="history.back()">Atras</button>

            </div>
        </div>
    </div>
@endsection
