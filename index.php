<?php
include 'database/config.php';

// Fetch all slider rows
$q = "SELECT * FROM home_slider ORDER BY id ASC";
$result = mysqli_query($conn, $q);

$slides = [];
while ($row = mysqli_fetch_assoc($result)) {
    $slides[] = $row;
}

// You can uncomment this for debugging if needed:
// if ($result) {
//   echo "Total Rows Fetched: " . mysqli_num_rows($result);
// } else {
//   echo "Query Failed: " . mysqli_error($conn);
// }


// for offers

// Fetch the latest offer from the database
$sql = "SELECT * FROM offers ORDER BY id DESC LIMIT 1"; 
$result = mysqli_query($conn, $sql);
$offer = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>KJ CREATION</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/kj_1.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="users/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="users/lib/animate/animate.min.css" rel="stylesheet">
  <link href="users/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="users/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="users/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="users/css/user2.css" rel="stylesheet">

  <style>
    .offer-details, .support-details {
    min-height: 450px; /* Adjust as needed */
    display: flex;
    flex-direction: column;
    justify-content: center;
    }

      /* Right Column (24-Hour Support) */
    .offer-support-section {
        display: flex;
        flex-wrap: wrap;
        margin: 0;
    }

    .offer-details, .support-details {
        flex: 1;
        padding: 30px;
        margin: 0;
    }

    .offer-details {
        background:white;     
        text-align: center;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
    }

    .offer-details h4, .offer-details p {
        font-weight: 700;
    }

    .offer-details img {
        width: 100%;
        
    }

    /* .offer-details img:hover {
        transform: scale(1.05);
    } */
    .support-details {
        background-color:  rgb(9, 46, 32);
        /* border-left: 3px dashed rgb(244, 107, 44); */
        color: white;   
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
        text-align: center;
    }

    .support-details h4, .support-details h2, .support-details p {
        color: rgb(255, 103, 31) ;
    }

    .support-details h2 {
        font-weight: 900;
    }

    .support-details p {
        font-weight: 500;
    }
    
</style>
</head>

<body onload="myFunction()">
  <div id="loading"></div> <!-- Preloader -->
  <div id="popUpMain" class="hidden">
    <div id="popup">
      <!-- Left Image Section -->
      <div id="popupImage">
        <img src="" alt="Popup Image" />
      </div>
      <!-- Close Button -->
      <button id="closePopup">&times;</button>
    </div>
  </div>

  <!-- Include navigation -->
  <?php include 'user_nav.php'; ?>

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" style="margin-top: -80px;">
    <?php if (count($slides) > 0) { ?>
      <div class="container-fluid">
        <div class="row" style="">
          <!-- Left Column: Carousel (8 Columns on Desktop, Full Width on Mobile) -->
          <div class="col-md-8 col-12">
            <div id="introCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
              <div class="carousel-inner" style="border-radius: 20px;">
                <?php 
                $first = true;
                foreach ($slides as $slide) { 
                ?>
                  <div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
                    <img src="uploaded_images/<?php echo $slide['image']; ?>" 
                         class="d-block w-100" 
                         alt="Carousel Image" 
                         style="height: 100vh; object-fit: cover;">
                    <div class="carousel-caption">
                      <h3><?php echo $slide['main_text']; ?></h3>
                      <p><?php echo $slide['p_text']; ?></p>
                      <!-- <a href="#portfolio" class="btn-get-started scrollto">Show</a> -->
                    </div>
                  </div>
                <?php 
                  $first = false;
                } 
                ?>
              </div>
              <a class="carousel-control-prev" href="#introCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              </a>
              <a class="carousel-control-next" href="#introCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
              </a>
            </div>
          </div>

          <!-- Right Column: Two Static Images -->
          <div class="col-md-4 col-12">
            <div class="d-flex flex-md-column flex-row responsive-container">
              <?php
              // Query to fetch the highest ID image with position 'above'
              $sql_above = "SELECT * FROM home_side_image WHERE image_position = 'above' ORDER BY id DESC LIMIT 1";
              $result_above = mysqli_query($conn, $sql_above);
              $image_above = mysqli_fetch_assoc($result_above);

              // Query to fetch the highest ID image with position 'below'
              $sql_below = "SELECT * FROM home_side_image WHERE image_position = 'below' ORDER BY id DESC LIMIT 1";
              $result_below = mysqli_query($conn, $sql_below);
              $image_below = mysqli_fetch_assoc($result_below);
              ?>

              <div class="image-wrapper mb-4">
                <?php if ($image_above): ?>
                  <img src="uploaded_images/<?php echo $image_above['image']; ?>" alt="Right Image 1" style="border-radius: 20px;">
                <?php endif; ?>
              </div>

              <div class="image-wrapper">
                <?php if ($image_below): ?>
                  <img src="uploaded_images/<?php echo $image_below['image']; ?>" alt="Right Image 2" style="border-radius: 20px;">
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php } else { echo "<p class='text-center'>No images found!</p>"; } ?>
  </section>


