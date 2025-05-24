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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<style>
    /*** Footer ***/
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

    

    .footer-section-title {
        color: rgb(255, 103, 31) !important;
        font-weight: 600;
        margin-bottom: 1.5rem;
        letter-spacing: 1px;
        text-transform: uppercase;
        position: relative;
        padding-bottom: 10px;
    }
    
    .footer-section-title:after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 50px;
        height: 2px;
        background: rgb(255, 103, 31);
    }

    /* Social Icons */
    .footer .btn.btn-social {
        margin-right: 10px;
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
        background: linear-gradient(45deg, rgb(233, 92, 26), rgb(232, 140, 3));
        color: white;
        border-color: rgb(255, 103, 31);
    }

    /* Contact Info */
    .contact-info {
        margin-bottom: 15px;
    }
    
    .contact-info i {
        color: white;
        margin-right: 10px;
        width: 20px;
    }

    /* Useful Links */
    .useful-links {
        list-style: none;
        padding-left: 0;
    }
    
    .useful-links li {
        margin-bottom: 12px;
    }
    
    .useful-links li i {
        color: white;
        margin-right: 8px;
    }
    
    .useful-links a {
        color: white;
        text-decoration: none;
        transition: all 0.3s ease;
    }
    
    .useful-links a:hover {
        color: rgb(255, 103, 31);
        margin-left: 5px;
    }

    /* Elevate Section */
    .elevate-section {
        background-color: rgb(255, 103, 31) !important;
        padding: 2rem !important;
        border-radius: 8px !important;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    
    .elevate-section h3 {
        color: white !important;
        font-weight: 700;
        margin-bottom: 1.2rem;
        text-align: left;
    }
    
    .elevate-section p {
        color: white !important;
        text-align: left;
        line-height: 1.6;
        margin-bottom: 0;
    }

    /* Newsletter Section */
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

    /* Newsletter Input Field */
    .newsletter-input-group {
        position: relative;
        display: flex;
        width: 100%;
        border-radius: 4px;
        overflow: hidden;
    }

    .newsletter-input-group input {
        flex: 1;
        padding: 12px 15px;
        border: 1px solid #ddd;
        border-radius: 4px 0 0 4px;
        font-size: 16px;
        outline: none;
        height: 46px;
        border-right: none;
    }

    .newsletter-input-group button {
        padding: 0 25px;
        background-color: rgb(255, 103, 31) !important;
        color: white !important;
        border: none !important;
        font-weight: bold;
        font-size: 16px;
        cursor: pointer;
        height: 46px;
        border-radius: 0 4px 4px 0;
        text-transform: uppercase;
    }

    .newsletter-input-group input:focus {
        border-color: rgb(255, 103, 31) !important;
        box-shadow: 0 0 0 0.2rem rgba(255, 103, 31, 0.25) !important;
        outline: none !important;
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

    /* Responsive adjustments */
    @media (max-width: 992px) {
        .footer {
            padding-top: 150px;
        }
        
        .footer .row > div {
            margin-bottom: 2rem;
        }
        
        .elevate-section {
            margin-bottom: 2rem;
        }
    }
    
    @media (max-width: 768px) {
        .footer {
            padding-top: 120px;
            margin-top: -80px;
        }
    }


    .footer-hover-text {
    visibility: hidden;
    opacity: 0;
    background: #222;
    color: #fff;
    position: absolute;
    left: 50%;
    top: 110%;
    transform: translateX(-50%);
    padding: 4px 12px;
    border-radius: 5px;
    font-size: 13px;
    white-space: nowrap;
    z-index: 10;
    transition: opacity 0.3s;
    pointer-events: none;
}

.btn-social:hover .footer-hover-text {
    visibility: visible;
    opacity: 1;
}
</style>

<!-- Newsletter Section -->
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

<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">
    <div class="container pb-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-4">
                <div class="elevate-section">
                    <h3>Elevate Your Gifting Game with Us!</h3>
                    <p style="text-align: justify;">
                        Discover premium corporate and custom gift solutions with KJ Creation. We offer quality, creativity, and customization to leave a lasting impression. Explore our range today!
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <h6 class="footer-section-title text-start text-uppercase mb-4">Contact</h6>
                <div class="contact-info">
                    <p><i class="fas fa-map-marker-alt"></i> Rajkot, Gujarat</p>
                    <p><i class="fas fa-phone-alt"></i> +91 96628 76676</p>
                    <p><i class="fas fa-envelope"></i> kjcreations4all@gmail.com</p>
                </div>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/profile.php?id=61564031892075" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/kjcreations4all?igsh=bHQzanh5NDQzZ2V2" target="_blank"><i class="fab fa-instagram"></i></a>
                   <a class="btn btn-outline-light btn-social" href="#" style="position:relative;">
        <i class="fab fa-whatsapp"></i>
        <span class="footer-hover-text">+91 96628 76676</span>
    </a>
    <a class="btn btn-outline-light btn-social" href="mailto:kjcreations4all@gmail.com" style="position:relative;">
        <i class="fa fa-envelope"></i>
        <span class="footer-hover-text">kjcreations4all@gmail.com</span>
    </a>
                </div>
            </div>
            <div class="col-lg-5 col-md-12">
                <div class="row gy-5 g-4">
                    <div class="col-md-6">
                        <h6 class="footer-section-title text-start text-uppercase mb-4">Useful Links</h6>
                        <ul class="useful-links">
                            <li><i class="fas fa-angle-right"></i> <a href="index.php">Home</a></li>
                            <li><i class="fas fa-angle-right"></i> <a href="about.php">About us</a></li>
                            <li><i class="fas fa-angle-right"></i> <a href="user_products.php">Products</a></li>
                            <li><i class="fas fa-angle-right"></i> <a href="user_offers.php">Offers & Reviews</a></li>
                            <li><i class="fas fa-angle-right"></i> <a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h6 class="footer-section-title text-start text-uppercase mb-4">Wishings</h6>
                        <div class="image-container">
                            <?php if ($image): ?>
                                <img src="uploaded_images/<?php echo $image['image']; ?>" 
                                     alt="<?php echo $image['title']; ?>" class="img-fluid rounded">
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
                    Designed By <a href="">DipeshPatadiya</a>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu d-flex justify-content-end">
                        <a href="">Home</a>
                        <a href="">About Us</a>
                        <a href="">Products</a>
                        <a href="">Offers & Reviews</a>
                        <a href="">Contact</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->