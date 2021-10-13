<style>
    .sticky {
        position: fixed;
        top: 0;
        width: 100%;
        z-index:10;
        background-color: white;
        transition: 0.5s ease-in-out;
    }

    .absolute {
        position: absolute;
        width: 100%;
        background-color: rgba(0, 0, 0, 0);
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
        color: #444;

    }

    #logo {
        transition: 0.5s ease-in-out;
        width: 10rem;
        height: auto;
        margin-left: -1rem;
        margin-right: 2rem;
        filter: drop-shadow(-6px 6px 5px rgba(0, 0, 0, 0.4));
    }
</style>
<div>


    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding-left:10rem;
padding-right:10rem;
height:2rem;
z-index:10;
">
        <a class="navbar-brand" href="#" style="font-size:1rem">MenuIdioma</a>
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
    </nav>
    <nav class="navbar navbar-expand-lg absolute" id="header" style="padding-left:10rem;padding-right:10rem;z-index:10;
width: 100%;">
        <img id="logo" src="{{asset('/storage/logoArteseda.png')}}">

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link menu blanco" href="/">Home <span class="sr-only">(current)</span></a>
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

                <a class="btn  btn-floating m-1 menu blanco" href="#!" role="button" style="font-weight:100px;"> <i class="fas fa-search"></i></a>




            </form>
        </div>
    </nav>
</div>