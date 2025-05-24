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
  <section id="intro">
    <?php if (count($slides) > 0) { ?>
      <div class="container-fluid">
        <div class="row">
          <!-- Left Column: Carousel (8 Columns on Desktop, Full Width on Mobile) -->
          <div class="col-md-8 col-12">
            <div id="introCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
              <div class="carousel-inner">
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
                  <img src="uploaded_images/<?php echo $image_above['image']; ?>" alt="Right Image 1">
                <?php endif; ?>
              </div>

              <div class="image-wrapper">
                <?php if ($image_below): ?>
                  <img src="uploaded_images/<?php echo $image_below['image']; ?>" alt="Right Image 2">
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php } else { echo "<p class='text-center'>No images found!</p>"; } ?>
  </section>

  <!-- Include Footer -->
  <?php include 'footer.php'; ?>
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

</body>
</html>