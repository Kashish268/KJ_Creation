<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>KJ Creations Testimonials</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <!-- Favicons -->
  <link href="users/img/kj_creation.png" rel="icon">
  <link href="users/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link href="users/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <style>
  /* Main wrapper that scopes all our styles */
  .kjc-testimonial-component {
    min-height: 100vh;
    font-family: 'Open Sans', sans-serif;
    padding: 20px;
    margin: 0;
  }
  
  .kjc-testimonial-component .kjc-container-fluid-bg {
    background: linear-gradient(135deg, rgba(255, 102, 31, 0.85), rgba(9, 46, 32, 0.9)), 
                url('users/myimg/about1.jpg');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    width: 100%;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .kjc-testimonial-component .kjc-testimonial-container {
    background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
    max-width: 900px;
    width: 100%;
    margin: 0 auto;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 15px 40px rgba(0,0,0,0.25);
    position: relative;
  }

  .kjc-testimonial-component .kjc-carousel-caption {
    position: initial;
    z-index: 10;
    padding: 5rem 8rem;
    color: #333;
    text-align: center;
    font-size: 1.2rem;
    font-style: italic;
    font-weight: 600;
    line-height: 2rem;
  }

  @media(max-width:767px) {
    .kjc-testimonial-component .kjc-carousel-caption {
        padding: 3rem 2rem;
        font-size: 0.9rem;
        line-height: 1.6rem;
    }
  }

  .kjc-testimonial-component .kjc-carousel-caption img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    margin-top: 1.5rem;
    border: 4px solid rgba(255, 102, 31, 0.3);
    object-fit: cover;
  }

  @media(max-width:767px) {
    .kjc-testimonial-component .kjc-carousel-caption img {
        width: 70px;
        height: 70px;
    }
  }

  .kjc-testimonial-component .kjc-image-caption {
    font-style: normal;
    font-size: 1.1rem;
    margin-top: 0.8rem;
    color: #333;
    font-weight: 700;
  }

  @media(max-width:767px) {
    .kjc-testimonial-component .kjc-image-caption {
        font-size: 0.9rem;
    }
  }

  .kjc-testimonial-component .kjc-carousel-control {
    width: 50px;
    height: 50px;
    background-color: rgba(9, 46, 32, 0.9);
    border-radius: 8px;
    top: 50%;
    transform: translateY(-50%);
    opacity: 1;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .kjc-testimonial-component .kjc-carousel-control-prev {
    left: 20px;
    justify-content: center;
  }

  .kjc-testimonial-component .kjc-carousel-control-next {
    right: 20px;
    justify-content: center;
  }

  .kjc-testimonial-component .kjc-carousel-control:hover {
    background-color: rgba(255, 102, 31, 0.9);
  }

  .kjc-testimonial-component .kjc-carousel-control i {
    background-color: transparent;
    padding: 0;
    font-size: 1.5rem;
    color: white;
  }

  .kjc-testimonial-component .kjc-section-header h3 {
    font-size: 2.5rem;
    color: #ffffff;
    text-transform: uppercase;
    text-align: center;
    font-weight: 700;
    position: relative;
    padding-bottom: 15px;
    margin-bottom: 30px;
    text-shadow: 1px 1px 3px rgba(0,0,0,0.3);
  }

  .kjc-testimonial-component .kjc-section-header h3::before {
    content: '';
    position: absolute;
    display: block;
    width: 120px;
    height: 2px;
    background: rgba(255,255,255,0.3);
    bottom: 1px;
    left: calc(50% - 60px);
  }

  .kjc-testimonial-component .kjc-section-header h3::after {
    content: '';
    position: absolute;
    display: block;
    width: 50px;
    height: 4px;
    background: rgba(9, 46, 32, 0.9);
    bottom: 0;
    left: calc(50% - 25px);
  }

  /* Scoped scrollbar styles */
  .kjc-testimonial-component::-webkit-scrollbar {
      width: 8px;
  }

  .kjc-testimonial-component::-webkit-scrollbar-track {
      background: #f1f1f1;
      border-radius: 10px;
  }

  .kjc-testimonial-component::-webkit-scrollbar-thumb {
      background: rgba(255, 102, 31, 0.7);
      border-radius: 10px;
  }

  .kjc-testimonial-component::-webkit-scrollbar-thumb:hover {
      background: rgba(255, 102, 31, 1);
  }
  </style>
</head>
<body>
<!-- Main wrapper div that scopes all our content -->
<div class="kjc-testimonial-component">
  <div class="container-fluid kjc-container-fluid-bg">
    <section id="kjc-testimonials" class="kjc-section-bg">
      <div class="container">
        <header class="kjc-section-header">
          <h3 class="kjc-section-title">Testimonials</h3>
        </header>
        
        <div id="kjc-testimonial-carousel" class="carousel slide kjc-testimonial-container" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="kjc-carousel-caption">
                        <p style="text-align: justify;">
 The handcrafted items from KJ Creation are truly beautiful! The attention to detail is amazing, and each piece feels unique. I purchased a decorative vase, and it's now the centerpiece of my home.                        </p> 
                        <img src="img/testimonial-1.jpg" alt="Nick Doe">
                        <div class="kjc-image-caption">Tanmay Sharma</div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="kjc-carousel-caption">
                        <p style="text-align: justify;">
        Absolutely in love with the handmade purses! The craftsmanship is top-notch, and the designs are both stylish and durable. I've received so many compliments on my purchase.
                        </p> 
                        <img src="img/testimonial-2.jpg" class="img-fluid" alt="Cromption Greves">
                        <div class="kjc-image-caption">Riya Verma</div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="kjc-carousel-caption">
                        <p style="text-align: justify;">
        I ordered some handcrafted wall hangings, and they exceeded my expectations. The quality, the colors, and the intricate work make them stand out. Definitely recommend KJ Creation!
                        </p> 
                        <img src="img/testimonial-3.jpg" class="img-fluid" alt="Harry Mon">
                        <div class="kjc-image-caption">Neha Patel</div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="kjc-carousel-caption">
                        <p style="text-align: justify;">
        Excellent customer service! I had a minor issue with my order, but the team at KJ Creation was very responsive and resolved it quickly. Great products and even better service!
                        </p> 
                        <img src="img/testimonial-4.jpg" class="img-fluid" alt="Harry Mon">
                        <div class="kjc-image-caption">Arjun Mehta</div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="kjc-carousel-caption">
                        <p style="text-align: justify;">
        KJ Creation's handicrafts make perfect gifts! I bought a few purses and jewelry boxes for friends, and they loved them. The packaging was also beautiful.
                        </p> 
                        <img src="img/testimonial-5.jpg" class="img-fluid" alt="Harry Mon">
                        <div class="kjc-image-caption">Priya Kapoor</div>
                    </div>
                </div>
            </div>
            
            <a class="carousel-control-prev kjc-carousel-control kjc-carousel-control-prev" href="#kjc-testimonial-carousel" data-slide="prev">
                <i class='fas fa-chevron-left'></i>
            </a>
            <a class="carousel-control-next kjc-carousel-control kjc-carousel-control-next" href="#kjc-testimonial-carousel" data-slide="next">
                <i class='fas fa-chevron-right'></i>
            </a>
        </div>
      </div>
    </section>
  </div>
</div>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>