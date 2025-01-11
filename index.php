<?php
include 'database/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>KJ CRREATION</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/kj_1.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <!-- <link href="users/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->

  <!-- Libraries CSS Files -->
  <link href="users/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="users/lib/animate/animate.min.css" rel="stylesheet">
  <link href="users/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="users/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="users/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="users/css/user2.css" rel="stylesheet">

</head>

<body  onload="myFunction()">
<div id="loading"></div> <!-- Preloader -->
  <div id="popUpMain" class="hidden">
    <div id="popup">
      <!-- Left Image Section -->
      <div id="popupImage">
        <img src="" alt="Popup Image" />
      </div>

      <!-- Right Content Section -->
      <div id="popupContent">
        <button id="closePopup">&times;</button>
        <h1></h1>
        <h2><span></span></h2>
        <p></p>
      </div>
    </div>
  </div>



  <!--==========================
    Header
  ============================-->
 <?php include 'user_nav.php'; ?>

 
   <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="users/myimg/corosole1.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Unique Designs, Crafted for You!</h2>
                <p>At KJ Creation, we offer custom products designed to reflect your style and personality. Explore our collection of innovative, high-quality designs tailored just for you.</p>
                <a href="#portfolio" class="btn-get-started scrollto">Show</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="users/myimg/corosole2.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Creative, Custom & Timeless!</h2>
                <p>Discover custom gift solutions designed to inspire, 
                impress, and leave a lasting impression. Crafted with creativity and care, 
                our gifts are as unique as you are.</p>
                <a href="#portfolio" class="btn-get-started scrollto">Show</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="users/myimg/corosole3.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Where Innovation Meets Affordability!</h2>
                <p>Discover the perfect balance of creativity and value with our innovative products, designed to impress without the high price tag. Quality and affordability, all in one!</p>
                <a href="#portfolio" class="btn-get-started scrollto">Show</a>
              </div>
            </div>
          </div>

          <!-- <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/4.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Nam libero tempore</h2>
                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum.</p>
                <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div> -->

          <!-- <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/5.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Magnam aliquam quaerat</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div> -->

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      Featured Services Section
    ============================-->
    <!-- <section id="featured-services">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 box">
            <i class="ion-ios-bookmarks-outline"></i>
            <h4 class="title"><a href="">Lorem Ipsum Delino</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>

          <div class="col-lg-4 box box-bg">
            <i class="ion-ios-stopwatch-outline"></i>
            <h4 class="title"><a href="">Dolor Sitema</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>

          <div class="col-lg-4 box">
            <i class="ion-ios-heart-outline"></i>
            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>

        </div>
      </div>
    </section>#featured-services -->

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>About Us</h3>
          <p>Welcome to KJ Creation, your trusted partner for 
            high-quality promotional, 
            corporate, and custom gift items. 
            <b>"Making Every Gift a Memorable Experience."</b> Whether you're looking to promote your brand, appreciate your employees, celebrate milestones, or create personalized gifts, we offer a wide range of products to suit every occasion and need. From innovative designs to unique creations, our products make a lasting impression. With years of experience in delivering 
            excellence and a dedication to customer 
            satisfaction, we ensure that every gift is crafted with care and precision. Let us help you connect with your audience through memorable and meaningful gifts.</p>
        </header>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Mission</a></h2>
              <p>
              Our mission is to provide businesses and individuals with top-tier, customized gift solutions that reflect their unique identity. We aim to deliver products that not only meet but exceed expectations, ensuring customer satisfaction and lasting relationships.


              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-cart-outline"></i></div> 
<!-- Icon for products -->
              </div>
              <h2 class="title"><a href="#">Our Products</a></h2>
              <p>
              We offer high-quality products crafted with precision, 
              ensuring durability and exceptional standards. We make premium gifts accessible 
              by offering them at competitive prices,
               without compromising on quality. 
               Plus, with our exclusive offers, 
               you can enjoy even greater value on our products.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Vision</a></h2>
              <p>
              We aspire to be the go-to provider for personalized corporate and promotional gifts, renowned for creativity, quality, and exceptional service. Our vision is to create memorable experiences for our clients through innovative and tailor-made gift solutions.

              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3 style="color:black;">Services</h3>
        
        </header>
