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
 <link href="users/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<style>
    /*** Footer ***/
/*** Footer Styles ***/
.newsletter {
    position: relative;
    z-index: 1;
}

.footer {
    position: relative;
    margin-top: -110px;
    padding-top: 180px;
    background-color:rgb(9, 46, 32) !important;
    color: white;
}

.footer .btn.btn-social {
    margin-right: 5px;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    border: 1px solid white;
    border-radius: 50%;
    transition: 0.3s;
}

.footer .btn.btn-social:hover {
    background-color: rgb(255, 103, 31);
    color: white;
    border-color: rgb(255, 103, 31);
}

.footer .btn.btn-link {
    display: block;
    margin-bottom: 5px;
    padding: 0;
    text-align: left;
    color: white;
    font-size: 16px;
    font-weight: 500;
    text-transform: capitalize;
    transition: 0.3s;
}

.footer .btn.btn-link:hover {
    letter-spacing: 1px;
    color: rgb(255, 103, 31);
}

/* Footer Copyright */
.footer .copyright {
    padding: 25px 0;
    font-size: 15px;
    border-top: 1px solid rgba(255, 255, 255, 0.2);
    text-align: center;
}

.footer .copyright a {
    color: rgb(255, 103, 31);
    text-decoration: none;
    font-weight: bold;
}


/* Footer Links */
.footer .btn.btn-link {
    display: block;
    margin-bottom: 5px;
    padding: 0;
    text-align: left;
    color: white;
    font-size: 16px;
    font-weight: 500;
    text-transform: capitalize;
    transition: 0.3s;
}

.footer .btn.btn-link:hover {
    letter-spacing: 1px;
    color: rgb(255, 103, 31);
}

/* Footer Copyright */
.footer .copyright {
    padding: 25px 0;
    font-size: 15px;
    border-top: 1px solid rgba(255, 255, 255, 0.2);
    text-align: center;
}

.footer .copyright a {
    color: rgb(255, 103, 31);
    text-decoration: none;
    font-weight: bold;
}

/* Footer Menu */
.footer .footer-menu a {
    margin-right: 15px;
    padding-right: 15px;
    border-right: 1px solid rgba(255, 255, 255, 0.3);
    color: white;
    text-decoration: none;
    transition: 0.3s;
}

.footer .footer-menu a:last-child {
    margin-right: 0;
    padding-right: 0;
    border-right: none;
}

.footer .footer-menu a:hover {
    color: rgb(255, 103, 31);
}

/* Newsletter Section */
/* .newsletter .border {
    border-color: rgb(255, 103, 31) !important;
} */

.newsletter .bg-white {
    background-color: white;
    color: rgb(9, 46, 32);
}

.newsletter h4 {
    font-weight: bold;
    color: rgb(9, 46, 32);
}

.newsletter .text-primary {
    color: rgb(255, 103, 31) !important;
}

/* Newsletter Input Field with Button Inside */
/* Newsletter Input Group */
.newsletter-input-group {
    position: relative;
    display: flex;
    width: 100%;
    border-radius: 4px;
    overflow: hidden;
}

/* Input Field */
.newsletter-input-group input {
    flex: 1;
    padding: 12px 15px;
    border: 1px solid #ddd;
    border-radius: 4px 0 0 4px;
    font-size: 16px;
    outline: none;
    height: 46px; /* Fixed height */
    border-right: none; /* Remove right border to merge with button */
}

/* Submit Button */
/* Submit Button */
.newsletter-input-group button {
    padding: 0 25px;
    background-color: rgb(255, 103, 31) !important; /* Important to override any Bootstrap styles */
    color: white !important;
    border: none !important;
    font-weight: bold;
    font-size: 16px;
    cursor: pointer;
    height: 46px;
    border-radius: 0 4px 4px 0;
    text-transform: uppercase;
}

/* Remove all hover/focus/active effects */
.newsletter-input-group button:hover,
.newsletter-input-group button:focus,
.newsletter-input-group button:active {
    background-color: rgb(255, 103, 31) !important;
    color: white !important;
    outline: none !important;
    box-shadow: none !important;
    transform: none !important;
}

/* .newsletter-input-group button:hover {
    background-color: rgb(232, 93, 25);
} */

/* Focus state for input */
.newsletter-input-group input:focus {
    border-color: rgb(255, 103, 31);
    box-shadow: 0 0 0 2px rgba(255, 103, 31, 0.2);
}
</style>

<!--==========================
    Footer
============================-->
<!-- Newsletter Start -->

<div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="row justify-content-center">
        <div class="col-lg-10 border rounded p-1">
            <div class="border rounded text-center p-1">
                <div class="bg-white rounded text-center p-5">
                    <h4 class="mb-4">Subscribe Our <span class="text-primary text-uppercase">Newsletter</span></h4>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <div class="input-group newsletter-input-group">
                            <input class="form-control" type="text" placeholder="Enter your email">
                            <button type="button" class="btn">SUBMIT</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- Newsletter Start -->
        

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container pb-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-4">
                        <div class="bg-primary rounded p-4">
                           <h3>Elevate Your Gifting Game with Us!</h3>
                            <p class="text-white mb-0">
                            Discover premium corporate and custom gift solutions with KJ Creation. We offer quality, creativity, and customization to leave a lasting impression. Explore our range today!
							</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h6 class="section-title text-start text-primary text-uppercase mb-4">Contact</h6>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Rajkot, Gujarat </p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+91 96628 76676</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>kjcreations4all@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fa fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fa fa-facebook"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fa fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="row gy-5 g-4">
                            <div class="col-md-6">
                                <h6 class="section-title text-start text-primary text-uppercase mb-4">Company</h6>
                                <h4>Useful Links</h4>
                    <ul>
                        <li><i class="ion-ios-arrow-right"></i> <a href="index.php">Home</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="about.php">About us</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="user_products.php">Products</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="user_offers.php">Offers & Reviwes</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="contact.php">Contact</a></li>
                    </ul>
                
                            </div>
                            <div class="col-md-6">
                                <h6 class="section-title text-start text-primary text-uppercase mb-4">Wishings</h6>
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
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">KJCreation</a>, All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a href="">DipeshPatadiya</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
