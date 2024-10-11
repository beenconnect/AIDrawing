<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AI Drawing </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  
  <link rel="stylesheet" href="css/fourth-style.css">
  <link rel="stylesheet" href="./css/styles.css">
  
  
  
  <style>
      /* CSS to hide the swiper initially */
.swiper-container {
    display: none;
}

/* Loading spinner */
.loader {
    display: none; /* Hide it initially */
    border: 6px solid #f3f3f3; /* Light grey */
    border-top: 6px solid #3498db; /* Blue */
    border-radius: 50%;
    width: 50px;
    height: 50px;
    animation: spin 1s linear infinite;
    margin: 20px auto;
}

/* Animation for spinner */
@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}


/*Slider */
.swiper{
    overflow:unset !important;
}

.slick-next {
    right: -55px;
}
.slick-prev {
    left: -55px;
}
@media(min-width:768px)
{
    .slick-next {
    right: -90px;
}
.slick-prev {
    left: -90px;
}
}
@media(max-width:768px)
{
     .slick-prev i, .slick-next i {
    font-size: 25px;
   
}
}



/*Slider */
  </style>
</head>
<body>


<nav class="navbar navbar-expand-lg  " >
    <div class="container px-lg-5 py-1">
      <a class="navbar-brand" href="#">
        <strong>Illustration.</strong><span>AI</span>
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          
             <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Downloads
            </a>
            <ul class="dropdown-menu">
              
              <li><a class="dropdown-item" href="#"><img src="assets/dropdown images/mdi_apple.svg" alt=""> App store</a></li>
              <!-- <li><hr class="dropdown-divider"></li> -->
              <li><a class="dropdown-item" href="#"><img src="assets/dropdown images/logos_google-play-icon.svg" alt=""> App store</a></li>
              <li><a class="dropdown-item" href="#"><img src="assets/dropdown images/simple-icons_huawei.svg" alt=""> App Gallery</a></li>
              <li><a class="dropdown-item" href="#"><img src="assets/dropdown images/foundation_social-amazon.svg" alt=""> App store</a></li>
              <li><a class="dropdown-item" href="#"><img src="assets/dropdown images/ri_meta-fill.svg" alt=""> Meta Guest Store</a></li>
              <li><a class="dropdown-item" href="#"><img src="assets/dropdown images/tabler_device-vision-pro.svg" alt=""> Apple vision pro</a></li>
             </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Generate illustration</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
            <button class="btn btn-outline me-2 btn-stop">Stop</button>
            <button class="btn btn-deploy "  >Deploy</button>
            
            
            <div class="dropdown">
                <button class="btn btn-link dots" id="dropdownMenuDots" data-bs-toggle="dropdown" aria-expanded="false">
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuDots">
                  <li><a class="dropdown-item" href="#">Link 1</a></li>
                  <li><a class="dropdown-item" href="#">Link 2</a></li>
                  <li><a class="dropdown-item" href="#">Link 3</a></li>
                </ul>
              </div>
        </form>
      </div>
    </div>
  </nav>
 <!-- nav ended here -->
  <!-- hero-section started fro there -->

  <section >
    <div class="hero-section  py-3">
      <div class="container">
      <div class="hero-heading">
        <h3>How can i assist you?</h3> 
      </div>

      <!--<div class="search-box">-->
      <!--  <input type="text" placeholder="Generate a handsome young boy illustration with aggressive reaction">-->
      <!--  <button type="submit" >Search</button>-->
      <!--</div>-->

    <div class="search-box">
  <input type="text" id="searchInput" placeholder="Generate a handsome young boy illustration with aggressive reaction">
  <button type="submit">Search</button>
</div>


    </div>

     <div class="container pb-5">
      <div class="row">
        <div class="col-1 col-md-2"></div>
        <div class="col-10 col-md-8">
            <div class="swiper  pb-4">
            <!-- Loader -->
<div class="loader"></div>


