@extends('layouts.site.main')

{{-- css --}}
@section('extracss')
<link rel="stylesheet" type="text/css" href="/css/cart.css">
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




<section class="full-width full-width--image  mb-5-r19 mb-md-7-r19  cart_section" style="height:100%;background-image:url({{url('/storage/fondocarrito2.jpg')}});background-repeat:no-repeat; background-size: 100% 100%;">


    <div class="container carrito">
        <div class="row cart_view" style="height:100%">
            <div class="col-9 leftCart">
                <div class="row header_cart">
                    <div class="col">PRODUCTO</div>
                    <div class="col">PRECIO</div>
                    <div class="col">CANTIDAD</div>
                    <div class="col">TOTAL</div>
                </div>
                <hr class="">
                @foreach(Product::all()->slice(0,2) as $product)
                <div class="row product_row_cart align-items-center" id="row{{$product->id}}">
                    <div class="col">
                        <div class="container_cart">
                            <div class="card">
                                <div class="imgBx">
                                    <a href="/products/{{$product->getSlug()}}"><img class="product_image_cart" src="{{asset('/storage/products/images/'. $product->photo_principal)}}"></a>
                                    <i class="fas fa-times remove_item" data-id="row{{$product->id}}"data-total="total_{{$product->id}}"></i>
                                </div>

                                <div class="contentBx">
                                    <h5 class="product_name_cart">{{$product->name}}</h5>
                                    <h6 class="product_id_cart">#00000000001773</h6>
                                    <h6 class="product_category_cart">Categoría: {{$product->Category->name}}</h6>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div>

                            <h6 class="product__price_cart" id="price_{{$product->id}}">{{$product->price}}€</h6>
                        </div>
                    </div>
                    <div class="col">
                        <div class="cart_quantity">
                            <button value="-" class="btn btn_sumar_item" data-id="quantity_{{$product->id}}" data-total="total_{{$product->id}}"data-price="price_{{$product->id}}">+</button>
                            <input type="text" step="1" min="1" id="quantity_{{$product->id}}" max="" name="quantity" value="1" size="3" pattern="" inputmode="">
                            <button value="-" class="btn btn_restar_item" data-id="quantity_{{$product->id}}" data-total="total_{{$product->id}}"data-price="price_{{$product->id}}">-</button>
                        </div>
                    </div>
                    <div class="col">
                        <h6 class="product__price_cart_total" id="total_{{$product->id}}">{{$product->price}}€</h6>
                    </div>
                </div>
                <hr class="" style="margin:3vh" id="hr_row{{$product->id}}">
                @endforeach
                <div class="row product_row_cart_note align-items-center">
                    <div class="container">
                        <h6>AÑADIR UNA NOTA</h6>
                        <textarea name="cart_note" id="cart_note" cols="30" rows="3"></textarea>
                    </div>
                </div>
            </div>
            <div class="col-3 rightCart">
                <div class="row product_row_cart_total">
                    <div class="col">
                        <div>
                            <hr class="rounded">
                        </div>
                    </div>
                </div>
                <div class="row product_row_cart_total align-items-center">
                    <div class="col ">
                        <div class="total_cart_text">
                            <h6>TOTAL</h6>
                        </div>
                    </div>
                    <div class="col ">
                        <div class="total_cart_price">
                            <h6 class="total_price_cart"></h6>

                        </div>
                    </div>
                </div>
                <div class="row product_row_cart_aviso align-items-start">
                    <div class="col ">
                        <div class="total_cart_text">
                            <h6>Envío e impuestos calculados en CHECKOUT</h6>
                        </div>
                    </div>

                </div>
                <div class="row product_row_cart_total align-items-start">
                    <div class="col ">
                        <div class="total_cart_text">
                            <form action="">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">He leído y acepto los términos y condiciones de uso</label>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
                <div class="row product_row_cart_total align-items-start">
                    <div class="col ">
                        <div class="total_cart_text">
                            <button class="btn checkout_cart">CHECKOUT <i class="fas fa-shopping-bag" style="margin-left:1vh"></i> </button>

                        </div>
                    </div>

                </div>
                <div class="row product_row_cart_total align-items-start">
                    <div class="col ">
                        <div class="total_cart_text">
                            <button class="btn pay_cart">PAGAR <i class="fas fa-shopping-bag" style="margin-left:1vh"></i> </button>

                        </div>
                    </div>

                </div>
                <div class="row product_row_cart_total align-items-start">
                    <div class="col ">
                        <div class="total_cart_icon">
                        <i class="fas fa-shopping-bag"></i>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


<script>
    $(document).on("click",".remove_item",function(){
     
        $("#"+$(this).data("id")).remove();
        $("#hr_"+$(this).data("id")).remove();
        calcularTotalCarrito();
    });

    $(document).ready(function(){

        calcularTotalCarrito();
    });
    function calcularTotalCarrito(){
        var totales=document.getElementsByClassName("product__price_cart_total");

        var suma=0;
        for(i=0;i<totales.length;i++){
            suma=suma+parseFloat(totales[i].textContent);

        }
        $(".total_price_cart").text(suma.toFixed(2)+"€");
        $(".total_price_cart").css("font-weight","bold");
    }
    $(document).ready(function() {
        var menu = document.getElementsByClassName("menu");
        for (i = 0; i < menu.length; i++) {
            menu[i].classList.add("negro");

        }
        
    });


    $(document).on("click", ".btn_sumar_item", function() {
        var cantidad = $("#" + $(this).data("id")).val();
        cantidad++;
        var totalProducto = parseFloat($("#" + $(this).data("price")).text());
        totalProducto = totalProducto * cantidad;
        $("#" + $(this).data("total")).text(totalProducto.toFixed(2)+"€");
        $("#" + $(this).data("id")).val(cantidad);
        calcularTotalCarrito();
    });
    $(document).on("click", ".btn_restar_item", function() {
        var cantidad = $("#" + $(this).data("id")).val();
        if (cantidad != 0) {
            cantidad--;
            var totalProducto = parseFloat($("#" + $(this).data("price")).text());
            totalProducto = totalProducto * cantidad;
            $("#" + $(this).data("total")).text(totalProducto.toFixed(2)+"€");
            $("#" + $(this).data("id")).val(cantidad);
            calcularTotalCarrito();
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