<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Illustration.AI</title>

  <!-- Bootstrap css cdn -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <!-- swiper css cdn -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <!-- Bootstrap Icons CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">

<style>
 
*{
    margin: 0;
    padding: 0;
}
body{
    font-family: "Manrope", sans-serif;

}


 /* navbar styling started here */
.navbar{
    box-shadow: 0 1px 3px rgba(134,134,134,0.12), 0 1px 2px rgba(134,134,134,0.12);
}
.navbar-brand{
    font-size: 1.5rem;
    color: #000000;
}
.navbar-brand strong{
    font-weight: bold;
    font-size: 1.5rem;
    font-weight: 800;
  }
  .navbar-nav .nav-link {
    margin-right: 15px;
    color: #171313;
    font-size: 1rem;
  }

  .dropdown-item {
    font-size: 0.9rem;
    font-weight: 400;
    color: #464646;
  }
  .dropdown-item img{
    margin-right: 5px;
  }


  .btn-deploy{
    background:  #E5365C;
    color: #FFFFFF;
    padding: 10px 35px;
  }
  .btn-deploy:hover{
    border: 2px solid  #E5365C;
    padding: 10px 35px;
  }
  .btn-stop{
    border: 2px solid  #E5365C;
    padding: 10px 35px;
    color: #E5365C;
  }
  .btn-stop:hover{
    background:  #E5365C;
    color: #FFFFFF;
    padding: 10px 35px;
  }

  .btn-link {
    font-size: 1.2rem;
    padding: 0;
    rotate: 90deg;
    margin-top: 5px;
    margin-left: 5px;
}



.btn-link.dots::after {
    content: '\2022 \2022 \2022'; /* Unicode for dots */
    font-size: 20px;
    display: inline-block;
    vertical-align: middle;
    color: black;
  }
  .dropdown-menu {
    min-width: 100px;
  }


  /* navbar styling ended here */

  /*hero section styling started here */

  .hero-section{
    display: flex;
    flex-direction: column;
   
    gap: 20px;
    justify-content: space-between;
  }

  .hero-heading{
    font-size: 2rem;
    color: #171313;
    font-weight: 700;
  }

  .search-box{
    display: flex;
    gap: 30px;
    padding: 0 10px;
    
  }

  .search-box input{
    flex: 1;
    padding: 10px 20px;
    border: 1px solid #DFDFDF;
    outline: none;
    background: #FFFFFF;
    border-radius: 5px;

  }

  .search-box button{
    display: block;
    padding: 10px 50px;
    border-radius: 5px;
    background: #E5365C;
    color: #f4f4f4;
    border: none;
  }
  .search-box button:hover{
    border: 2px solid  #E5365C;
    background: #f4f4f4;
    color: #000000;

    
  }

  input ::placeholder{
    color: #464646;
  }
  

  .progress-steps {
    margin-bottom: 20px;
    font-size: 14px;
    color: #313131;
    text-align: center;
  }



  .swiper {
    width: 100%;
    height: 100%;
    /* background: #EAEAEA; */
    
    
}

  .swiper-slide {
    
    text-align: center;
    font-size: 18px;
    background: #fff !important;
    display: flex;
    padding: 0px !important;
    border-radius: 30px !important;
    justify-content: center;
    align-items: center;
  }

  .swiper-slide img {
    
    display: block;
    width: 100%;
    height: auto;
    object-fit: cover;
    /* margin -bottom: 20px; */
  }

  .custom-pagination .swiper-pagination-bullet {
    width: 12px;
    height: 12px;
    background-color: #868686;
    opacity: 1;
    margin: 0 5px;
    border-radius: 50%;
  }

  .custom-pagination .swiper-pagination-bullet-active {
    background-color: #E5365c;
    width: 20px;
    border-radius: 20px;
  }
 
  /*hero section styling ended here */



  .swiper-button-prev:after, .swiper-rtl .swiper-button-next:after {
    content: 'prev';
    display: none ;
}


.swiper-button-next:after, .swiper-rtl .swiper-button-prev:after {
  content: 'next';
display: none;
}


  /* Responsive Design */
