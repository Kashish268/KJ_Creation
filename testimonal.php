<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>KJ Creations</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <!-- Favicons -->
  <link href="users/img/kj_creation.png" rel="icon">
  <link href="users/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link href="users/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS -->
  <link href="users/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="users/lib/animate/animate.min.css" rel="stylesheet">
  <link href="users/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="users/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="users/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- Main Stylesheet -->
  <link href="users/css/user2.css" rel="stylesheet">

  <style>
    :root {
      --primary-orange: rgb(255, 103, 31);
      --primary-green: rgb(9, 46, 32);
      --light-bg: #f8f9fa;
    }

    html {
      font-size: 62.5%;
      scroll-behavior: smooth;
    }

    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }

    *:focus {
      outline: none;
      box-shadow: 0 0 0 0.4rem rgba(255, 103, 31, 0.3);
    }

    .testimonial {
      padding: 3rem;
      border-radius: 11px;
      background-color: var(--primary-green);
      color: white;
      display: grid;
      grid-template-columns: 0.5fr 0.7fr;
      align-items: center;
      justify-content: center;
      width: 85%;
      margin: 10rem auto;
      position: relative;
      box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    }

    .carousel-img {
      height: 22rem;
      width: 25rem;
      border-radius: 50%;
      object-fit: cover;
      box-shadow: 0 5px 15px rgba(0,0,0,0.3);
      transition: all 0.3s ease;
    }

    .carousel-img:hover {
      transform: scale(1.05);
    }

    .testimonial-img {
      margin-bottom: 1.2rem;
    }

    .testimonial-text {
      font-size: 1.8rem;
      line-height: 1.8;
      margin-bottom: 1.6rem;
      text-align: justify;
      color: white;
    }

    .customer-name {
      font-size: 1.6rem;
      color: var(--primary-orange);
      font-weight: bold;
    }

    .testimonial-job {
      font-size: 1.4rem;
      color: #ccc;
    }

    .btn-carousel {
      position: absolute;
      border: none;
      height: 4rem;
      width: 4rem;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      background: var(--primary-orange);
      color: white;
      transition: all 0.3s;
      box-shadow: 0 2px 10px rgba(0,0,0,0.2);
    }

    .btn-carousel:hover {
      background: white;
      color: var(--primary-orange);
      transform: scale(1.1);
    }

    .carousel-icon {
      font-size: 2.4rem;
    }

    .btn-left {
      left: 0;
      top: 50%;
      transform: translate(-50%, -50%);
    }

    .btn-right {
      right: 0;
      top: 50%;
      transform: translate(50%, -50%);
    }

    .dots {
      position: absolute;
      top: 100%;
      display: flex;
      gap: 1.5rem;
      transform: translate(300%, 30%);
    }

    .btn-dot {
      height: 1.5rem;
      width: 1.5rem;
      border-radius: 50%;
      background-color: #ccc;
      border: none;
      cursor: pointer;
      transition: all 0.3s;
    }

    .btn-dot-active {
      background-color: var(--primary-orange);
      transform: scale(1.2);
    }

    /* Media Queries */
    @media (min-width: 1616px) {
      .testimonial {
        min-width: 150rem;
        padding-left: 15rem;
      }
      
      .carousel-img {
        height: 30rem;
        width: 30rem;
      }

      .testimonial-text {
        font-size: 2.2rem;
      }

      .customer-name {
        font-size: 2.0rem;
      }

      .testimonial-job {
        font-size: 1.8rem;
      }
    }

    @media (min-width: 1025px) {
      .testimonial {
        min-width: 100rem;
        padding-left: 15rem;
      }

      .testimonial-text {
        font-size: 2.0rem;
      }

      .customer-name {
        font-size: 1.8rem;
      }

      .testimonial-job {
        font-size: 1.6rem;
      }
    }

    @media (max-width: 862px) {
      .testimonial {
        width: 60rem;
        grid-template-columns: 1fr;
        grid-template-rows: auto 1fr;
        padding: 3rem;
      }
      
      .carousel-img {
        width: 25rem;
        height: 25rem;
        margin-bottom: 2rem;
        justify-self: center;
      }

      .dots {
        transform: translate(0, 25%);
      }
    }

    @media (max-width: 640px) {
      .testimonial {
        width: 50rem;
      }
      
      .carousel-img {
        width: 22rem;
        height: 22rem;
      }
    }

    @media (max-width: 585px) {
      .testimonial {
        width: 45rem;
      }
      
      .carousel-img {
        width: 20rem;
        height: 20rem;
      }
    }

    @media (max-width: 550px) {
      .testimonial {
        width: 40rem;
      }
      
      .carousel-img {
        width: 18rem;
        height: 18rem;
      }
    }

    @media (max-width: 498px) {
      .testimonial {
        width: 35rem;
        padding: 2rem;
      }
      
      .carousel-img {
        width: 16rem;
        height: 16rem;
      }
    }

    @media (max-width: 400px) {
      .testimonial {
        width: 30rem;
      }
      
      .carousel-img {
        width: 14rem;
        height: 14rem;
      }
    }

    @media (max-width: 354px) {
      .testimonial {
        width: 25rem;
      }
      
      .carousel-img {
        width: 12rem;
        height: 12rem;
      }
    }

    @media (max-width: 300px) {
      .testimonial {
        width: 22rem;
      }
      
      .carousel-img {
        width: 10rem;
        height: 10rem;
      }
    }
  </style>
