<!-- Footer -->
<style>
    #footer:before {
        content: "";
        background-image:url({{url('/storage/seda.jpg')}});
        -webkit-transform: scaleX(-1);
  transform: scaleX(-1);
    background-position:10%;
    position: absolute;
    top: 0;
    left: 0;
    background-attachment: fixed;
    z-index: 0;
    height: 100%;
    width: 100%;
    background-color: #bb1654;
    opacity: 0.2;
    transition: opacity 0.4s ease-in-out;

    }

    #footer {
        position: relative;
        background-color: #580d29;
        

    }



    .footerLinks {
        color: white !important;
    }

    .text-uppercase {
        color: white;
        font-weight: bold;
        margin-bottom: 2rem;
    }

  

    #logoFooter {
        transition: 0.5s ease-in-out;
        width: 17vh;
        height: auto;
        margin-left: -1rem;
        margin-right: 2rem;
        filter: drop-shadow(-6px 6px 5px rgba(0, 0, 0, 0.4));
    }

    .sociales,
    .divLogo {

  
        display: flex;

 
        text-align: center;
    }
</style>



<footer class="" id="footer" style=>
    <!-- Grid container -->
    <div class="container" style="padding-top:7em;padding-bottom:7rem">
        <div class="row">
            <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">Products</h5>

                <ul class="list-unstyled mb-0">
                    <li>
                        <a class="footerLinks" href="#!">Link 1</a>
                    </li>
                    <li>
                        <a class="footerLinks" href="#!">Link 2</a>
                    </li>
                    <li>
                        <a class="footerLinks" href="#!">Link 3</a>
                    </li>
                    <li>
                        <a class="footerLinks" href="#!">Link 4</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">Features</h5>

                <ul class="list-unstyled mb-0">
                    <li>
                        <a class="footerLinks" href="#!">Link 1</a>
                    </li>
                    <li>
                        <a class="footerLinks" href="#!">Link 2</a>
                    </li>
                    <li>
                        <a class="footerLinks" href="#!">Link 3</a>
                    </li>
                    <li>
                        <a class="footerLinks" href="#!">Link 4</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">Get Started</h5>

                <ul class="list-unstyled mb-0">
                    <li>
                        <a class="footerLinks" href="#!">Link 1</a>
                    </li>
                    <li>
                        <a class="footerLinks" href="#!">Link 2</a>
                    </li>
                    <li>
                        <a class="footerLinks" href="#!">Link 3</a>
                    </li>
                    <li>
                        <a class="footerLinks" href="#!">Link 4</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">About</h5>

                <ul class="list-unstyled mb-0">
                    <li>
                        <a class="footerLinks" href="#!">Link 1</a>
                    </li>
                    <li>
                        <a class="footerLinks" href="#!">Link 2</a>
                    </li>
                    <li>
                        <a class="footerLinks" href="#!" style="">Link 3</a>
                    </li>
                    <li>
                        <a class="footerLinks" href="#!">Link 4</a>
                    </li>
                </ul>

            </div>
            <div class="col-lg-4  col-md-6 mb-4 mb-md-0">
                <div class="sociales">


                    <!-- Facebook -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

                    <!-- Twitter -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>

        

                    <!-- Instagram -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>

                    <!-- Linkedin -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>

                </div>
                <div class="divLogo">
                    <img id="logoFooter" src="{{asset('/storage/blanco2.png')}}">
                </div>

            </div>
        </div>
    </div>


    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);color:white">
        © All rights reserved. 2021:
        <a href="https://ibermedia.com/">Ibermedia</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->