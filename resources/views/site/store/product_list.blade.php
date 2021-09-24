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
            margin-left: 10rem;
        }

        .imagenPrincipal {
            height: 50rem;
            background-color: #ECEAE6;
            position: relative;
            padding:2rem;
            background-repeat: no-repeat;
            background-size: 100% auto;
            display: flex;
            align-items: center;
        }

        #owl-carousel2 {
            display: flex;
            justify-content: center;
        
        }
        .owl-carousel{
            width: 100%;
            margin-right: 2rem;
        }
    </style>
</head>

<body style="background-color:#ECEAE6">
    <section class="full-width full-width--image mb-5-r19 mb-md-7-r19 single-cta imagenPrincipal">
        <div class="owl-carousel" id="owl-carousel2" style="z-index:1;">
            @foreach($products as $product)

            <div class="imagenRelacionados" data-nombre="{{$product->name}}" data-imagen="{{$product->Photos->get(1)->path}}">
                <a href="/products/{{$product->getSlug()}}"> <img class="d-block w-100" src="{{asset('/storage/products/images/'. $product->photo_principal)}}" alt="{{$product->name}}"></a>
            </div>



            @endforeach




        </div>



    </section>
    <section class="full-width full-width--image mb-5-r19 mb-md-7-r19 single-cta" style="padding-top:4rem;padding-bottom:4rem;">
        <h1 class="titular">PAÑUELOS DE SEDA ARTESANALES</h1>

    </section>
    <script src="/vendor/js/owl.carousel.min.js"></script>
    <script>
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
        $(document).ready(function() {
            $("#owl-carousel2").owlCarousel({
                margin: 200,
                center:true,
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
                        items: 3,
                        nav: true,
                        loop: true,

                    }
                }
            })
        });
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