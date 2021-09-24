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

        #imagenPrincipal {
            height: 50vh;

            object-position: center;
        }

        #imagenSecundaria {
            margin-top: 3rem;
            height: 70vh;

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
            left: 0;
            z-index: 6;
        }

        .carrusel {
            object-fit: contain;
            width: auto;
        }

        #container {
            height: 100%;
            width: 40%;
            background-image: linear-gradient(to right, #ECEAE6, #ECEAE6, rgba(0, 0, 0, 0));
            background-color: ;
            position: absolute;
            z-index: 6;
            transition: 0.5s ease-in-out;
        }

        .separador {
            position: relative;
            z-index: 6;

            background-color: white;
            height: 7vh;
        }

        .pagina {

            font-family: "Anton", Sans-serif;
            font-size: 40rem;
            position: absolute;
            font-weight: bold;
            right: 25rem;
            bottom: 1rem;
            color: #f0efec;
            transition: .5s ease-in-out;
        }

        .pagina2 {
            z-index: 2;
            font-size: 1.5rem;
            position: absolute;
            font-weight: 500;
            right: 1rem;
            text-shadow: 5px 5px 10px #00000059;
            bottom: 1rem;
            transition: .5s ease-in-out;
            text-shadow: 5px 5px 5px #0000006d;
            /* font-family: "SangBleu Kingdom Light","Book Antiqua",Palatino,Georgia,serif; */
            color: black;
            margin-left: 10rem;

            text-transform: uppercase;
        }

        .letfSide,
        .rightSide {
            height: 70vh;
            width: 100%;
            overflow: hidden;
        }

        .letfSide {
            position: relative;
            background-color: white;
            padding-top: 2rem;
            border-radius: 50px 0px 0px 00px;
            box-shadow: inset 0px 9px 10px 0px rgba(0, 0, 0, 0.1);
        }

        .rightSide {
            background-color: beige;
            background-repeat: no-repeat;
            background-size: 100% auto;
            transition: all 0.5s cubic-bezier(0.59, -0.18, 0.63, 1.32) 0s;
            box-shadow: inset 0px 9px 10px 0px rgba(0, 0, 0, 0.1);
        }



        #imagenesRelacionados {
            width: auto;
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
            background-size: contain;
            overflow: hidden;
        }

        .home-mast {
            height: 100%;
        }

        .home-mast__container2 {
            display: flex;
            height: 20rem;
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
            background-repeat: no-repeat;
            background-size: 100% auto;
        }

        .owl-carousel,
        .owl-stage {
            display: flex;
            align-items: center;

        }

        #owl-carousel2 {
            padding-left: 10rem;
            padding-right: 10rem;
        }

        .relacionadosTitular {

            margin-left: 10rem;
            margin-top: 2rem;
            margin-bottom: 1rem;

        }
    </style>
</head>

