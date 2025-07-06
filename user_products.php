<?php
include 'database/config.php';
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
<body>

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

<section id="portfolio" class="section-bg" style="margin-top: -120px;">
    <div class="container">
        <header class="section-header">

         <div class="container">

        <header class="section-header">
        <h3 class="section-title" style="color:black;">Our Products</h3>

        <div class="row">
            
            <div class="col-md-7">
                <ul id="portfolio-flters" class="list-inline">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".Corporate-gift">CORPORATE GIFT</li>
                    <li data-filter=".Traditional">TRADITIONAL</li>
                    <li data-filter=".Devotional">DEVOTIONAL</li>
                </ul>
            </div>
            
            <div class="col-md-5" style="padding-top: 20px;">
             
                <input type="text" id="productSearch" class="form-control" placeholder="Search products..." onkeyup="filterProducts()">
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
        "Corporate-gift" => "Corporate-gift",
        "Traditional" => "Traditional",
        "Devotional" => "Devotional",  // Correct spelling
        // "Accessories" => "accessories"
    ];

    while ($product = mysqli_fetch_assoc($productResult)) {
        $categoryClass = isset($categoryMap[$product['categories']]) ? $categoryMap[$product['categories']] : "";
        ?>
        <div class="col-lg-3 col-md-4 portfolio-item <?php echo $categoryClass; ?>"  data-category="<?php echo strtolower($categoryClass); ?>">
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
                <!-- <div class="portfolio-info">
                    <h4><a href="#" style="text-decoration: none;"><?php echo $product['name']; ?></a></h4>
                    <p><?php echo $product['price']; ?></p>
                    <p><?php echo $product['categories'];?></p>
                </div> -->

                <div class="portfolio-info">
                <!-- First Row: Code (left) | Name (right) -->
                <div class="info-row">
                    <span class="product-code"><?php echo $product['p_code']; ?></span>
                    <h4><a href="#" style="text-decoration: none;" class="product-name"><?php echo $product['name']; ?></a></h4>
                </div>
                <!-- Second Row: Category (left) | Price (right) -->
                <div class="info-row">
                    <span class="product-category"><?php echo $product['categories']; ?></span>
                    <span class="product-price">₹<?php echo $product['price']; ?></span>
                </div>
                <!-- Third Row: View Count with Eye icon -->
                <div class="info-row count-row">
                    <span class="product-count">
                        <i class="ion ion-eye"></i> <?php echo $product['count']; ?>
                    </span>
                </div>
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
<a href="https://chat.whatsapp.com/F0xId36zZE23wq7PiN4LwC" class="whatsapp-fixed" target="_blank" title="WhatsApp">
  <i class="fab fa-whatsapp"></i>
</a>
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
document.addEventListener("DOMContentLoaded", function () {
  const searchInput = document.getElementById("productSearch");
  const productItems = document.querySelectorAll(".portfolio-item");
  const categoryButtons = document.querySelectorAll("#portfolio-flters li");

  let activeCategory = "*"; // Default: All categories

  function filterProducts() {
    const searchText = searchInput.value.trim().toLowerCase();

    productItems.forEach((item) => {
      // Get product name text
      const productName = item.querySelector("h4 a").innerText.toLowerCase();
      // Get the product's category from the data attribute
      const itemCategory = item.getAttribute("data-category") || "";

      let shouldShow = false;

      if (activeCategory === "*") {
        // "All" tab: if search text is empty, show all;
        // Otherwise, show items if search text matches product name OR category.
        if (searchText === "") {
          shouldShow = true;
        } else {
          shouldShow = productName.includes(searchText) || itemCategory.includes(searchText);
        }
      } else {
        // Specific category: first, filter items by category.
        if (itemCategory === activeCategory.toLowerCase()) {
          // Within this category, if no search text, show the item.
          // Otherwise, check only the product name.
          if (searchText === "") {
            shouldShow = true;
          } else {
            shouldShow = productName.includes(searchText);
          }
        } else {
          shouldShow = false;
        }
      }

      item.style.display = shouldShow ? "block" : "none";
    });
  }

  // Handle category selection
  categoryButtons.forEach((button) => {
    button.addEventListener("click", function () {
      categoryButtons.forEach((btn) => btn.classList.remove("filter-active"));
      this.classList.add("filter-active");

      activeCategory = this.getAttribute("data-filter").replace(".", ""); // Get category class name
      searchInput.value = ""; // Reset search on category change
      filterProducts();
    });
  });

  // Filter on search input
  searchInput.addEventListener("keyup", filterProducts);

  // Initial filtering (display all)
  filterProducts();
});

document.addEventListener("DOMContentLoaded", function () {
  const searchInput = document.getElementById("productSearch");
  const productItems = document.querySelectorAll(".portfolio-item");
  const categoryButtons = document.querySelectorAll("#portfolio-flters li");
  const productCategories = document.querySelectorAll(".product-category"); // Select all category labels

  let activeCategory = "*"; // Default: All categories

  function filterProducts() {
    const searchText = searchInput.value.trim().toLowerCase();

    productItems.forEach((item) => {
      const productName = item.querySelector("h4 a").innerText.toLowerCase();
      const itemCategory = item.getAttribute("data-category") || "";

      let shouldShow = false;

      if (activeCategory === "*") {
        if (searchText === "") {
          shouldShow = true;
        } else {
          shouldShow = productName.includes(searchText) || itemCategory.includes(searchText);
        }
      } else {
        if (itemCategory === activeCategory.toLowerCase()) {
          shouldShow = searchText === "" || productName.includes(searchText);
        }
      }

      item.style.display = shouldShow ? "block" : "none";
    });

    // Show product categories only when "All Categories" is active
    productCategories.forEach(category => {
      category.style.display = activeCategory === "*" ? "inline-block" : "none";
    });
  }

  categoryButtons.forEach((button) => {
    button.addEventListener("click", function () {
      categoryButtons.forEach((btn) => btn.classList.remove("filter-active"));
      this.classList.add("filter-active");

      activeCategory = this.getAttribute("data-filter").replace(".", "");
      searchInput.value = "";
      filterProducts();
    });
  });

  searchInput.addEventListener("keyup", filterProducts);

  filterProducts();
});

</script>



</html>