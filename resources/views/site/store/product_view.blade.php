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

    
    </style>
</head>

<body style="background-color:white">
    <!-- transform: translate3d(60rem, 0px, 0px) -->
    <section id="seccionPrincipal" style="">




        <div class="container" id="container">

        </div>
        <div class="owl-carousel" id="owl-carousel" style="z-index:1;">

            <div class="primera"> <img class="carrusel foto" id="imagenPrincipal" src="{{asset('/storage/products/images/'. $product->photo_principal)}}" style="z-index:1" alt=""> </div>

            <div> <img class="carrusel foto" id="imagenSecundaria" style="z-index:0;object-position: bottom;" style="z-index:1" src="{{asset('/storage/products/images/'. $product->Photos->first()->path)}}" alt=""> </div>



        </div>

        <h1 class="pagina" style="display:none">1</h1> 
        <h51 class="pagina2">1/2</h51>
        <div class="container" id="datosProducto">

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

                <div class="rightSide" style=" background-image:url(http://arteseda/storage/products/images/{{$product->Photos->get(1)->path}});background-repeat:no-repeat;background-size:cover">


                    <div class="relacionados" data-nombre="{{$productRelacionado->name}}">
                        <div class="absolute-bg" style="display: flex;justify-content: center;align-content: center;flex-direction: column;align-items: center;background-image:'{{asset('/storage/'. $productRelacionado->photo_principal)}}';background-repeat:no-repeat;background-size:cover">
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
                    $("#seccionPrincipal").css("background-color", "#fae8e5");
                    $(".pagina").css("color", "#f0efec");
                    $("#container").css("background-image", "linear-gradient(to right, #fae8e5, #fae8e5, rgba(0, 0, 0, 0)");
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