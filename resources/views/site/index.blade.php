@extends('layouts.site.main')

{{-- css --}}
@section('extracss')
<link rel="stylesheet" type="text/css" href="/css/index.css">
<style>
  
</style>
@stop
{{-- Content --}}
@section('content')






<section class="imagenPrincipal_index" style="background-image:url({{url('/storage/fondo_products.jpeg')}});background-position: inherit;background-size: cover;">

    <div class="section_cut" style="background-image: url(http://arteseda/storage/fondocarrito2.jpg);  background-repeat: no-repeat;
    background-size: 100% 100%;">

    </div>


</section>

<section class="full-width full-width--image mb-5-r19 mt-5-r19 mb-md-7-r19 single-cta" style="display:flex;justify-content:center;padding-top:4rem;padding-bottom:4rem;background-image: url(http://arteseda/storage/fondocarrito2.jpg);
    background-repeat: no-repeat;
    background-size: 100% 100%;">

    <div style="text-align:center">
       <!--  <img id="logoIndex" src="{{asset('/storage/logoarteseda_pwer.png')}}">
        <h3 class="tituloIndex"><strong>arte</strong>seda</h3>
        <h3 class="textoIndex">PAÑUELOS DE <strong>SEDA</strong> ARTESANALES</h3> -->
        <img id="logoIndex" src="{{asset('/storage/logo_tipo_2.png')}}">
        <h3 class="textoIndex">pañuelos de <strong>seda</strong> artesanales</h3>
    </div>
    </div>
</section>

    <section class="category-section ">

    

   
       
 
        <div class="owl-carousel" id="owl-carousel-index" style="z-index:1;">
        
            <div class="movie_card" id="bright">
                <div class="info_section">
                    <div class="movie_header">
                        <h1 class="collection_name">Colección 1</h1>
                        <h4>2022, Primavera</h4>
                        <span class="minutes">Característica</span>
                        <p class="type">Palabra, Palabra, Palabra</p>
                    </div>
                    <div class="movie_desc">
                        <p class="text">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                    </div>
                    <div class="movie_social">
                        <ul>
                            <li><i class="fas fa-share-alt"></i></li>
                            <li><i class="fas fa-heart"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="blur_back bright_back"></div>
            </div>

            <div class="movie_card" id="bright_2">
                <div class="info_section">
                    <div class="movie_header">
                    <h1 class="collection_name">Colección 2</h1>
                        <h4>2022, Otoño</h4>
                        <span class="minutes">Característica</span>
                        <p class="type">Palabra, Palabra, Palabra</p>
                    </div>
                    <div class="movie_desc">
                        <p class="text">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                    </div>
                    <div class="movie_social">
                        <ul>
                            <li><i class="fas fa-share-alt"></i></li>
                            <li><i class="fas fa-heart"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="blur_back bright_back_2"></div>
            </div>
            <div class="movie_card" id="bright">
                <div class="info_section">
                    <div class="movie_header">
                    <h1 class="collection_name">Colección 3</h1>
                        <h4>2022, Verano</h4>
                        <span class="minutes">Característica</span>
                        <p class="type">Palabra, Palabra, Palabra</p>
                    </div>
                    <div class="movie_desc">
                        <p class="text">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                    </div>
                    <div class="movie_social">
                        <ul>
                            <li><i class="fas fa-share-alt"></i></li>
                            <li><i class="fas fa-heart"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="blur_back bright_back_3"></div>
            </div>

            <div class="movie_card" id="bright_2">
                <div class="info_section">
                    <div class="movie_header">
                    <h1 class="collection_name">Colección 4</h1>
                        <h4>2022, Invierno</h4>
                        <span class="minutes">Característica</span>
                        <p class="type">Palabra, Palabra, Palabra</p>
                    </div>
                    <div class="movie_desc">
                        <p class="text">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                    </div>
                    <div class="movie_social">
                        <ul>
                            <li><i class="fas fa-share-alt"></i></li>
                            <li><i class="fas fa-heart"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="blur_back bright_back_4"></div>
            </div>

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
                $("#logo").attr("src","http://arteseda/storage/logo_tipo_2.png");
                $(".header_search").addClass("header_search_sticky");
                $(".header_search").removeClass("header_search");
                $(".close_search").css("color","black");
                for (i = 0; i < menu.length; i++) {
                    menu[i].classList.remove("blanco");
                    menu[i].classList.add("negro");
                    /*  $("#logo").attr("src","{{asset('/storage/negro.png')}}"); */
                }

            } else {
                header.classList.remove("sticky");
                header.classList.add("absolute");
                $("#logo").attr("src","http://arteseda/storage/logo_tipo_blanco.png");
                $(".header_search_sticky").addClass("header_search");
                $(".close_search").css("color","white");
                $(".header_search_sticky").removeClass("header_search_sticky");
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
            $("#owl-carousel-index").owlCarousel({
                nav: false,
                autoplay: true,
                loop: true,
                margin: 30,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false,
                        center: true
                    },
                    600: {
                        items: 1,
                        nav: false,
                        center: true
                    },
                    1025: {
                        items: 2,
                        nav: false,
                    }
                }

            })
        });
    </script>


    </html>
    @stop