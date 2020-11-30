@extends('layouts.app')

@section('content')

    <div class="container-fluid">

        <body>
            <div class="card mx-5 mt--5">
                <div class="card-header">
                    <h1 class="text-center text-bold">Test Vocacional</h1>
                </div>
                <div class="card-body mx-4">
                    <p class="p-preguntas">Lea atentamente cada una de las preguntas, Selecciona la respuesta según tu propia decisión. En
                        general
                        no
                        existen respuestas correctas o incorrectas; lo importante es que contestes con sinceridad y
                        confianza
                        para
                        que puedas conocer mejor tus intereses vocacionales.</p>
                    <br>
                    <form method="POST" action="respuestas">
                        @csrf
                        <h2>Si tuvieras que elegir una actividad para obtener el aprendizaje que más te guste cual
                            seria.
                        </h2>
                        a) <input type="radio" name="p1" value="a" required> Arte y creatividad <br>
                        b) <input type="radio" name="p1" value="b"> Ciencias Sociales <br>
                        c) <input type="radio" name="p1" value="c"> Económica, Administrativa y financiera <br>
                        d) <input type="radio" name="p1" value="d"> Ciencia y tecnología <br>
                        e) <input type="radio" name="p1" value="e"> Ciencias ecológicas, biológicas y de la salud <br>
                        <br>


                        <h3>Seleccione: </h3>
                        a) <input id="rd1" type="radio" name="p2" value="a" required> Ilustrar, dibujar y animar digitalmente.<br>
                        b) <input id="rd2" type="radio" name="p2" value="b"> Realizar excavaciones para descubrir restos del pasado.<br>
                        c) <input id="rd2" type="radio" name="p2" value="c"> Seleccionar, capacitar y motivar al personal de una organización/empresa <br>
                        d) <input id="rd1" type="radio" name="p2" value="d"> Diseñar programas de computación y explorar nuevas aplicaciones tecnológicas para uso del internet.<br>
                        e) <input id="rd1" type="radio" name="p2" value="e"> Criar, cuidar y tratar animales domésticos y de campo.<br>
                        <br>

                        <h3> 3 .</h3>
                        a) <input id="rd1" type="radio" name="p3" value="a" required> Tocar un instrumento y componer música. <br>
                        b) <input id="rd2" type="radio" name="p3" value="b"> Organizar eventos y atender a sus asistentes.<br>
                        c) <input id="rd1" type="radio" name="p3" value="c"> Planificar cuáles son las metas de unaorganización pública o privada a mediano y largo plazo. <br>
                        d) <input id="rd2" type="radio" name="p3" value="d"> Resolver problemas de cálculo para construir un puente.<br>
                        e) <input id="rd1" type="radio" name="p3" value="e"> Investigar sobre áreas verdes, medio ambiente y cambios climáticos.<br>
                        <br>

                        <h3>4.</h3>
                        a) <input id="rd1" type="radio" name="p4" value="a" required> Diseñar logotipos y portadas de una revista.<br>
                        b) <input id="rd2" type="radio" name="p4" value="b"> Defender a clientes individuales o empresas en juicios de diferente naturaleza.<br>
                        c) <input id="rd1" type="radio" name="p4" value="c"> Controlar ingresos y egresos de fondos y presentar el balance final de una institución. <br>
                        d) <input id="rd2" type="radio" name="p4" value="d"> Diseñar y planificar la producción masiva de artículos como muebles, autos, equipos de oficina, empaques y envases para alimentos y otros. <br>
                        e) <input id="rd1" type="radio" name="p4" value="e"> Diseñar cursos para enseñar a la gente sobre temas de salud e higiene<br>
                        <br>

                        <h3>5.</h3>
                        a) <input id="rd1" type="radio" name="p5" value="a" required> Pintar, hacer esculturas, ilustrar libros de arte, Entre otros.<br>
                        b) <input id="rd2" type="radio" name="p5" value="b"> Investigar las causas y efectos de los trastornos emocionales.<br>
                        c) <input id="rd1" type="radio" name="p5" value="c"> Hacer propuestas y formular estrategias para aprovechar las relaciones económicas entre dos países. <br>
                        d) <input id="rd2" type="radio" name="p5" value="d"> Concebir planos para viviendas, edificios y ciudadelas.<br>
                        e) <input id="rd1" type="radio" name="p5" value="e"> Atender la salud de personas enfermas. <br>
                        <br>

                        <h3>6.</h3>
                        a) <input id="rd1" type="radio" name="p6" value="a" required> Prepararse para ser modelo profesional.<br>
                        b) <input id="rd2" type="radio" name="p6" value="b"> Escribir artículos periodísticos, cuentos,novelas y otros.<br>
                        c) <input id="rd1" type="radio" name="p6" value="c"> Elaborar campañas para introducir un nuevo producto al mercado. <br>
                        d) <input id="rd2" type="radio" name="p6" value="d"> Investigar y probar nuevos productosfarmacéuticos.<br>
                        e) <input id="rd1" type="radio" name="p6" value="e"> Hacer experimentos con plantas (frutas, árboles, flores)<br>
                        <br>


                        <h3>7.</h3>
                        a) <input id="rd1" type="radio" name="p7" value="a"required> Diseñar juegos interactivos electrónicos para computadora..<br>
                        b) <input id="rd2" type="radio" name="p7" value="b"> Estudiar la diversidad cultural en el ámbito rural y urbano.<br>
                        c) <input id="rd1" type="radio" name="p7" value="c"> Supervisar las ventas de un centro comercial. <br>
                        d) <input id="rd2" type="radio" name="p7" value="d">Diseñar máquinas que puedan simular actividades humanas. <br>
                        e) <input id="rd1" type="radio" name="p7" value="e"> Examinar y tratar los problemas visuales.<br>
                        <br>


                        <h3>8.</h3>
                        a) <input id="rd1" type="radio" name="p8" value="a"required> Redactar guiones y libretos para un programa de televisión,.<br>
                        b) <input id="rd2" type="radio" name="p8" value="b"> Gestionar y evaluar convenios internacionales de cooperación para el desarrollo social.<br>
                        c) <input id="rd1" type="radio" name="p8" value="c"> Aconsejar a las personas sobre planes de ahorro e inversiones.. <br>
                        d) <input id="rd2" type="radio" name="p8" value="d"> Elaborar mapas, planos e imágenes para el estudio y análisis de datos geográficos.<br>
                        e) <input id="rd1" type="radio" name="p8" value="e"> Atender y realizar ejercicios a personas que tienen limitaciones físicas, problemas de lenguaje, entre otros.<br>
                        <br>


                        <h3>9.</h3>
                        a) <input id="rd1" type="radio" name="p9" value="a"required> Crear campañas publicitarias.<br>
                        b) <input id="rd2" type="radio" name="p9" value="b"> Gestionar y evaluar proyectos de desarrollo en una institución educativa y/o fundación.<br>
                        c) <input id="rd1" type="radio" name="p9" value="c"> Tener un negocio propio de tipo comercial.. <br>
                        d) <input id="rd2" type="radio" name="p9" value="d">Dedicarse a fabricar productos alimenticios de consumo masivo. <br>
                        e) <input id="rd1" type="radio" name="p9" value="e"> Realizar el control de calidad de los alimentos.<br>
                        <br>


                        <h3>10.</h3>
                        a) <input id="rd1" type="radio" name="p10" value="a"required> Rediseñar y decorar espacios físicos en viviendas, oficinas y locales comerciales..<br>
                        b) <input id="rd2" type="radio" name="p10" value="b"> Estudiar idiomas extranjeros –actuales y antiguos- para hacer traducción.<br>
                        c) <input id="rd1" type="radio" name="p10" value="c"> Organizar un plan de distribución y venta de un gran almacén.. <br>
                        d) <input id="rd2" type="radio" name="p10" value="d"> Manejar y/o dar mantenimiento a dispositivos/aparatos tecnológicos en aviones, barcos, radares, etcétera.<br>
                        e) <input id="rd1" type="radio" name="p10" value="e"> Trabajar investigando la reproducción de peces, camarones y otros animales marinos.<br>
                        <br>


                        <h3>11.</h3>
                        a) <input id="rd1" type="radio" name="p11" value="a"required> Fotografiar hechos históricos, lugares significativos, rostros, paisajes para el área publicitaria, artística, periodística y social..<br>
                        b) <input id="rd2" type="radio" name="p11" value="b">Diseñar programas educativos para niños con discapacidad. <br>
                        c) <input id="rd1" type="radio" name="p11" value="c"> Crear estrategias de promoción y venta de nuevos productos ecuatorianos en el mercado internacional.. <br>
                        d) <input id="rd2" type="radio" name="p11" value="d"> Tener un taller de reparación y mantenimiento de carros, tractores, entre otros.<br>
                        e) <input id="rd1" type="radio" name="p11" value="e">Atender la salud dental de las personas. <br>
                        <br>


                        <h3>12.</h3>
                        a) <input id="rd1" type="radio" name="p12" value="a"required> Diseñar ropa para niños, jóvenes y adultos..<br>
                        b) <input id="rd2" type="radio" name="p12" value="b"> Enseñar a niños de 0 a 5 años.<br>
                        c) <input id="rd1" type="radio" name="p12" value="c"> Administrar una empresa de turismo y/o agencias de viaje.. <br>
                        d) <input id="rd2" type="radio" name="p12" value="d">Revisar y dar mantenimiento a artefactos eléctricos, electrónicos y computadoras. <br>
                        e) <input id="rd1" type="radio" name="p12" value="e"> Aplicar métodos alternativos a la medicina tradicional para atender personas con dolencias de diversa índole.<br>
                        <br>


                        <h3>13.</h3>
                        a) <input id="rd1" type="radio" name="p13" value="a"required> Restaurar piezas y obras de arte..<br>
                        b) <input id="rd2" type="radio" name="p13" value="b"> Tratar a niños, jóvenes y adultos con problemas psicológicos.<br>
                        c) <input id="rd1" type="radio" name="p13" value="c"> Investigar y/o sondear nuevos mercados. <br>
                        d) <input id="rd2" type="radio" name="p13" value="d"> Trabajar en una empresa petrolera en un cargo técnico como control de la producción.<br>
                        e) <input id="rd1" type="radio" name="p13" value="e"> Investigar organismos vivos para elaborar vacunas.<br>
                        <br>

                        <h3>14.</h3>
                        a) <input id="rd1" type="radio" name="p14" value="a"required> Ser parte de un grupo de teatro..<br>
                        b) <input id="rd2" type="radio" name="p14" value="b"> Fotografiar hechos históricos, lugares significativos, rostros, paisajes para el área publicitaria, artística, periodística y social.<br>
                        c) <input id="rd1" type="radio" name="p14" value="c"> Administrar una empresa (familiar, privada o pública) <br>
                        d) <input id="rd2" type="radio" name="p14" value="d">Ejecutar proyectos de extracción minera y metalúrgica. <br>
                        e) <input id="rd1" type="radio" name="p14" value="e">Planificar y recomendar dietas para personas diabéticas y/o con sobrepeso. <br>
                        <br>

                        <h3>15.</h3>
                        a) <input id="rd1" type="radio" name="p15" value="a"> Trabajar como presentador de televisión, locutor de radio y televisión, animador de programas culturales y concursos..<br>
                        b) <input id="rd2" type="radio" name="p15" value="b"> Diseñar y ejecutar programas de turismo.<br>
                        c) <input id="rd1" type="radio" name="p15" value="c"> Organizar, planificar y administrar centros educativos. <br>
                        d) <input id="rd2" type="radio" name="p15" value="d"> Administrar y ordenar (planificar) adecuadamente la ocupación del espacio físico de ciudades, países entre otros, utilizando imágenes de satélite.<br>
                        e) <input id="rd1" type="radio" name="p15" value="e"> Administrar y renovar menús de comidas en un hotel o restaurante.<br>
                        <br>

                        <h3>16.</h3>
                        a) <input id="rd1" type="radio" name="p16" value="a"required> Producir cortometrajes, spots publicitarios, programas educativos, de ficción, entre otros..<br>
                        b) <input id="rd2" type="radio" name="p16" value="b">Conocer las distintas religiones, su filosofía y transmitirlas a la comunidad en general. <br>
                        c) <input id="rd1" type="radio" name="p16" value="c"> Asistir a directivos de multinacionales con manejo de varios idiomas. <br>
                        d) <input id="rd2" type="radio" name="p16" value="d"> Aplicar conocimientos de estadística en investigaciones en diversas áreas (social, administrativa, salud, entre otros)<br>
                        e) <input id="rd1" type="radio" name="p16" value="e">Estudiar la influencia entre las corrientes marinas y el clima y sus consecuencias ecológicas. <br>
                        <br>

                        <h3>17.</h3>
                        a) <input id="rd1" type="radio" name="p17" value="a"required> Decorar jardines de casas y parques públicos..<br>
                        b) <input id="rd2" type="radio" name="p17" value="b"> Estudiar grupos étnicos, sus costumbres, tradiciones, cultura y compartir sus vivencias.<br>
                        c) <input id="rd1" type="radio" name="p17" value="c"> Asesorar a inversionistas en la compra de bienes/acciones en mercados nacionales e internacionales. <br>
                        d) <input id="rd2" type="radio" name="p17" value="d"> Explorar el espacio sideral, los planetas, características y componentes.<br>
                        e) <input id="rd1" type="radio" name="p17" value="e"> Mejorar la imagen facial y corporal de las personas aplicando diferentes técnicas.<br>
                        <br>


                        <br>
                        <input type="submit" name="enviar">
                        <button type="submit" onclick="history.back()" class="btn btn-white">
                            {{ __('Atras') }}
                        </button>


                    </form>
                </div>
            </div>
    </div>
    </body>

@endsection
