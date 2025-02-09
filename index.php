<?php
include 'database/config.php';

$q = "SELECT * FROM home_slider ORDER BY id ASC"; // Ensure proper order
$result = mysqli_query($conn, $q);

$row = mysqli_fetch_assoc($result); 

$slides = [];
while ($row = mysqli_fetch_assoc($result)) {
    $slides[] = $row;
}

// if ($result) {
//   echo "Total Rows Fetched: " . $result->num_rows;
// } else {
//   echo "Query Failed: " . mysqli_error($conn);
// }

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
    <!-- Close Button -->
    <button id="closePopup">&times;</button>
  </div>
</div>


<!-- <div>
  <h2><?php echo $row['main_text']?></h2>
  <img src="uploaded_images/<?php echo $row['image']; ?>">
</div> -->


  <!--==========================
    Header
  ============================-->
 <?php include 'user_nav.php'; ?>

 
   <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <?php if (count($slides) > 0) { ?>
    <div class="container-fluid">
        <div class="row align-items-center">
            <!-- Left Column: Carousel (8 Columns on Desktop, Full Width on Mobile) -->
            <div class="col-md-8 col-12">
                <div id="introCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                        mysqli_data_seek($result, 0); // Reset pointer to start
                        $first = true;
                        while ($row = $result->fetch_assoc()) {
                        ?>
                        <div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
                            <img src="uploaded_images/<?php echo $row['image']; ?>" 
                                class="d-block w-100" 
                                alt="Carousel Image" 
                                style="height: 100vh; object-fit: cover;">
                            <div class="carousel-caption">
                                <h3><?php echo $row['main_text']; ?></h3>
                                <p><?php echo $row['p_text']; ?></p>
                                <a href="#portfolio" class="btn-get-started scrollto">Show</a>
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
  <div class="d-flex flex-md-column flex-row align-items-center responsive-container">
  <?php
// Include database connection


// Query to fetch the highest ID image with position 'above'
$sql_above = "SELECT * FROM home_side_image WHERE image_position = 'above' ORDER BY id DESC LIMIT 1";
$result_above = mysqli_query($conn, $sql_above);
$image_above = mysqli_fetch_assoc($result_above);

// Query to fetch the highest ID image with position 'below'
$sql_below = "SELECT * FROM home_side_image WHERE image_position = 'below' ORDER BY id DESC LIMIT 1";
$result_below = mysqli_query($conn, $sql_below);
$image_below = mysqli_fetch_assoc($result_below);
?>

<div class="image-wrapper mb-3">
    <?php if ($image_above): ?>
        <img src="uploaded_images/<?php echo $image_above['image']; ?>" alt="Right Image 1" class="img-fluid rounded">
    <?php endif; ?>
</div>

<div class="image-wrapper">
    <?php if ($image_below): ?>
        <img src="uploaded_images/<?php echo $image_below['image']; ?>" alt="Right Image 2" class="img-fluid rounded">
    <?php endif; ?>
</div>

  </div>
</div>



        </div>
    </div>
    <?php } else { echo "<p class='text-center'>No images found!</p>"; } ?>
</section>

  <!-- <main id="main"> -->

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
   
    <!--==========================
      Services Section
    ============================-->
    
    <!--==========================
      Call To Action Section
    ============================-->
    <!-- <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
        <h3>Call To Action</h3>
        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a class="cta-btn" href="#">Call To Action</a>
      </div>
    </section> -->

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
    <!-- <section id="facts"  class="wow fadeIn">
      <div class="container">

        <!-- <header class="section-header">
          <h3>Facts</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </header> -->

        <!-- <div class="row counters">

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
  				</div> -->

          <!-- <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"></span>
            <p>Hard Workers</p>
  				</div> -->

  			<!-- </div>

        <div class="facts-img">
          <img src="img/facts-img.png" alt="" class="img-fluid">
        </div>

      </div>
    </section> -->
  


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
   
 


    <?php include 'footer.php'; ?>
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<!-- Uncomment below i you want to use a preloader -->
<!-- <div id="preloader"></div> -->

<!-- JavaScript Libraries -->
 <!-- Bootstrap JS (Make sure it's included) -->
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
<script src="users/lib/touchSwipe/jquery.touchSwipe.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->
<!-- Contact Form JavaScript File -->
<!-- <script src="users/contactform/contactform.js"></script> -->

<!-- Template Main Javascript File -->
<script src="users/js/main.js"></script>

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

  // Hide the preloader when the page is fully loaded
  function myFunction() {
    document.getElementById("loading").style.display = "none";
  }

  // Close the pop-up when the close button is clicked
  document.getElementById("closePopup").addEventListener("click", function () {
    document.getElementById("popUpMain").classList.add("hidden");
  });
});

</script>


</body>
</html>
