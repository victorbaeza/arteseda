@extends('layouts.site.main')

{{-- css --}}
@section('extracss')
@stop
{{-- Content --}}
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Inicio</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
            transition: 0.5s ease-in-out;
        }

        .tituloBanner {
            position: absolute;
            bottom: 0;
            left: 0;
            margin-left: 2rem;
            color: white;
            font-size: 1rem;
            margin-left: 10rem;

        }

        .titular {
            text-shadow: 5px 5px 10px #00000059;
            width: 30rem;
            /* font-family: "SangBleu Kingdom Light","Book Antiqua",Palatino,Georgia,serif; */
            color: black;
            margin-left: 10rem;

            text-transform: uppercase;
        }

        .precio {

            width: 30rem;
            margin-top: 2rem;
            color: black;
            margin-left: 20rem;

            text-transform: uppercase;
        }

        .stock {
            font-size: 0.9rem;
            width: 30rem;
            color: black;
            margin-left: 20rem;

            text-transform: lowercase;
        }

        .foto {
            filter: drop-shadow(-6px 6px 25px rgba(0, 0, 0, 0.5));
        }

        .envio {
            font-size: 0.9rem;
            width: 30rem;
            color: black;
            margin-left: 20rem;


        }

        #datosProducto {
            position: absolute;
            bottom: 5rem;
            margin-left: 2rem;
            left: 0;
            z-index: 6;
        }

        .carrusel {
            object-fit: none;
            height: 60rem;
            width: auto;
        }

        #container {
            height: 60rem;
            width: 75vh;
            background-image: linear-gradient(to right, #ECEAE6, #ECEAE6, rgba(0, 0, 0, 0));
            background-color: ;
            position: absolute;
            z-index: 6;
            transition: 0.5s ease-in-out;
        }

        .separador {
            position: relative;
            z-index: 6;
            box-shadow: 0px 5px 5px rgba(0, 0, 0, 0.1), 0px -5px 10px rgba(0, 0, 0, 0.1);
        }

        .pagina {

            font-family: "Anton", Sans-serif;
            font-size: 30rem;
            position: absolute;
            font-weight: bold;
            right: 10rem;
            color: #f0efec;
            transition: .5s ease-in-out;
        }

        .letfSide,
        .rightSide {
            height: 70vh;
            width: 100%;
        }

        .letfSide {
            background-color: white;
            padding-top: 2rem;
        }

        .rightSide {
            background-repeat: no-repeat;
            background-size: 100% auto;
            transition: all 0.5s cubic-bezier(0.59, -0.18, 0.63, 1.32) 0s;
        }



        #imagenesRelacionados {
            widht: auto;
            height: 20rem;
            margin: 0.5rem;
            object-fit: contain;
        }


        .absolute-bg {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 0;
            height: 100%;
            width: 100%;
            background-position: 20%;
            background-repeat: no-repeat;
            background-size: cover;
            overflow: hidden;
        }

        .home-mast {
            height: 100%;
        }

        .home-mast__container2 {
            display: flex;
            height: 100%;
            flex-direction: column;
        }

        .home-mast__container2>* {
            position: relative;
            flex-grow: 0.5;
            padding: 1em;
            transition: flex-grow 0.6s cubic-bezier(0.43, 0.15, 0.95, 0.12) 0.2s;
        }

        .home-mast__container2>*:hover {
            
            flex-grow: 10;
        }

      

        .relacionados {
            background-repeat: none;
            background-size: 100% auto;
        }
    </style>
</head>

