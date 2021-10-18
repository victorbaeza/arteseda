<style>
    .sticky {
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 10;
        background-color: white;
        transition: 0.5s ease-in-out;
        box-shadow: 0rem 4px 1rem 2px #00000042;
    }

    .absolute {
        position: absolute;
        width: 100%;
        transition: 0.5s ease-in-out;
    }

    .blanco {
        color: white;
        transition: 0.5s ease-in-out;
    }

    .blanco:hover {
        color: black;
        transition: 0.5s ease-in-out;
    }

    .negro {
        color: #333;
        transition: 0.5s ease-in-out;
    }

    .menuSocial {
        color: white;

    }

    #logo {
        transition: 0.5s ease-in-out;
        width: 10rem;
        height: auto;
        margin-left: -1rem;

        filter: drop-shadow(-6px 6px 5px rgba(0, 0, 0, 0.4));
    }



    .header_search {
        width: 80%;
        border: none;
        border-bottom: 0.2pt solid white;
        font-style: oblique;
        font-size: 1.4rem;
        color: white;

    }

    .header_search_sticky {
        width: 80%;
        border: none;
        border-bottom: 0.2pt solid grey;
        font-style: oblique;
        font-size: 1.4rem;
        background: #ffffffd4;
    }

    .container_search {
        background-color: #ffffff00;
        max-width: 100%;


        padding: 2rem;

    }
    .navbar{
        padding:0 !important;
    }

    input[type=search] {
        background-color: #ffffff00;

    }

    .close_search {
        font-size: 2rem;
        cursor: pointer;
        float: right;
        color: white;
    }

    ::placeholder {
        /* Chrome, Firefox, Opera, Safari 10.1+ */
        color: white;
        opacity: 1;
        /* Firefox */
    }
    .header_search_sticky::-webkit-input-placeholder {
        color: black;
        opacity: 1;
}
.header_search::-webkit-input-placeholder {
        color: white;
        opacity: 1;
}
.menu{
    font-weight: 600;
}
.container_header,.container_busqueda{
    
    max-width: 75%;

}
</style>
<div>


    <nav class="navbar navbar-expand-lg " style="
height:2rem;
z-index:10;
background-color:#73364a!important;

">
        <div class="container container_header">


            <a class="navbar-brand" href="#" style="font-size:1rem;color:white">MenuIdioma</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                </ul>

                <a class="btn  btn-floating m-1 menuSocial " href="#!" role="button" style="font-weight:100px;font-size:0.9rem"><i class="fas fa-phone-square-alt"></i> 963728147 </a>
                <span> |</span>
                <!-- Facebook -->
                <a class="btn  btn-floating m-1 menuSocial " href="#!" role="button" style="font-weight:100px;"><i class="fab fa-facebook-square"></i></a>

                <!-- Instagram -->
                <a class="btn  btn-floating m-1 menuSocial " href="#!" role="button" style="font-weight:100px;"> <i class="fab fa-instagram"></i></a>
                <!-- Twitter -->
                <a class="btn  btn-floating m-1 menuSocial " href="#!" role="button" style="font-weight:100px;"><i class="fab fa-twitter-square"></i></a>
                <!-- linkedin -->
                <a class="btn  btn-floating m-1 menuSocial " href="#!" role="button" style="font-weight:100px;"><i class="fab fa-linkedin"></i></i></a>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg absolute" id="header" style="z-index:10;    padding: 0;
width: 100%;    display: flow-root;">

        <div class="container container_header">
            <img id="logo" src="{{asset('/storage/logo_tipo_blanco.png')}}">

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link menu blanco" href="/">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu blanco" href="/products">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu blanco" href="/products">Quienes Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu blanco" href="/consulta">Consulta</a>
                    </li>

                </ul>

                <form class="form-inline my-2 my-lg-0">


                    <!-- Facebook -->
                    <a class="btn  btn-floating m-1 menu blanco" href="#!" role="button" style="font-weight:100px;"><i class="far fa-user"></i></a>

                    <!-- Twitter -->
                    <a class="btn  btn-floating m-1 menu blanco" href="/cart/" role="button" style="font-weight:100px;"> <i class="fas fa-shopping-bag"></i></a>

                    <a class="btn  btn-floating m-1 menu blanco" id="search_btn" href="#!" role="button" style="font-weight:100px;"> <i class="fas fa-search"></i></a>




                </form>
            </div>
        </div>

        <div class="container container_search" style="display:none">
            <div class="container container_busqueda">
                <input class="header_search" type="search" placeholder="¿Qué estás buscando?">
                <span class="close_search">X</span>

                <hr class="mt-5">
            </div>
            <div class="container">

            </div>

        </div>

    </nav>


</div>

<script>
    $(document).on("click", "#search_btn", function() {
        $(".container_search").css("display", "block");
    });
    $(document).on("click", ".close_search", function() {
        $(".container_search").css("display", "none");
    });
</script>