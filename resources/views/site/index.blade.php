@extends('layouts.site.main')

{{-- css --}}
@section('extracss')

<style>
    .titular {
        margin-left: 10rem;
        text-shadow: -1px 5px 6px #00000091;
    }




    .foto {
        height: 30vh;
        object-fit: cover;
    }



    * {
        box-sizing: border-box;
        margin: 0;
    }

    html,
    body {
        margin: 0;
        background: white;
        font-family: "Montserrat", helvetica, arial, sans-serif;
        font-size: 14px;
        font-weight: 400;
    }

    .link {
        display: block;
        text-align: center;
        color: #777;
        text-decoration: none;
        padding: 10px;
    }

    .movie_card {
        position: relative;
        display: block;
        width: 50rem;
        height: 350px;
        margin-top: 10vh;
        overflow: hidden;
        border-radius: 10px;
        transition: all 0.4s;
        box-shadow: 0px 0px 19px 4px rgb(0 0 0 / 20%)
    }

    .movie_card:hover {
        transform: scale(1.02);
        box-shadow: 0px 0px 80px -25px rgba(0, 0, 0, 0.5);
        transition: all 0.4s;
    }

    .movie_card .info_section {
        position: relative;
        width: 100%;
        height: 100%;
        background-blend-mode: multiply;
        z-index: 2;
        border-radius: 10px;
    }

    .movie_card .info_section .movie_header {
        position: relative;
        padding: 25px;
        height: 40%;
    }

    .movie_card .info_section .movie_header h1 {
        color: black;
        font-weight: 400;
    }

    .movie_card .info_section .movie_header h4 {
        color: #555;
        font-weight: 400;
    }

    .movie_card .info_section .movie_header .minutes {
        display: inline-block;
        margin-top: 15px;
        color: #555;
        padding: 5px;
        border-radius: 5px;
        border: 1px solid rgba(0, 0, 0, 0.05);
    }

    .movie_card .info_section .movie_header .type {
        display: inline-block;
        color: #959595;
        margin-left: 10px;
    }

    .movie_card .info_section .movie_header .locandina {
        position: relative;
        float: left;
        margin-right: 20px;
        height: 120px;
        box-shadow: 0 0 20px -10px rgba(0, 0, 0, 0.5);
    }

    .movie_card .info_section .movie_desc {
        padding: 25px;
        height: 50%;
    }

    .movie_card .info_section .movie_desc .text {
        color: #545454;
    }

    .movie_card .info_section .movie_social {
        height: 10%;
        padding-left: 15px;
        padding-bottom: 20px;
    }

    .movie_card .info_section .movie_social ul {
        list-style: none;
        padding: 0;
    }

    .movie_card .info_section .movie_social ul li {
        display: inline-block;
        color: rgba(0, 0, 0, 0.3);
        transition: color 0.3s;
        transition-delay: 0.15s;
        margin: 0 10px;
    }

    .movie_card .info_section .movie_social ul li:hover {
        transition: color 0.3s;
        color: rgba(0, 0, 0, 0.7);
    }

    .movie_card .info_section .movie_social ul li i {
        font-size: 19px;
        cursor: pointer;
    }

    .movie_card .blur_back {
        position: absolute;
        top: 0;
        z-index: 1;
        height: 100%;
        right: 0;
        background-size: cover;
        border-radius: 11px;
    }

    @media screen and (min-width: 768px) {
        .movie_header {
            width: 65%;
        }

        .movie_desc {
            width: 50%;
        }

        .info_section {
            background: linear-gradient(to right, white 50%, transparent 100%);
        }

        .blur_back {
            width: 80%;
            background-position: -100% 10% !important;
        }
    }

    @media screen and (max-width: 768px) {
        .movie_card {
            width: 95%;

            min-height: 350px;
            height: auto;
        }

        .blur_back {
            width: 100%;
            background-position: 50% 50% !important;
        }

        .movie_header {
            width: 100%;
            margin-top: 85px;
        }

        .movie_desc {
            width: 100%;
        }

        .info_section {
            background: linear-gradient(to top, #e5e6e6 50%, transparent 100%);
            display: inline-grid;
        }
    }

    .bright_back {
        background: url("http://arteseda/storage/products/images/1_Segunda.webp");
    }

    .bright_back_2 {
        background: url("http://arteseda/storage/products/images/2_Segunda.webp");
    }

    .bright_back_3 {
        background: url("http://arteseda/storage/products/images/3_Segunda.webp");
    }

    .bright_back_4 {
        background: url("http://arteseda/storage/products/images/4_Segunda.webp");
    }

    .flexbox {
        display: flex;
        flex-wrap: wrap;
        position: relative;
        width: 100%;
        justify-content: space-evenly;

    }
</style>
@stop
{{-- Content --}}
@section('content')






    <section class="full-width full-width--image mb-5-r19 mb-md-7-r19 single-cta imagenPrincipal" style="background-image:url({{url('/storage/fondo_products.jpg')}});">

        <h3 class="tituloBanner">NUESTROS PAÑUELOS</h3>

    </section>

    <section class="full-width full-width--image mb-5-r19 mb-md-7-r19 single-cta" style="padding-top:4rem;padding-bottom:4rem;">
        <h1 class="titular">NUESTRAS COLECCIONES</h1>

        </div>

    </section>
    <section style="display:flex;justify-content:center;padding-top:4rem;padding-bottom:4rem;">

        <!--   <div class="owl-carousel" id="owl-carousel" style="z-index:1;">

                <div class="primera"> <img class="carrusel foto" id="" src="http://arteseda/storage/products/images/1_Segunda.webp" style="" alt=""> </div>

                <div> <img class="carrusel foto" id="imagenSecundaria2" style="" style="z-index:1" src="http://arteseda/storage/products/images/1_Segunda.webp" alt=""> </div>



            </div> -->
        <div class="flexbox">


            <div class="movie_card" id="bright">
                <div class="info_section">
                    <div class="movie_header">
                        <h1>Colección 1</h1>
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
                        <h1>Colección 2</h1>
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
                        <h1>Colección 3</h1>
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
                        <h1>Colección 4</h1>
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


</html>
@stop