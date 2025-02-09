<?php
include 'database/config.php';

if (isset($_GET['id'])) {
    $product_id = $_GET['id'];

    // Fetch product details from the database
    $query = "SELECT * FROM products WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $product_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $product = $result->fetch_assoc();

    if (!$product) {
        echo "<h2 class='text-center text-danger'>Product not found!</h2>";
        exit;
    }

    // Decode JSON stored in `question` column
    $questions = json_decode($product['question'], true);
} else {
    echo "<h2 class='text-center text-danger'>Invalid product ID!</h2>";
    exit;
}

  // Fetch all products in the same category, excluding the current product
  $category = $product['categories'];
  $relatedQuery = "SELECT * FROM products WHERE categories  = ? AND id != ?";
  $stmt = $conn->prepare($relatedQuery);
  $stmt->bind_param("si", $category, $product_id);
  $stmt->execute();
  $relatedResult = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Product Details | KJ CREATION</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link href="img/kj_1.png" rel="icon">
  <link href="users/css/user2.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
 
    .section-title {
        font-weight: bold;
        font-size: 28px;
        color: rgb(244, 107, 44);
    }
    .product-image {
        max-height: 400px;
        width: 100%;
        border-radius: 10px;
    }
    .product-price {
        color: rgb(244, 107, 44);
        font-size: 22px;
        font-weight: bold;
    }
    .btn-custom {
        background-color: rgb(244, 107, 44);
        color: white;
        font-weight: bold;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        transition: background 0.3s;
    }
    .btn-custom:hover {
        background-color: rgb(200, 80, 30);
    }
    .accordion-button {
        font-weight: bold;
        background-color: white;
        color: rgb(244, 107, 44);
        border: 1px solid rgb(244, 107, 44);
    }
    .accordion-button:not(.collapsed) {
        background-color: rgb(244, 107, 44);
        color: white;
    }
    .accordion-body {
        font-size: 16px;
        color: rgb(45, 58, 45);
        border-radius: 5px;
    }
    .highlight {
        color: green;
        font-weight: bold;
    }
  </style>
</head>
<body>

<?php include 'user_nav.php'; ?>


  <section id="product-details" class="py-5" style="padding-top: 70px;">
    <div class="container">
      <header class="section-header text-center mb-4">
        <h3 class="section-title" style="color:black">Product Details</h3>
      </header>

      <div class="row">
        <!-- Left Column: Product Image -->
        <div class="col-md-6 text-center">
          <img src="uploaded_images/<?php echo $product['image']; ?>" class="img-fluid product-image" alt="<?php echo $product['name'];?>"  style="width:70%;">
        </div>

        <!-- Right Column: Product Details -->
        <div class="col-md-6">
          <div class="product-details">
            <h2 class="fw-bold"><?php echo $product['name']; ?></h2>
            <h4 class="product-price">₹<?php echo number_format($product['price'], 2); ?></h4>
            <p class="mt-3"><strong>Description:</strong> <?php echo $product['des']; ?></p>
          </div>

          <!-- Stock Questions (Collapsible Q&A) -->
          <div class="accordion mt-4" id="questionAccordion">
            <?php
            if (!empty($questions)) {
                foreach ($questions as $index => $qa) {
                    ?>
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q<?php echo $index; ?>">
                          <?php echo htmlspecialchars($qa['question']); ?>
                        </button>
                      </h2>
                      <div id="q<?php echo $index; ?>" class="accordion-collapse collapse" data-bs-parent="#questionAccordion">
                        <div class="accordion-body">
                          <?php echo htmlspecialchars($qa['answer']); ?>
                        </div>
                      </div>
                    </div>
                    <?php
                }
            } else {
                echo "<p class='text-muted'>No stock details available.</p>";
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Our Clients</h3>
        </header>

        <div class="owl-carousel clients-carousel">
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
                
            </div>
        </div>
         
        </div>

      </div>
    </section><!-- #clients -->

</main>

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

</body>
</html>
