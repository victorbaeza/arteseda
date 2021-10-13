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

</head>

<body style="">
    <section class="full-width full-width--image mb-5-r19 mb-md-7-r19 single-cta imagenPrincipal" style="background-image:url({{url('/storage/inicioBanner.jpg')}});">

        <h3 class="tituloBanner">NUESTROS PAÑUELOS</h3>

    </section>

    <section class="full-width full-width--image products_section">


        <div class="row" id="cont">
            @foreach($products as $product)
            <div class="grid-r19__item col-xs-6--r19 col-md-3--r19">
                <div class="box" data-nombre="{{$product->id}}">


                    <div class="container2">
                        <div class="card">
                            <div class="imgBx">
                                <a href="/products/{{$product->getSlug()}}"><img class="product_image" src="{{asset('/storage/products/images/'. $product->photo_principal)}}"></a>

                            </div>
                            <div class="imgBx2">

                                <a href="/products/{{$product->getSlug()}}"><img class="product_image_model" src="{{asset('/storage/products/images/'. $product->Photos->first()->path)}}"></a>
                                <div class="like_btn" data-like="0">
                                    <i class="far fa-heart"></i>
                                </div>

                            </div>

                            <div class="contentBx">
                                <h5>{{$product->name}}</h5>
                                <div class="size">
                                    <h6 class="product__price">{{$product->price}}€</h6>

                                </div>
                                <!--     <div class="color">
                                        <h6>Color :</h6>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div> -->
                             <!--    <a class="buy_product" href="#">Comprar</a> -->
                                <a  href="#" class="cta" style="background-color: #00000000;">
                                    <span>Comprar</span>
                                    <svg width="13px" height="10px" viewBox="0 0 13 10">
                                        <path d="M1,5 L11,5"></path>
                                        <polyline points="8 1 12 5 8 9"></polyline>
                                    </svg>
                                </a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>




            @endforeach
        </div>


    </section>
    <script src="/vendor/js/owl.carousel.min.js"></script>
    <script>
        $(".box").hover(function() {

            var foto = $(this).data("nombre");

            if ($("#" + foto + "1").css("display") == "block") {

                $("#" + foto + "1").css("display", "none");
            } else {
                $("#" + foto + "1").css("display", "block");
            }
            if ($("#" + foto + "2").css("display") == "block") {
                $("#" + foto + "2").css("display", "none");
            } else {
                $("#" + foto + "2").css("display", "block");
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
            var menu = document.getElementsByClassName("menu");


            if (window.pageYOffset > sticky) {
                header.classList.remove("absolute");
                header.classList.add("sticky");
                for (i = 0; i < menu.length; i++) {
                    menu[i].classList.remove("blanco");
                    menu[i].classList.add("negro");

                }

            } else {
                header.classList.remove("sticky");
                header.classList.add("absolute");
                for (i = 0; i < menu.length; i++) {
                    menu[i].classList.remove("negro");
                    menu[i].classList.add("blanco");

                }
            }
        }
    </script>
    <script>
        $(document).on("click", ".like_btn", function() {
            if ($(this).data("like") == 0) {
                $(this).html('<i class="fas fa-heart"></i>');
                $(this).data("like", "1");
            } else {
                $(this).html('<i class="far fa-heart"></i>');
                $(this).data("like", "0");
            }

        });
        $(".like_btn").mouseenter(function() {
            $(this).css("color", "rgb(253 196 243)");

        });
        $(".like_btn").mouseleave(function() {
            $(this).css("color", "rgb(245 225 193)");

        });
    </script>
</body>

</html>
@stop