/* Tablet - Medium screen sizes */
@media (max-width: 768px) {
    .hero-section {
        padding: 0 15px;
        gap: 15px;
    }

    .hero-heading {
        font-size: 1.8rem;
    }

    .search-box {
        flex-direction: column;
        gap: 10px;
    }

    .search-box input {
        width: 100%;
        padding: 10px;
    }

    .search-box button {
        padding: 10px 20px;
        width: 100%;
    }

    .swiper-slide img {
        width: 80%;
        height: auto;
    }

    .progress-steps {
        font-size: 12px;
    }
}

/* Mobile - Small screen sizes */
@media (max-width: 576px) {
    .hero-heading {
        font-size: 1.5rem;
    }

    .search-box {
        gap: 5px;
    }

    .search-box input,
    .search-box button {
        width: 100%;
        padding: 8px;
    }

    .progress-steps {
        font-size: 10px;
    }

    .swiper-slide img {
        width: 100%;
        height: auto;
    }
}
</style>
</head>

<body>

  <!-- navbar started here -->
  <nav class="navbar navbar-expand-lg ">
    <div class="container px-lg-5 py-1">
      <a class="navbar-brand" href="#">
        <strong>Illustration.</strong><span>AI</span>
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Downloads
            </a>
            <ul class="dropdown-menu">

              <li><a class="dropdown-item" href="#"><img src="assets/dropdown images/mdi_apple.svg" alt=""> App
                  store</a></li>
              <!-- <li><hr class="dropdown-divider"></li> -->
              <li><a class="dropdown-item" href="#"><img src="assets/dropdown images/logos_google-play-icon.svg" alt="">
                  App store</a></li>
              <li><a class="dropdown-item" href="#"><img src="assets/dropdown images/simple-icons_huawei.svg" alt="">
                  App Gallery</a></li>
              <li><a class="dropdown-item" href="#"><img src="assets/dropdown images/foundation_social-amazon.svg"
                    alt=""> App store</a></li>
              <li><a class="dropdown-item" href="#"><img src="assets/dropdown images/ri_meta-fill.svg" alt=""> Meta
                  Guest Store</a></li>
              <li><a class="dropdown-item" href="#"><img src="assets/dropdown images/tabler_device-vision-pro.svg"
                    alt=""> Apple vision pro</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('fourthpages')}}">Generate illustration</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <a href="#" class="btn btn-free-trial  me-2 px-4">  
            <svg width="20" height="14"   viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M2 12L0 1L5.5 6L9 0L12.5 6L18 1L16 12H2ZM16 15C16 15.6 15.6 16 15 16H3C2.4 16 2 15.6 2 15V14H16V15Z" fill="white"/>
              </svg>
            Free trial</a>
          <a href="#" class="btn btn-outline btn-login px-5">Login</a>
        </form>
      </div>
    </div>
  </nav>
  <!-- navbar ended here -->


  <!-- hero section started here -->
  <div class=" hero-section">

    <div class="container">
      <div class="row">
        <!-- Left Content -->
        <div class="col-lg-6">
          <div class="hero-content ">
            <h1>No.1 Platform for learning and <span style="color: #E5365C; font-weight: 700;">Practicing</span> drawing
              skills.</h1>
            <p>Lorem ipsum dolor sit amet consectetur. In suscipit quis consectetur libero quam mi morbi nibh. Sed
              dictum at mauris morbi nullam massa. </p>

              <a href="#" class="btn btn-free-trial  me-2 px-5">  
                
                Get started</a>
            
          </div>
        </div>
        <div class="col-lg-6">
          <div class="swiper ">
            <div class="mySwiper pb-5">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><img src="assets/dropdown images/image 2.svg" alt=""></div>
              <div class="swiper-slide"><img src="assets/dropdown images/image 2.svg" alt=""></div>
              <div class="swiper-slide"><img src="assets/dropdown images/image 2.svg" alt=""></div>
              <div class="swiper-slide"><img src="assets/dropdown images/image 2.svg" alt=""></div>

            </div>

          </div>
            <div class="custom-pagination swiper-pagination"></div>
          </div>
        </div>
      </div>
    </div>




  </div>

  <!-- ended here hero section -->


 

  <div class="space-container">

    <!--#############> Slider Section start <############  -->

    <div class=" pt-md-5 pt-2 ">
      <h2 class="carosoul-h2">Step by step Drawing lessons</h2>
      <p class="carosoul-p">Try out our 500+ drawing lessons and kick start your drawing journey.</p>
  
      <div class="">
        <div class="slider">
          <div class="p-2 d-flex justify-content-center"> <button class="carosoul-btn">Featured (9)</button></div>
          <div class="p-2 d-flex justify-content-center"> <button class="carosoul-btn">Marvel (146)</button></div>
          <div class="p-2 d-flex justify-content-center"> <button class="carosoul-btn">X-men (13)</button></div>
          <div class="p-2 d-flex justify-content-center"> <button class="carosoul-btn">Flower (15)</button></div>
          <div class="p-2 d-flex justify-content-center"> <button class="carosoul-btn">Cats (10)</button></div>
          <div class="p-2 d-flex justify-content-center"> <button class="carosoul-btn">Doodle (20)</button></div>
          <div class="p-2 d-flex justify-content-center"> <button class="carosoul-btn">Kawaii (20)</button></div>
          <div class="p-2 d-flex justify-content-center"> <button class="carosoul-btn">Intro to digital art (36)</button>
          </div>
          <div class="p-2 d-flex justify-content-center"> <button class="carosoul-btn">Anatomy (17)</button></div>
          <div class="p-2 d-flex justify-content-center"> <button class="carosoul-btn">Tattoos (50)</button></div>
          <div class="p-2 d-flex justify-content-center"> <button class="carosoul-btn">Fun Drawing Tricks (46)</button>
          </div>
          <div class="p-2 d-flex justify-content-center"> <button class="carosoul-btn">Languages (246)</button></div>
          <div class="p-2 d-flex justify-content-center"> <button class="carosoul-btn">Fashion (30)</button></div>
  
        </div>
  
      </div>
  
    </div>
    <!--#############> Slider Section End   <############-->

    
    <div class="row line "></div>
  </div>
  <div class="container-fluid space-container footer ">
    <div class="row justify-content-evenly py-5">
      <div class="col-md-6 col-lg-3">
        <h5 class="footer-h5">
          Discover
        </h5>
        <ul class="footer-list">
          <li><a href="#">Blog</a></li>
          <li><a href="#">Handbook</a></li>
          <li><a href="#">Content</a></li>
          <li><a href="#">Education</a></li>
          <li><a href="#">Tools</a></li>
        </ul>
      </div>
      <div class="col-md-6 col-lg-3">
        <h5 class="footer-h5">
          Download
        </h5>
        <ul class="footer-list">
          <li><a href="#">App store</a></li>
          <li><a href="#">Play store</a></li>
          <li><a href="#">Huawei</a></li>
          <li><a href="#">Amazon</a></li>
          <li><a href="#">Meta quest store</a></li>
        </ul>
      </div>
      <div class="col-md-6 col-lg-3">
        <h5 class="footer-h5">
          Support
        </h5>
        <ul class="footer-list">
          <li><a href="#">Press kit</a></li>
          <li><a href="#">Support</a></li>
          <li><a href="#">Terms & condition</a></li>
          <li><a href="#">Privacy poicy</a></li>
        </ul>
      </div>
      <div class="col-md-6 col-lg-3">
        <h5 class="footer-h5">
          Contact us
        </h5>
        <a href="mailto:abced@gmail.com" class="footer-mail">abced@gmail.com</a>
        <div class="media-icon pt-2" >
          <a href="#"><img src="./assets/footer-images/ic_baseline-facebook.png" alt=""> </a>
          <a href="#"><img src="./assets/footer-images/prime_twitter.png" alt=""> </a>
          <a href="#"><img src="./assets/footer-images/mdi_pinterest.png" alt=""> </i></a>
          <a href="#"><img src="./assets/footer-images/mdi_youtube.png" alt=""></a>
          <a href="#"> <img src="./assets/footer-images/ic_outline-discord.png" alt=""></a>
          <a href="#"><img src="./assets/footer-images/ic_round-tiktok.png" alt=""> </i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid copy">
    <div class="row  ">
      <div class="col-12 copyright ">
        <p>Copyright, 2024 All right reserved</p>
      </div>
    </div>
  </div>





 <!--##################> Script Links <#####################  -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script src="./script.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
    crossorigin="anonymous"></script>

  

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="./assets/js/script.js"></script>
     <!--##################> Script Links <#####################  -->

</body>

</html>