<!-- about  -->
  
<section id="about" style="">
      <div class="container">

        <header class="section-header">
          <h3>About Us</h3>
          <p style="text-align: justify; letter-spacing: 1px;">Welcome to KJ Creation, your trusted partner for 
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
      </section>
      <section id="services">
     
 <!-- #services -->

      <div class="container">

<header class="section-header wow fadeInUp">
  <h3 style="color:black;">Services</h3>

</header>
<br>
<div class="row g-4">

<div class="col-lg-4 col-md-6 mb-4">
  <div class="box wow bounceInUp" data-wow-duration="1.4s">
    <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
    <h4 class="title"><a href="">Customization</a></h4>
    <p class="description">We offer full customization options to create products that resonate with your brand or personal style.</p>
  </div>
</div>

<div class="col-lg-4 col-md-6 mb-4">
  <div class="box wow bounceInUp" data-wow-duration="1.4s">
    <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
    <h4 class="title"><a href="">Quality</a></h4>
    <p class="description">Every item is carefully crafted and quality-checked to ensure it meets the highest standards.</p>
  </div>
</div>

<div class="col-lg-4 col-md-6 mb-4">
  <div class="box wow bounceInUp" data-wow-duration="1.4s">
    <div class="icon"><i class="ion-ios-paper-outline"></i></div>
    <h4 class="title"><a href="">Affordability</a></h4>
    <p class="description">Our products offer competitive pricing without compromising on quality.</p>
  </div>
</div>

<div class="col-lg-4 col-md-6">
  <div class="box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
    <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
    <h4 class="title"><a href="">Wide Product Range</a></h4>
    <p class="description">Discover a variety of unique products, from branded items to personalized gifts for any occasion.</p>
  </div>
</div>

<div class="col-lg-4 col-md-6">
  <div class="box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
    <div class="icon"><i class="ion-ios-barcode-outline"></i></div>
    <h4 class="title"><a href="">Eco-Friendly Options</a></h4>
    <p class="description">We provide sustainable gift choices to help you promote your brand while protecting the environment.</p>
  </div>
</div>

<div class="col-lg-4 col-md-6">
  <div class="box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
    <div class="icon"><i class="ion-ios-people-outline"></i></div>
    <h4 class="title"><a href="">Customer Support</a></h4>
    <p class="description">Our team is ready to assist you with timely help, ensuring a hassle-free experience.</p>
  </div>
</div>

</div>
</div>

    </section>
    <section id="clients" class="wow fadeInUp">
      <div class="container-fuild">

        <header class="section-header" style="padding-bottom: 30px;">
          <h3  class="section-title" style="color:black; padding-top: -40px;">Our Clients</h3>
        </header>
<?php
$query = "SELECT image FROM compony_details"; // Assuming 'logo' column stores image paths
$result = mysqli_query($conn, $query);?>

<div class="owl-carousel clients-carousel">
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <img src="uploaded_images/<?php echo $row['image']; ?>" alt="Client Logo">
    <?php } ?>
</div>

      </div>
    </section><!-- #clients -->
<!-- testimonials -->

       <?php include 'testimonal.php'?>

<!-- offers -->