<div class="swiper-container">
  <div class="progress-steps pt-5 mb-0">
        Steps: <span id="currentStep">1</span>/<span id="totalSteps">1</span>
      </div>
<!-- Swiper Slider (Initially Hidden) -->
<div class="swiper mySwiper ">
    <div class="swiper-wrapper">
        <!-- Slides will be injected here -->
    </div>
    <div class="swiper-button-next">
        <button type="button" class="slick-next slick-arrow"
     
        > <i class="bi bi-chevron-right"></i></button>
    </div>
    <div class="swiper-button-prev">
        <button type="button" class="slick-prev slick-arrow"
      
        > <i class="bi bi-chevron-left"></i></button>
    </div>
    <div class="custom-pagination swiper-pagination"></div>
</div>
</div> 


  </div>
        </div>
        <div class="col-1 col-md-2"></div>

      </div>
     </div>
    </div>
  </section>


  <!-- Hero Ended here -->



  <!-- Footer Section Start  -->

  <div class="row line mt-0 "></div>
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

  <!-- Footer Section End  -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

 <!-- Swiper JS -->
 <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

 <!-- Initialize Swiper -->
<script>
// Get elements for interaction
const searchButton = document.querySelector('.search-box button');
const searchInput = document.querySelector('.search-box input');
const swiperContainer = document.querySelector('.swiper-container');
const loader = document.querySelector('.loader');

// Add event listener for search button click
searchButton.addEventListener('click', async function () {
    const query = searchInput.value; // Get user input

    // Show the loader and hide the slider
    loader.style.display = 'block';
    swiperContainer.style.display = 'none';

    try {
        // Fetch API data
        const response = await fetch('https://rentaghr.com/', {
            method: 'POST', // Assuming POST method
            headers: {
                'Content-Type': 'application/json',
                // 'Authorization': 'Bearer YOUR_API_KEY' // Add API Key if needed
            },
            body: JSON.stringify({ 'user_query': query }) // Adjust based on API structure
        });

        if (!response.ok) {
            throw new Error('Network response was not ok');
        }

        // Parse JSON response
        const data = await response.json();
        document.getElementById('totalSteps').innerHTML=data.images.length
        // Get images from the API response
        const images = data.images.map((value, index) => { 
            return `
                <div class="swiper-slide" role="group" aria-label="${index + 1} / ${data.images.length}" style="width: 464px;" data-swiper-slide-index="${index}">
                    <img src="data:image/jpeg;base64,${value}" alt="Image ${index + 1}">
                </div>`;
        }).join('');

        // Inject images into Swiper wrapper
        const swiperWrapper = document.querySelector('.swiper-wrapper');
        swiperWrapper.innerHTML = images;

        // Update Swiper instance to reflect new slides
        swiper.update();
        
        swiper.slideTo(0);

        // After receiving data, hide the loader and show the slider
        loader.style.display = 'none';
        swiperContainer.style.display = 'block';
        
        swiper.slideTo(0);

    } catch (error) {
        console.error('Error fetching the data:', error);

        // In case of error, hide the loader
        loader.style.display = 'none';
    }
    
    swiper.slideTo(0);
});

// Initialize Swiper
const swiper = new Swiper(".mySwiper", {
    cssMode: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    mousewheel: true,
    keyboard: true,
});


swiper.on('slideChange', function () {
    document.getElementById('currentStep').innerHTML = swiper.activeIndex + 1;  // Slides start from 0, so add 1
});
</script>



<script>
  // Get the input field
  var input = document.getElementById("searchInput");

  // Execute a function when the user presses a key on the keyboard
  input.addEventListener("keypress", function(event) {
    // If the user presses the "Enter" key
    if (event.key === "Enter") {
      // Prevent the default behavior (form submission)
      event.preventDefault();
      // Trigger the button click
      document.querySelector(".search-box button").click();
    }
  });
</script>a

 
</body>
</html>