</head>
<body>
  <main id="main">
    <figure class="testimonial carousel-1">
      <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&q=85&fm=jpg&crop=entropy&cs=srgb&dl=linkedin-sales-solutions-pAtA8xe_iVM-unsplash.jpg" 
           alt="Customer testimonial" 
           id="testimonial-img" class="carousel-img testimonial-img">

      <blockquote>
        <p class="testimonial-text" id="testimonial-text"></p>
        <p class="customer-name testimonial-name">&mdash;<span id="testimonial-name"></span></p>
        <p class="testimonial-job" id="testimonial-job"></p>
      </blockquote>  

      <button class="btn-carousel btn-left">
        <ion-icon name="chevron-back-outline" class="carousel-icon"></ion-icon>
      </button>

      <button class="btn-carousel btn-right">
        <ion-icon name="chevron-forward-outline" class="carousel-icon"></ion-icon>
      </button>

      <div class="dots">
        <button class="btn-dot btn-dot-active">&nbsp;</button>
        <button class="btn-dot">&nbsp;</button>
        <button class="btn-dot">&nbsp;</button>
        <button class="btn-dot">&nbsp;</button>
      </div>
    </figure>
  </main>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="users/lib/jquery/jquery.min.js"></script>
  <script src="users/lib/jquery/jquery-migrate.min.js"></script>
  <script src="users/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="users/lib/easing/easing.min.js"></script>
  <script src="users/lib/superfish/hoverIntent.js"></script>
  <script src="users/lib/superfish/superfish.min.js"></script>
  <script src="users/lib/wow/wow.min.js"></script>
  <script src="users/lib/waypoints/waypoints.min.js"></script>
  <script src="users/lib/counterup/counterup.min.js"></script>
  <script src="users/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="users/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="users/lib/lightbox/js/lightbox.min.js"></script>
  <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="users/lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  
  <script>
    "use strict";

    const testimonials = [
      {
        name: "Rahul Sharma", 
        work: "Corporate Client at Infosys",
        photoUrl: "https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixlib=rb-4.0.3&q=85&fm=jpg&crop=entropy&cs=srgb&dl=ali-morshedlou-WMD64tMfc4k-unsplash.jpg",
        text: "KJ Creations transformed our corporate gifting experience! Their premium customized gifts helped us strengthen client relationships. The attention to detail and quality craftsmanship is exceptional."
      },
      {
        name: "Priya Patel", 
        work: "Event Manager at Wizcraft",
        photoUrl: "https://images.unsplash.com/photo-1504791635568-fa4993808e0a?ixlib=rb-4.0.3&q=85&fm=jpg&crop=entropy&cs=srgb&dl=royal-anwar-u5T5b3lNYw8-unsplash.jpg",
        text: "For our annual conference, KJ Creations provided beautiful branded merchandise that impressed all attendees. Their creative designs and timely delivery made our event memorable."
      },
      {
        name: "Arjun Mehta", 
        work: "HR Director at TechMahindra",
        photoUrl: "https://images.unsplash.com/photo-1534030347209-467a5b0ad3e6?ixlib=rb-4.0.3&q=85&fm=jpg&crop=entropy&cs=srgb&dl=gregory-hayes-h5cd51KXmRQ-unsplash.jpg",
        text: "Employee recognition became special with KJ Creations' personalized gift solutions. Their team understood our requirements perfectly and delivered innovative products that our employees cherish."
      },
      {
        name: "Neha Gupta", 
        work: "Marketing Head at HDFC Bank",
        photoUrl: "https://images.unsplash.com/photo-1543132220-4bf3de6e10ae?ixlib=rb-4.0.3&q=85&fm=jpg&crop=entropy&cs=srgb&dl=redd-f-v6771a4avV4-unsplash.jpg",
        text: "KJ Creations has been our go-to partner for premium corporate gifts. Their ability to blend creativity with functionality while maintaining the highest quality standards is remarkable."
      }
    ];

    const imgEl = document.querySelector("#testimonial-img");
    const workEl = document.querySelector(".testimonial-job");
    const textEl = document.querySelector(".testimonial-text");
    const usernameEl = document.querySelector("#testimonial-name");
    const btnRight = document.querySelector('.btn-right');
    const btnLeft = document.querySelector('.btn-left');
    const carouselBtn = document.querySelectorAll('.btn-dot');
    let idx = 0;
    let intervalId;

    const updateTestimonial = () => {
      const { name, work, photoUrl, text } = testimonials[idx];
      imgEl.src = photoUrl;
      textEl.innerText = text;
      usernameEl.innerText = name;
      workEl.innerText = work;
      
      carouselBtn.forEach(btn => btn.classList.remove('btn-dot-active'));
      carouselBtn[idx].classList.add('btn-dot-active');
    }

    const stopSlideshow = () => clearInterval(intervalId);

    const startSlideshow = () => intervalId = setInterval(nextTestimonial, 5000);

    const nextTestimonial = () => {
      idx = (idx + 1) % testimonials.length;
      updateTestimonial();
      resetSlideshow();
    }
    
    const previousTestimonial = () => {
      idx = (idx - 1 + testimonials.length) % testimonials.length;
      updateTestimonial();
      resetSlideshow();
    }

    const resetSlideshow = () => {
      stopSlideshow();
      startSlideshow();
    }

    btnRight.addEventListener('click', nextTestimonial);
    btnLeft.addEventListener('click', previousTestimonial);

    carouselBtn.forEach((btn, i) => {
      btn.addEventListener('click', function() {
        idx = i;
        updateTestimonial();
        resetSlideshow();
      });
    });

    // Initialize
    updateTestimonial();
    startSlideshow();
  </script>
</body>
</html>