<br>
        <div class="row">

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
            <h4 class="title"><a href="">Customization</a></h4>
            <p class="description"> We offer full customization options to 
              create products that resonate with your brand or personal style.
            </p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
            <h4 class="title"><a href="">Quality</a></h4>
            <p class="description">Every item is carefully crafted and quality-checked to ensure it meets the highest standards.

</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-paper-outline"></i></div>
            <h4 class="title"><a href="">Affordability</a></h4>
            <p class="description">Our products offer competitive pricing without compromising on quality.
            </p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
            <h4 class="title"><a href="">Wide Product Range</a></h4>
            <p class="description">From branded merchandise to personalized keepsakes, we have something for everyone.

</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-barcode-outline"></i></div>
            <h4 class="title"><a href="">Eco-Friendly Options</a></h4>
            <p class="description">We offer sustainable and eco-conscious gift options, allowing you to promote your brand with a commitment to the environment.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-people-outline"></i></div>
            <h4 class="title"><a href="">Exceptional Customer Support</a></h4>
            <p class="description"> Our dedicated team is here to assist you every step of the way, ensuring a smooth and stress-free experience.</p>
          </div>

        </div>
        <p style="font-size: 24px; font-weight: bold; background: -webkit-linear-gradient(45deg,rgb(246, 107, 73),rgb(238, 129, 46)); -webkit-background-clip: text; color: transparent; text-align: center; line-height: 1;">
  <span style="font-size: 48px; font-weight: bold; color: black;">&#8220;</span> 
  Delivering Excellence in 
  <span style="display: block; font-size: 24px;">Every Product, Service, and Experience.  <span style="font-size: 48px; font-weight: bold; color: black;">&#8221;</span>
  </span>
</p>




      </div>
    </section><!-- #services -->

    <!--==========================
      Call To Action Section
    ============================-->
    <!-- <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
        <h3>Call To Action</h3>
        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a class="cta-btn" href="#">Call To Action</a>
      </div>
    </section>#call-to-action -->

    <!--==========================
      Skills Section
    ============================-->
    <!-- <section id="skills">
      <div class="container">

        <header class="section-header">
          <h3>Our Skills</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
        </header>

        <div class="skills-content">

          <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">HTML <i class="val">100%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">CSS <i class="val">90%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">JavaScript <i class="val">75%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Photoshop <i class="val">55%</i></span>
            </div>
          </div>

        </div>

      </div>
    </section>
 -->
    <!--==========================
      Facts Section
    ============================-->
    <section id="facts"  class="wow fadeIn">
      <div class="container">

        <!-- <header class="section-header">
          <h3>Facts</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </header> -->

        <div class="row counters">

  				<div class="col-lg-4 col-6 text-center">
            <span data-toggle="counter-up">200</span>
            <p>Total Products</p>
  				</div>

          <div class="col-lg-4 col-6 text-center">
            <span data-toggle="counter-up">10,000</span>
            <p>Total Customer</p>
  				</div>

          <div class="col-lg-4 col-6 text-center">
            <span data-toggle="counter-up">24</span>
            <p>Hours Of Support</p>
  				</div>

          <!-- <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"></span>
            <p>Hard Workers</p>
  				</div> -->

  			</div>

        <div class="facts-img">
          <img src="img/facts-img.png" alt="" class="img-fluid">
        </div>

      </div>
    </section><!-- #facts -->

    <!--==========================
      Portfolio Section
    ============================-->
    <?php


// Fetch products from the database
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
$products = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $products[] = $row;
    }
}

// Get the total number of products
$totalProducts = count($products);
?>

