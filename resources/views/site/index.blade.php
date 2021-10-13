@extends('layouts.site.main')

{{-- css --}}
@section('extracss')

<style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
        }

        .tituloBanner {
            position: absolute;
            bottom: 0;
            left: 0;
            margin-left: 2rem;
            color: black;
            z-index: 2;
            font-size: 2rem;
            margin-left: 10rem;
        }

        .titular {
            margin-left: 10rem;
        }

        .imagenPrincipal2 {
            height: 70vh;
            background-color: black;
            position: relative;
            background-repeat: no-repeat;
            background-size: 100% auto;
        }

        #container {
            height: 100%;
            width: 200%;
            background-image: linear-gradient(45deg, #ECEAE6, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0));
            background-color: ;
            position: absolute;
            z-index: 1;
            transition: 0.5s ease-in-out;
        }

        .foto {
            height: 30vh;
            object-fit: cover;
        }

    </style>
@stop
{{-- Content --}}
@section('content')






<body style="background-color:#ECEAE6">
    <section class="full-width full-width--image mb-5-r19 mb-md-7-r19 single-cta imagenPrincipal2" style="background-image:url({{url('/storage/inicioBanner.jpg')}});">
        <div class="container" id="container">

        </div>
        <h3 class="tituloBanner">PAÑUELOS DE SEDA ARTESANALES</h3>

    </section>

    <section class="full-width full-width--image mb-5-r19 mb-md-7-r19 single-cta" style="padding-top:4rem;padding-bottom:4rem;">
        <h1 class="titular">NUESTRAS COLECCIONES</h1>

        </div>

    </section>
    <section style="display:flex;justify-content:center;padding-top:4rem;padding-bottom:4rem;">
        <div class="col-lg-10">
            <div class="owl-carousel" id="owl-carousel" style="z-index:1;">

                <div class="primera"> <img class="carrusel foto" id="" src="http://arteseda/storage/products/images/1_Segunda.webp" style="" alt=""> </div>

                <div> <img class="carrusel foto" id="imagenSecundaria2" style="" style="z-index:1" src="http://arteseda/storage/products/images/1_Segunda.webp" alt=""> </div>



            </div>
    </section>
    <script src="/vendor/js/owl.carousel.min.js"></script>
    <script>
        window.onscroll = function() {
            myFunction()
        };

        var header = document.getElementById("header");

        var sticky = header.offsetTop;

        function myFunction() {
            var menu = document.getElementsByClassName("menu");



            if (window.pageYOffset > sticky) {
                header.classList.remove("absolute");
                header.classList.add("sticky");
                for (i = 0; i < menu.length; i++) {
                    menu[i].classList.remove("blanco");
                    menu[i].classList.add("negro");
                    /*  $("#logo").attr("src","{{asset('/storage/negro.png')}}"); */
                }

            } else {
                header.classList.remove("sticky");
                header.classList.add("absolute");
                for (i = 0; i < menu.length; i++) {
                    menu[i].classList.remove("negro");
                    menu[i].classList.add("blanco");
                    /* $("#logo").attr("src","{{asset('/storage/blanco.png')}}"); */
                }
            }
        }
    </script>
    <script>
        $(document).ready(function() {
            $("#owl-carousel").owlCarousel({
                center: true,
                autoplay: true,
                loop: true,
                margin: 200,
                items: 3,


            })
        });
    </script>
</body>

</html>
@stop