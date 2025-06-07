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

<section id="contact" class="section-bg wow fadeInUp" style="margin-top: -120px;">
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
  <div id="sendmessage" style="display: none; color:white;">Thanks for getting in touch! We've received your message and will respond soon.</div>
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
    <?php include_once 'footer.php'; ?>
    <a href="" class="whatsapp-fixed" target="_blank" title="WhatsApp">
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
