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

<?php include 'user_nav.php'; ?>
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

         <div class="container">

        <header class="section-header">
        <h3 class="section-title" style="color:black;">Our Products</h3>

        

        <div class="row">
        <div class="col-lg-12">
        <ul id="portfolio-flters">
    <li data-filter="*" class="filter-active">All</li>
    <li data-filter=".handicraft">Handicraft</li>
    <li data-filter=".purse">Purse</li>
    <li data-filter=".jewellery">Jewellery</li>
    <li data-filter=".accessories">Accessories</li>
</ul>
</div>
    </div>


        </header>
        <br>

        <div class="row portfolio-container">
    <?php
    include 'database/config.php';

    $query = "SELECT * FROM products";  // Fetch all products
    $productResult = mysqli_query($conn, $query);

    $categoryMap = [
        "Handicraft" => "handicraft",
        "Purse" => "purse",
        "Jewellery" => "jewellery",  // Correct spelling
        "Accessories" => "accessories"
    ];

    while ($product = mysqli_fetch_assoc($productResult)) {
        $categoryClass = isset($categoryMap[$product['categories']]) ? $categoryMap[$product['categories']] : "";
        ?>
        <div class="col-lg-3 col-md-4 portfolio-item <?php echo $categoryClass; ?>">
            <div class="portfolio-wrap">
                <figure>
                    <img src="uploaded_images/<?php echo $product['image']; ?>" class="img-fluid" alt="<?php echo $product['name']; ?>" style="height:100%; width:100%;">
                    <a href="uploaded_images/<?php echo $product['image']; ?>" data-lightbox="portfolio" data-title="<?php echo $product['name']; ?>" class="link-preview" title="Preview">
                        <i class="ion ion-eye"></i>
                    </a>
                    <a href="product_details.php?id=<?php echo $product['id']; ?>" class="link-details" title="More Details">
                        <i class="ion ion-android-open"></i>
                    </a>
                </figure>
                <div class="portfolio-info">
                    <h4><a href="#" style="text-decoration: none;"><?php echo $product['name']; ?></a></h4>
                    <p><?php echo $product['price']; ?></p>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>



</div>



</section>

</body>

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
</html>