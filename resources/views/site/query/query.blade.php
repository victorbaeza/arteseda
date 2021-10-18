



@extends('layouts.site.main')

{{-- css --}}
@section('extracss')
<link rel="stylesheet" type="text/css" href="/css/query.css">
<link rel="stylesheet" type="text/css" href="/css/products.css">
<style>
    .centroFondo {
        background-color: #fdf5f2;
        width: 20%;
    }

    .izquierdaFondo,
    .derechaFondo {
        background-color: #fae8e5;
    }
</style>

@stop
{{-- Content --}}
@section('content')




<section class="full-width full-width--image  mb-5-r19 mb-md-7-r19  cart_section" style="background-image:url(http://arteseda/storage/products/images/fondobanner.jpg);background-repeat:no-repeat;background-size:cover">

    
    <div class="container product carrito">
    

    <div class="product__photo">

		<div class="photo-container">
        
			<div class="photo-main">
				<div class="controls">
                <i class="fas fa-share-alt control_icon"style="font-size: 1.4rem;"></i>
                    <i class="far fa-heart control_icon" style="font-size: 1.4rem;"></i>
				</div>
				<img class="front_product_img" src="http://arteseda/storage/products/images/1_rojo.png"alt="green apple slice">
                <img class="front_product_img-in" src=""alt="green apple slice">
			</div>
			<div class="photo-album">

				<ul>
                    <input type="hidden" id="photo_number" value="1">
					<li><img  class="thumb_product_img"src="http://arteseda/storage/products/images/1_rojo.png" alt="green apple" data-id="http://arteseda/storage/products/images/1_rojo.png"></li>
					<li><img  class="thumb_product_img"src="http://arteseda/storage/products/images/morado.png" alt="green apple" data-id="http://arteseda/storage/products/images/morado.png"></li>
					<li><img class="thumb_product_img"src="http://arteseda/storage/products/images/naranja.png" alt="green apple"data-id="http://arteseda/storage/products/images/naranja.png"></li>
					<li><img class="thumb_product_img"src="http://arteseda/storage/products/images/rosa.png" alt="apple top"data-id="http://arteseda/storage/products/images/rosa.png"></li>
				</ul>
			</div>
		</div>

	</div>
	<div class="product__info">
		<div class="title">
			<h1>Pañuelo Nombre #1</h1>
			<span>COD: 45999</span>
		</div>
        <hr class="">
		<div class="price">
			<span>350.00€</span>
		</div>
        <div class="description">
			<h3>Descripción</h3>
			<ul>
            <li>{{Product::first()->getDescription()}}</li>
			</ul>
		</div>
        <div class="description">
			<h3>Colección</h3>
			<ul>
            <li>Nombre Colección</li>
			</ul>
		</div>
        <div class="description">
			<h3>Medidas</h3>
			<ul>
              <li>Largo 90.0 CM Ancho 90.0 CM</li>
			</ul>
		</div>
	
		<div class="description">
			<h3>Número</h3>
			<ul>
				<li>Pañuelo nº# de x pañuelos</li>
			</ul>
		</div>
        <div class="description">
			<h3>Orígen</h3>
			<ul>
            <li>Hecho en SPAIN</li>
			</ul>
		</div>
        <hr class="">
	</div>
</section>


<script>


    $(document).ready(function() {
        var menu = document.getElementsByClassName("menu");
        $("#logo").attr("src","http://arteseda/storage/logo_tipo.png")
        for (i = 0; i < menu.length; i++) {
            menu[i].classList.add("negro");

        }
        
    });

 $(document).on("click",".thumb_product_img",function(){

    $(".front_product_img-in").attr("src",$(this).data("id"));
    var foto=parseInt($("#photo_number").val());
    console.log(foto);
    if(foto==1){
        $(".photo-main").addClass("photo-main-2")
        $(".photo-main").removeClass("photo-main")
        foto++;
        $("#photo_number").val(foto);
        console.log("uno");
    }else if(foto==2){
        $(".photo-main-2").addClass("photo-main-3")
        $(".photo-main-2").removeClass("photo-main-2")
        foto++;
        $("#photo_number").val(foto);
    }else if(foto==3){
        $(".photo-main-3").addClass("photo-main-4")
        $(".photo-main-3").removeClass("photo-main-3")
        foto++;
        $("#photo_number").val(foto);
    }else if(foto==4){
        $(".photo-main-4").addClass("photo-main")
        $(".photo-main-4").removeClass("photo-main-4")
        foto=1;
        console.log("cuatro");
        $("#photo_number").val(foto);
    }
    $(".front_product_img").addClass("front_product_img-out");
    $(".front_product_img").removeClass("front_product_img");
  
    $(".front_product_img-in").addClass("front_product_img");
    $(".front_product_img-in").removeClass("front_product_img-in");
    $(".controls").append("<img class='front_product_img-in' src=''alt='green apple slice'>");
    
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
            $("#header").css("box-shadow", "0rem 0.3rem 2rem #83838338");
            for (i = 0; i < menu.length; i++) {
                menu[i].classList.remove("blanco");
                menu[i].classList.add("negro");

            }

        } else {
            $("#header").css("box-shadow", "none");
            header.classList.remove("sticky");
            header.classList.add("absolute");

        }
    }
</script>
@stop
<!--  -->