<section id="offers" class="py-5" style="background-color:#f7f7f7;">
    <div class="container-fluid">
      <!-- <header class="text-center mb-4"> -->
      <header class="section-header">
        <h3 class="section-title" style="color:black;">Exclusive Offers</h3>

        <!-- <h5 style="color:black; text-align:center;">Grab the best deals and enjoy top-tier support, available 24/7 for your convenience.</h5> -->
      </header>
      <div class="offer-support-section">
        <div class="offer-details">
          <?php if ($offer): ?>
            <h4>🔥 <?= htmlspecialchars($offer['title']); ?> - <span style="color: red;"><?= htmlspecialchars($offer['offer_percentage']); ?> OFF</span></h4>
            <p><strong>Offer Code:</strong> <?= htmlspecialchars($offer['offer_code']); ?></p>
            <p><?= htmlspecialchars($offer['description']); ?></p>
            <img src="uploaded_images/<?= htmlspecialchars($offer['image']); ?>" alt="Offer Image">
          <?php else: ?>
            <h4>No active offers available.</h4>
          <?php endif; ?>
        </div>

        <div class="support-details p-4  shadow text-center">
    <!-- <h4>💡 Why Choose Us?</h4> -->
    <br>
    <div class="row my-3">
        <div class="col-6">
            <h2 style="color: rgb(244, 107, 44);"><span data-toggle="counter-up">200</span>+</h2>
            <p style="color:rgb(244, 107, 44);;"><b>Total Products</b></p>
        </div>
        <div class="col-6">
            <h2 style="color: rgb(244, 107, 44);"><span data-toggle="counter-up">10,000</span>+</h2>
            <p style="color:rgb(244, 107, 44);;"><b>Satisfied Customers</b></p>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <h2 style="color: rgb(244, 107, 44);"><span data-toggle="counter-up">24</span></h2>
            <p style="color:rgb(244, 107, 44);;"><b>Hours of Support</b></p>
        </div>
    </div>
<br><br>
    <!-- Unique Offer Quotes Section -->
    <p style="font-size: 24px; font-weight: bold; background: -webkit-linear-gradient(45deg,rgb(255, 254, 254),rgb(233, 233, 233)); -webkit-background-clip: text; color: transparent; text-align: center; line-height: 1;">
<!-- <span style="font-size: 48px; font-weight: bold; color: white;">&#8220;</span>  -->
Unbeatable offers, unmatched support<br><br>
<span style="display: block; font-size: 24px;">—because you deserve both!
    <!-- <span style="font-size: 48px; font-weight: bold; color: white;">&#8221;</span> -->
</span>
</p>

    <p class="mt-3" style="color:rgba(239, 238, 238, 0.9);">We ensure top-notch service and <b>quick resolutions</b> for all your concerns!</p>
</div>


      </div>
    </div>
  </section>

 


       <!-- contact -->

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
      <address>Rajkot, Gujarat</address>
    </div>
  </div>

  <div class="col-md-4">
    <div class="contact-phone">
      <i class="ion-ios-telephone-outline"></i>
      <h3>Phone Number</h3>
      <p><a href="tel:+155895548855">+91 96628 76676</a></p>
    </div>
  </div>

  <div class="col-md-4">
    <div class="contact-email">
      <i class="ion-ios-email-outline"></i>
      <h3>Email</h3>
      <p><a href="mailto:info@example.com">kjcreations4all@gmail.com</a></p>
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
<!-- Include Footer -->
  <?php include 'footer.php'; ?>
  <a href="" class="whatsapp-fixed" target="_blank" title="WhatsApp">
  <i class="fab fa-whatsapp"></i>
</a>
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  
  <!-- jQuery & jQuery Migrate (include only once) -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.3.2/jquery-migrate.min.js"></script>

  <!-- Other Libraries (ensure each is included only once) -->
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
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

  <!-- Custom JS File -->
  <script src="users/js/main.js"></script>
  <script>
    // Hide the preloader when the page is fully loaded
    function myFunction() {
      document.getElementById("loading").style.display = "none";
    }

    // Pop-up functionality
    document.addEventListener("DOMContentLoaded", function () {
      setTimeout(function () {
        document.getElementById("popUpMain").style.display = "flex";
      }, 1000);
    });

    document.getElementById("closePopup").addEventListener("click", function () {
      document.getElementById("popUpMain").style.display = "none";
    });
  </script>

  <!-- Offer Fetching Script -->
  <script>
      document.addEventListener("DOMContentLoaded", function () {
      fetch("fetch_offers.php")
        .then((response) => response.json())
        .then((data) => {
          const popupMain = document.getElementById("popUpMain");

          if (data.success && data.offer) {
            document.querySelector("#popupImage img").src = data.offer.image_url;
            popupMain.classList.remove("hidden");
            setTimeout(function () {
              popupMain.style.display = "flex";
            }, 1000);
          } else {
            popupMain.classList.add("hidden");
            console.log(data.message || "No offers available, popup will not open.");
          }
        })
        .catch((error) => {
          document.getElementById("popUpMain").classList.add("hidden");
          console.error("Error fetching offers:", error);
        });
    });
    </script>

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


</body>
</html>