<section id="portfolio" class="section-bg">
    <div class="container">
        <header class="section-header">
            <h3 class="section-title" style="color:black;">Our Products</h3>
        </header>
        <br>

        <div class="row portfolio-container" id="product-container">
    <?php
    // Display the first 6 products
    for ($i = 0; $i < min(6, $totalProducts); $i++) {
        $product = $products[$i];
        ?>
        <div class="col-lg-4 col-md-4 portfolio-item wow fadeInUp">
            <div class="portfolio-wrap">
                <figure>
                    <img src="uploaded_images/<?php echo $product['IMAGE']; ?>" class="img-fluid" alt="<?php echo $product['name']; ?>">
                    <a href="uploaded_images/<?php echo $product['IMAGE']; ?>" data-lightbox="portfolio" data-title="<?php echo $product['name']; ?>" class="link-preview" title="Preview">
                        <i class="ion ion-eye"></i>
                    </a>
                    <a href="#" class="link-details" title="More Details">
                        <i class="ion ion-android-open"></i>
                    </a>
                </figure>
                <div class="portfolio-info">
                    <h4 style="color: #333; font-weight: bold;">
                        <a href="#" style="text-decoration: none;"><?php echo $product['name']; ?></a>
                    </h4>
                    <p style="color: #666; font-size: 14px;"><?php echo $product['price']; ?></p>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>

<div class="text-center mt-3">
    <?php if ($totalProducts > 6): ?>
        <button id="view-more-btn" class="btn btn-primary">View More</button>
    <?php else: ?>
        <button id="view-more-btn" class="btn btn-primary" disabled>No More Products</button>
    <?php endif; ?>
</div>
</div>

<?php if ($totalProducts > 6): ?>
<script>
    // Handle the View More button click
    document.getElementById('view-more-btn').addEventListener('click', () => {
        const productContainer = document.getElementById('product-container');

        // Add all remaining products
        <?php
        for ($i = 6; $i < $totalProducts; $i++) {
            $product = $products[$i];
            ?>
            productContainer.innerHTML += `
                <div class="col-lg-4 col-md-6 portfolio-item wow fadeInUp">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="uploaded_images/<?php echo $product['IMAGE']; ?>" class="img-fluid" alt="<?php echo $product['name']; ?>">
                        <a href="uploaded_images/<?php echo $product['IMAGE']; ?>" data-lightbox="portfolio" data-title="<?php echo $product['name']; ?>" class="link-preview" title="Preview">
                            <i class="ion ion-eye"></i>
                        </a>
                        <a href="#" class="link-details" title="More Details">
                            <i class="ion ion-android-open"></i>
                        </a>
                    </figure>
                    <div class="portfolio-info">
                        <h4 style="color: #333; font-weight: bold;">
                            <a href="#" style="text-decoration: none;"><?php echo $product['name']; ?></a>
                        </h4>
    <p style="color: #666; font-size: 14px;">₹<?php echo $product['price']; ?></p>
                    </div>
                </div>
            </div>
        `;
        <?php } ?>

        // Hide the View More button
        document.getElementById('view-more-btn').style.display = 'none';
    });
</script>
<?php endif; ?>

</section>
<!-- #portfolio -->

    <!--==========================
      Clients Section
    ============================-->
    <!-- <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Our Clients</h3>
        </header>

        <div class="owl-carousel clients-carousel">
          <img src="img/clients/client-1.png" alt="">
          <img src="img/clients/client-2.png" alt="">
          <img src="img/clients/client-3.png" alt="">
          <img src="img/clients/client-4.png" alt="">
          <img src="img/clients/client-5.png" alt="">
          <img src="img/clients/client-6.png" alt="">
          <img src="img/clients/client-7.png" alt="">
          <img src="img/clients/client-8.png" alt="">
        </div>

      </div>
    </section> -->
    <!-- #clients -->

    <!--==========================
      Clients Section
    ============================-->
    <!-- <section id="testimonials" class="section-bg wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Testimonials</h3>
        </header>

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="img/testimonial-1.jpg" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Ceo &amp; Founder</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-2.jpg" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-3.jpg" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-4.jpg" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-5.jpg" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

        </div>

      </div>
    </section>#testimonials -->

    <!--==========================
      Team Section
    ============================-->
    <!-- <section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3>Team</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/team-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Walter White</h4>
                  <span>Chief Executive Officer</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/team-2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Sarah Jhonson</h4>
                  <span>Product Manager</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/team-3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>William Anderson</h4>
                  <span>CTO</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/team-4.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Amanda Jepson</h4>
                  <span>Accountant</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>#team -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Contact Us</h3>
<p>
Get in touch with us today to explore our premium custom gift solutions and make a lasting impression!
</p>        </div>

<div class="row contact-info">
  <div class="col-md-4">
    <div class="contact-address">
      <i class="ion-ios-location-outline"></i>
      <h3>Address</h3>
      <address>A108 Adam Street, NY 535022, USA</address>
    </div>
  </div>

  <div class="col-md-4">
    <div class="contact-phone">
      <i class="ion-ios-telephone-outline"></i>
      <h3>Phone Number</h3>
      <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
    </div>
  </div>

  <div class="col-md-4">
    <div class="contact-email">
      <i class="ion-ios-email-outline"></i>
      <h3>Email</h3>
      <p><a href="mailto:info@example.com">info@example.com</a></p>
    </div>
  </div>
</div>

<div class="form">
  <div id="sendmessage" style="display: none; color: green;">Thanks for getting in touch! We've received your message and will respond soon.</div>
  <form id="contactForm" action="contactform.php" method="POST">
    <div class="form-row">
      <div class="form-group col-md-6">
        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" />
        <div class="error-message" id="name-error" style="color: red; display: none;"></div>
      </div>
      <div class="form-group col-md-6">
        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" />
        <div class="error-message" id="email-error" style="color: red; display: none;"></div>
      </div>
    </div>
    <div class="form-group">
      <input type="text" class="form-control" name="contact" id="contact" placeholder="Your Contact Number" />
      <div class="error-message" id="contact-error" style="color: red; display: none;"></div>
    </div>
    <div class="form-group">
      <textarea class="form-control" name="message" rows="5" id="message" placeholder="Message"></textarea>
      <div class="error-message" id="message-error" style="color: red; display: none;"></div>
    </div>
    <div class="text-center">
      <button type="submit" style="border-radius: 50px;">Send Message</button>
    </div>
  </form>
</div>




      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <h3>Elevate Your Gifting Game with Us!</h3>
            <p>
              </p>Discover premium corporate, promotional, 
              and custom gift solutions with KJ Creation. 
              We specialize in quality, creativity, and customization to help 
              you make a lasting impression.
               Explore our wide range of products and experience 
               exceptional service today!          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#home">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#about">About us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#services">Services</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="##portfolio">Products</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#contact">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <!-- <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Subscribe">
            </form>
          </div> -->

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>KJ Creation</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
        Designed by <a href="https://bootstrapmade.com/">DipeshPatadiya</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
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
  <script src="users/lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->
  <!-- Contact Form JavaScript File -->
  <!-- <script src="users/contactform/contactform.js"></script> -->

  <!-- Template Main Javascript File -->
  <script src="users/js/main.js"></script>

<script>
$(document).ready(function () {
  // Real-time validation for Name
  $("#name").on("input", function () {
    const name = $(this).val().trim();
    if (name === "") {
      $("#name-error").text("Please enter your name.").show();
    } else {
      $("#name-error").hide();
    }
  });

  // Real-time validation for Email
  $("#email").on("input", function () {
    const email = $(this).val().trim();
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (email === "") {
      $("#email-error").text("Please enter your email address.").show();
    } else if (!emailPattern.test(email)) {
      $("#email-error").text("Please enter a valid email address (e.g., name@example.com).").show();
    } else {
      $("#email-error").hide();
    }
  });

  // Real-time validation for Contact Number
  // $("#contact").on("input", function () {
  //   const contact = $(this).val().trim();
  //   if (contact === "") {
  //     $("#contact-error").text("Please enter your contact number.").show();
  //   } else if (!/^\d+$/.test(contact)) {
  //     $("#contact-error").text("Contact number can only contain digits.").show();
  //   } else if (contact.length < 10) {
  //     $("#contact-error").text("Contact number must be exactly 10 digits.").show();
  //   } else if (contact.length > 10) {
  //     $("#contact-error").text("Contact number cannot exceed 10 digits.").show();
  //   } else {
  //     $("#contact-error").hide();
  //   }
  // });

  // Real-time validation for Message
  $("#message").on("input", function () {
    const message = $(this).val().trim();
    if (message === "") {
      $("#message-error").text("Please write a message.").show();
    } else {
      $("#message-error").hide();
    }
  });

  //Form submission validation
  $("#contactForm").submit(function (e) {
    e.preventDefault(); // Prevent default form submission

    // Clear all error messages
    $(".error-message").hide();
    let isValid = true;

    // Name Validation
    const name = $("#name").val().trim();
    if (name === "") {
      $("#name-error").text("Please enter your name.").show();
      isValid = false;
    }

    // Email Validation
    const email = $("#email").val().trim();
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (email === "") {
      $("#email-error").text("Please enter your email address.").show();
      isValid = false;
    } else if (!emailPattern.test(email)) {
      $("#email-error").text("Please enter a valid email address (e.g., name@example.com).").show();
      isValid = false;
    }

    // Contact Validation
    // const contact = $("#contact").val().trim();
    // if (contact === "") {
    //   $("#contact-error").text("Please enter your contact number.").show();
    //   isValid = false;
    // } else if (!/^\d{10}$/.test(contact)) {
    //   $("#contact-error").text("Please enter a valid 10-digit contact number.").show();
    //   isValid = false;
    // }

    // Message Validation
    const message = $("#message").val().trim();
    if (message === "") {
      $("#message-error").text("Please write a message.").show();
      isValid = false;
    }

    // Submit the form if all fields are valid
    if (isValid) {
      $.ajax({
        type: "POST",
        url: $("#contactForm").attr("action"),
        data: $("#contactForm").serialize(),
        success: function (response) {
          if (response === "OK") {
            $("#sendmessage").show();
            $("#contactForm")[0].reset();
          } else {
            $("#errormessage").text(response).show();
          }
        },
        error: function () {
          $("#errormessage").text("An error occurred while submitting the form.").show();
        },
      });
    }
  });
});

</script>

<script>
  // Hide the preloader when the page is fully loaded
  var preloader = document.getElementById("loading");
  function myFunction() {
    preloader.style.display = "none";
  }

  // Show the pop-up after 1 second
  document.addEventListener("DOMContentLoaded", function () {
    setTimeout(function () {
      document.getElementById("popUpMain").style.display = "flex";
    }, 1000); // Delay in milliseconds
  });

  // Close the pop-up when the close button is clicked
  document.getElementById("closePopup").addEventListener("click", function () {
    document.getElementById("popUpMain").style.display = "none";
  });
</script>

<!-- <script>
document.addEventListener("DOMContentLoaded", function () {
  // Fetch data from the backend
  fetch("fetch_offers.php")
    .then((response) => response.json())
    .then((data) => {
      if (data.success && data.offer) {
        const offer = data.offer;

        // Update the pop-up content with the offer details
        document.querySelector("#popupContent h1").textContent = offer.title;
        document.querySelector("#popupContent h2").innerHTML = `🎉 Save <span>${offer.discount "Off"}</span>`;
        document.querySelector("#popupContent p").textContent =
          offer.description;
        document.querySelector("#popupImage img").src = offer.image_url ;

        // Show the pop-up after 1 second
        setTimeout(function () {
          document.getElementById("popUpMain").style.display = "flex";
        }, 1000);
      } else if (!data.offer) { -->
        <!-- console.log("No offers available.");
      } else {
        console.error(data.message || "An error occurred while fetching offers.");
      }
    })
    .catch((error) => console.error("Error fetching offers:", error));
});

// Hide the preloader when the page is fully loaded
var preloader = document.getElementById("loading");
function myFunction() {
  preloader.style.display = "none";
}

// Close the pop-up when the close button is clicked
document.getElementById("closePopup").addEventListener("click", function () {
  document.getElementById("popUpMain").style.display = "none";
});

</script> -->



<script>
  document.addEventListener("DOMContentLoaded", function () {
    // Fetch data from the backend
    fetch("fetch_offers.php")
      .then((response) => response.json())
      .then((data) => {
        const popupMain = document.getElementById("popUpMain");

        if (data.success && data.offer) {
          // Populate the pop-up with fetched data
          document.querySelector("#popupContent h1").innerText = data.offer.title;
          document.querySelector("#popupContent h2 span").innerText = data.offer.discount;
          document.querySelector("#popupContent p").innerText = data.offer.description;
          document.querySelector("#popupImage img").src = data.offer.image_url;

          // Remove the 'hidden' class to show the popup
          popupMain.classList.remove("hidden");

          // Show the pop-up after 1 second
          setTimeout(function () {
            popupMain.style.display = "flex";
          }, 1000);
        } else {
          // Add the 'hidden' class to ensure the popup is not displayed
          popupMain.classList.add("hidden");
          console.log(data.message || "No offers available, popup will not open.");
        }
      })
      .catch((error) => {
        // Ensure popup remains hidden on error
        document.getElementById("popUpMain").classList.add("hidden");
        console.error("Error fetching offers:", error);
      });
  });

  // Hide the preloader when the page is fully loaded
  function myFunction() {
    document.getElementById("loading").style.display = "none";
  }

  // Close the pop-up when the close button is clicked
  document.getElementById("closePopup").addEventListener("click", function () {
    document.getElementById("popUpMain").classList.add("hidden");
  });
</script>


</body>
</html>