<body style="background-color:#ECEAE6">
    <!-- transform: translate3d(60rem, 0px, 0px) -->
    <section style="position:relative;z-index:0">

        <div class="row ">


            <div class="container" id="container">

            </div>
            <div class="owl-carousel" id="owl-carousel" style="z-index:1;height:60rem;overflow:hidden;padding-top:2rem">

                <div class="primera"> <img class="carrusel foto" src="{{asset('/storage/'. $product->photo_principal)}}" alt=""> </div>

                <div> <img class="carrusel foto" style="z-index:0;object-position: bottom;" src="{{asset('/storage/'. $product->Photos->first()->path)}}" alt=""> </div>



            </div>

            <h1 class="pagina">1/2</h1>
        </div>
        <div class="container" id="datosProducto">
            <h1 class="titular">{{$product->Category->name}}</h1>
            <h1 class="titular">{{$product->name}}</h1>
            <h5 class="precio">{{$product->price}}€</h5>
            <h6 class="stock">{{$product->stock}} disponibles</h6>
            <h6 class="envio">Envío estimado en 1-2 días laborables</h6>
        </div>

    </section>

    <section class="full-width full-width--image mb-5-r19 mb-md-7-r19 single-cta separador" id="" style="background-color:white;height:10rem">

    </section>

    <div class="row no-gutters">
        <div class="col no-gutters">
            <div class="letfSide">
                <h1 id="relacionadosTitular"></h1>


            </div>
        </div>
        <div class="col no-gutters">
            <div class="rightSide">
                <section class="home-mast">
                    <div class="home-mast__container2">
                        @foreach(ProductCategory::find($product->Category->id)->Products as $productRelacionado)
                        <div class="relacionados" style=" background-image:url(http://arteseda/storage/{{$productRelacionado->photo_principal}})" data-nombre="{{$productRelacionado->name}}">
                            <div class="absolute-bg" style="display: flex;justify-content: center;align-content: center;flex-direction: column;align-items: center;background-image:'{{asset('/storage/'. $productRelacionado->photo_principal)}}'">
                                <h3 id="bus" style="font-weight:bold;font-size:3rem;"> </h3>
                                <p class="pe"></p>
                            </div>

                        </div>
                        @endforeach
                    </div>
                </section>
            </div>
        </div>
    </div>

    <script src="/vendor/js/owl.carousel.min.js"></script>
    <script>

    </script>
    <script type="text/javascript"></script>
    <script>
        $(".imagenCheck").hover(function() {

            $("#relacionadoNombre").text($(this).data("nombre"));
        });



        $(document).ready(function() {
            $("#owl-carousel").owlCarousel({
                center: true,
                loop: true,

                items: 2,
                margin: -200,

            }).on('changed.owl.carousel', function(event) {
                console.log($(".pagina").text());
                var text = $(".pagina").text();
                if (text == "1/2") {
                    $(".pagina").text("2/2");
                    $("body").css("background-color","rgb(245 238 223)");
                    $(".pagina").css("color","rgb(243 233 211)");
                    $("#container").css("background-image","linear-gradient(to right, rgb(245 238 223), rgb(245 238 223), rgba(0, 0, 0, 0)");

                } else {
                    $(".pagina").text("1/2");
                    $("body").css("background-color","#ECEAE6");
                    $(".pagina").css("color","#f0efec");
                    $("#container").css("background-image","linear-gradient(to right, #ECEAE6, #ECEAE6, rgba(0, 0, 0, 0)");
                }



            })
        });

        $(".relacionados").hover(function() {
            $("#relacionadosTitular").text($(this).data("nombre"));
        });


        $(document).ready(function() {
            var menu = document.getElementsByClassName("menu");
            for (i = 0; i < menu.length; i++) {
                menu[i].classList.remove("blanco");
                menu[i].classList.add("negro");
                $("#logo").attr("src", "{{asset('/storage/negro.png')}}");
            }
        });
    </script>
    <script>
        window.onscroll = function() {
            myFunction()
        };

        var header = document.getElementById("header");

        var sticky = header.offsetTop;

        function myFunction() {


            if (window.pageYOffset > sticky) {
                header.classList.remove("absolute");
                header.classList.add("sticky");

            } else {
                header.classList.remove("sticky");
                header.classList.add("absolute");
            }
        }
    </script>

</body>

</html>
@stop