<body style="background-color:white">
    <!-- transform: translate3d(60rem, 0px, 0px) -->
    <section id="seccionPrincipal" style="position:relative;z-index:0;background-color:rgb(245, 238, 223);border-radius: 0px 0px 0px 50px;box-shadow: inset 0px -9px -10px 0px rgba(0, 0, 0, 0.1);">




        <div class="container" id="container">

        </div>
        <div class="owl-carousel" id="owl-carousel" style="z-index:1;">

            <div class="primera"> <img class="carrusel foto" id="imagenPrincipal" src="{{asset('/storage/products/images/'. $product->photo_principal)}}" style="z-index:1" alt=""> </div>

            <div> <img class="carrusel foto" id="imagenSecundaria" style="z-index:0;object-position: bottom;" style="z-index:1" src="{{asset('/storage/products/images/'. $product->Photos->first()->path)}}" alt=""> </div>



        </div>

        <h1 class="pagina">1</h1>
        <h51 class="pagina2">1/2</h51>
        <div class="container" id="datosProducto">
            <h1 class="titular">{{$product->Category->name}}</h1>
            <h1 class="titular">{{$product->name}}</h1>
            <h5 class="precio">{{$product->price}}€</h5>
            <h6 class="stock">{{$product->stock}} disponibles</h6>
            <h6 class="envio">Envío estimado en 1-2 días laborables</h6>
        </div>

    </section>

    <section class="full-width full-width--image mb-5-r19 mb-md-7-r19 single-cta separador" id="" style="">

    </section>
    <section>
        <div class="row no-gutters">
            <div class="col no-gutters" style="overflow:hidden">
                <div class="letfSide">

                    <h4 class="relacionadosTitular">Detalles del producto</h6>
                        <h6 id="relacionadosTitular" class="relacionadosTitular" style=" font-size: 0.9rem;"><strong id="colorProducto">Color: </strong>{{$product->name}}</h6>


                        <div class="owl-carousel" id="owl-carousel2" style="z-index:1;">
                            @foreach(ProductCategory::find($product->Category->id)->Products as $productRelacionado)
                            <div class="imagenRelacionados" data-nombre="{{$productRelacionado->name}}" data-imagen="{{$productRelacionado->Photos->get(1)->path}}">
                                <img class="d-block w-100" src="{{asset('/storage/products/images/'. $product->photo_principal)}}" alt="Third slide">
                            </div>
                            @endforeach
                        </div>
                        <p class="relacionadosTitular">{{$product->getDescription()}}</p>
                </div>
            </div>
            <div class="col no-gutters">

                <div class="rightSide" style=" background-image:url(http://arteseda/storage/products/images/{{$product->Photos->get(1)->path}})">


                    <div class="relacionados" data-nombre="{{$productRelacionado->name}}">
                        <div class="absolute-bg" style="display: flex;justify-content: center;align-content: center;flex-direction: column;align-items: center;background-image:'{{asset('/storage/'. $productRelacionado->photo_principal)}}'">
                            <h3 id="bus" style="font-weight:bold;font-size:3rem;"> </h3>
                            <p class="pe"></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="/vendor/js/owl.carousel.min.js"></script>
    <script>

    </script>
    <script type="text/javascript"></script>
    <script>
        $(".imagenCheck").hover(function() {

            $("#relacionadoNombre").text($(this).data("nombre"));
        });
        $(document).ready(function() {
            $("#owl-carousel2").owlCarousel({
                margin: 20,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 3,
                        nav: true
                    },
                    1000: {
                        items: 5,
                        nav: true,

                    }
                }
            })
        });


        $(document).ready(function() {
            $("#owl-carousel").owlCarousel({
                center: true,
                loop: true,

                items: 2,
                margin: -200,

            }).on('changed.owl.carousel', function(event) {

                var text = $(".pagina").text();
                if (text == "1") {
                    $(".pagina").text("2");
                    $(".pagina2").text("2/2");
                    $("#seccionPrincipal").css("background-color", "rgb(245 238 223)");
                    $(".pagina").css("color", "rgb(243 233 211)");
                    $("#container").css("background-image", "linear-gradient(to right, rgb(245 238 223), rgb(245 238 223), rgba(0, 0, 0, 0)");

                } else {
                    $(".pagina").text("1");
                    $(".pagina2").text("1/2");
                    $("#seccionPrincipal").css("background-color", "#ECEAE6");
                    $(".pagina").css("color", "#f0efec");
                    $("#container").css("background-image", "linear-gradient(to right, #ECEAE6, #ECEAE6, rgba(0, 0, 0, 0)");
                }



            })
        });

        $(".imagenRelacionados").hover(function() {

            console.log("url(http://arteseda/storage/products/images/" + $(this).data("imagen") + ")");
            $("#relacionadosTitular").text($(this).data("nombre"));
            $(".rightSide").css("background-image", "url(http://arteseda/storage/products/images/" + $(this).data("imagen") + ")");

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