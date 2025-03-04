<?php
include 'database/config.php';

// Query to fetch the last inserted image
$q = "SELECT * FROM f_image ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $q);

// Check if the query returned any rows
if (mysqli_num_rows($result) > 0) {
    $image = mysqli_fetch_assoc($result);
}
?>

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
                        Discover premium corporate, promotional, 
                        and custom gift solutions with KJ Creation. 
                        We specialize in quality, creativity, and customization to help 
                        you make a lasting impression.
                        Explore our wide range of products and experience 
                        exceptional service today!
                    </p>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="ion-ios-arrow-right"></i> <a href="index.php">Home</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="about.php">About us</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="user_products.php">Products</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="user_offers.php">Offers & Reviwes</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="contact.php">Contact</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h4>Contact Us</h4>
                    <p>
                        Rajkot, Gujarat  <br>
                        <!-- New York, NY 535022<br>
                        United States <br> -->
                        <strong>Phone:</strong>+91 96628 76676<br>
                        <strong>Email:</strong> kjcreations4all@gmail.com<br>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-image">
                    <h4>Wishings</h4>
                    <div class="image-container">
                        <?php if ($image): ?>
                            <img src="uploaded_images/<?php echo $image['image']; ?>" 
                                 alt="<?php echo $image['title']; ?>" class="img-fluid">
                        <?php else: ?>
                            <p>No image found</p>
                        <?php endif; ?> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong>KJ Creation</strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="">DipeshPatadiya</a>
        </div>
    </div>
</footer>
