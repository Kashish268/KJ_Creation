<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>KJ</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <!-- Favicons -->
  <link href="users/img/kj_creation.png" rel="icon">
  <link href="users/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link href="users/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS -->
  <link href="users/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="users/lib/animate/animate.min.css" rel="stylesheet">
  <link href="users/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="users/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="users/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- Main Stylesheet -->
  <link href="users/css/user2.css" rel="stylesheet">

  <style>

html{
    font-size:62.5%;
    scroll-behavior: smooth;
}

*{
    padding:0;
    margin:0;
    box-sizing:border-box;
}

*:focus {
    outline: none;
    box-shadow: 0 0 0 0.8rem rgba(253,242,233,0.5)
}


     
 .testimonial{
    padding: 2rem;
    border-radius:11px;
    background-color:#ab96fb;
    color: #fff;
    display: grid;
    grid-template-columns: 0.5fr 0.7fr;
    align-items: center;
    justify-content:center;
    width: 85%;
    margin: 10rem auto;
    position: relative;
    /* padding-left: 9.6rem; */
    border: 2px solid #ffe;
}    
     
.carousel-img{
    height: 22rem;
    width: 25rem;
    border-radius: 11px;
}

.testimonial-img{
    margin-bottom:1.2rem;
    transform: scale(1.5);
}

.testimonial-text {
    font-size:1.8rem;
    line-height:1.8;
    margin-bottom:1.6rem;
}

.customer-name {
    font-size:1.6rem;
    color: #e6fef5;
}

.testimonial-job{
    font-size:1.3rem;
    color: #ffe;
}

.btn-carousel{
    position: absolute;   
    border: none;
    height: 4rem;
    width: 4rem;
    border-radius: 50%;
    display:flex;
    align-items: center;
    justify-content:center;
    cursor: pointer;
}

.carousel-icon{
    font-size: 2.4rem;
    background-color: #fff;
    color:rgb(22, 125, 80);
    border: none;
}

.btn-left{
    left: 0;
    top: 50%;
    transform: translate(-50%, -50%);
}

.btn-right{
    right: 0;
    top: 50%;
    transform: translate(50%, -50%);
}
.dots{
    position: absolute;
    top:100%;
    display:flex;
    gap: 2rem;
    transform: translate(300%,30%);
}

.btn-dot{
    height: 1.5rem;
    width: 1.5rem;
    border-radius: 50%;
    background-color: #fff;
    border: 1px solid #ab96fb;
}

.btn-dot-active{
    background-color:#ab96fb;
}





/*////////////////////////////////////////////
////////////////media queries///////////////////
///////////////////////////////////////////////*/

@media(min-width:1616px){
    .testimonial{
    border-radius:11px;
    min-width: 150rem;
    padding-left: 15rem;
    border: 4px solid #ffe;
    }
    
    .carousel-img{
    height: 100%;
    width: 25rem;
    transform: scale(1.3);
}

.testimonial-text {
    font-size:3.0rem;
    line-height:2.0;
    margin-bottom:3.0rem;
}

.customer-name {
    font-size:2.4rem;
    
}

.testimonial-job{
    font-size:2.0rem;
    color: #ffe;
}



}



@media(min-width:1025px){
  .testimonial{
    border-radius:11px;
    min-width: 100rem;
    padding-left: 15rem;
    border: 3px solid #ffe;
} 

.carousel-img{
    height: 100%;
    width: 25rem;
    border-radius: 1.1rem;
    transform: scale(1.3);
}


.testimonial-text {
    font-size:2.4rem;
    line-height:2.0;
    margin-bottom:2.0rem;
}

.customer-name {
    font-size:2.0rem;
    color: #e6fef5;
}

.testimonial-job{
    font-size:1.8rem;
    color: #ffe;
}

.btn-dot{
    height: 3rem;
    width: 3rem;
}
  
  .btn-dot-active{
    background-color:#ab96fb;
}


}



    
    
@media (max-width:862px){
    .testimonial{
        width: 60rem;
        height:100%;
        grid-template-columns: 1fr;
        grid-template-rows: 1fr 1fr;
        padding: 3rem;
    }
    
    .carousel-img{
    height: auto;
    width: 70%;
    border-radius: 1.1rem;
    overflow: hidden;
    justify-self: center;
    align-self:center;
    transform: scale(1.0);
    
}

.dots{
    transform: translate(0,25%);
}


}


@media(max-width:810px){
    
    
    .testimonials{
        padding-bottom: 12rem;
       
    }
}

@media (max-width:640px){
    .testimonial{
        width: 50rem;
           
    }
    
     .carousel-img{
         height: auto;
         width:70%;
     }
}

@media (max-width:585px){
    .testimonial{
        width: 45rem;
           
    }
    
}




@media (max-width:550px){
    .testimonial{
        width: 40rem;
           
    }
    
    
    

@media(max-width){
     .testimonial{
        width: 37rem;
           
    }
}

@media(max-width:498px){

    .testimonials {
    padding:0 2.4rem 12rem 2.4rem;

}

}


@media (max-width:445px){
  .testimonials {
    padding:0 2.4rem 12rem 2.4rem;
    width: 32rem;

}
}


@media (max-width:400px){
     .testimonial{
        width: 30rem;         
    }
    
     .carousel-img{
         height: auto;
         width: 80%;
     } 
     }
    
    
   @media (max-width:354px){
     .testimonial{
        width: 25rem;
           
    }
        
    
     .carousel-img{
         height: auto;
         width: 90%;
     } 
    
}

@media (max-width:300px){
     .testimonial{
        width: 20rem;
           
    }
    
     .carousel-img{
         height: auto;
         width: 80%;
     } 
    
}

@media (max-width:310px){
    .carousel-img{
         height: auto;
         width: 80%;
     } 
}

@media (max-width:240px){
     .testimonial{
        width: 25rem;  
     }
         .carousel-img{
         height: auto;
         width: 90%;
    }
    
     
    


  </style>
  </head>
  <body>
  <main id="main">
    </main>

    <figure class="testimonial carousel-1">

<img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&q=85&fm=jpg&crop=entropy&cs=srgb&dl=linkedin-sales-solutions-pAtA8xe_iVM-unsplash.jpg" alt="image of customer steve Miller" 

id="testimonial-img" class="carousel-img testimonial-img" >

<blockquote>

         <p class="testimonial-text">"sosanya Upholsteries and furnitures is a life saver! I just started a company, so there's no time to search for furnitures. too much paper works to go through and interiors to design.They took care of it all!"</p>

    <p class="customer-name testimonial-name">&mdash;<span id="testimonial-name">steve miller</span></p>

    <p class="testimonial-job"> web developer at EDC</p>

</blockquote>  

<button class="btn-carousel btn-left" >

 <ion-icon name="chevron-back-circle-outline" class="carousel-icon"></ion-icon>

</button>



 <button class="btn-carousel btn-right" >

 <ion-icon name="chevron-forward-circle-outline" class="carousel-icon"></ion-icon>

</button>

<div class="dots">

 <button class="btn-dot btn-dot-active">

     &nbsp;

 </button>

 <button class="btn-dot">

     &nbsp;

 </button>

 <button class="btn-dot">

     &nbsp;

 </button>

 <button class="btn-dot">

     &nbsp;

 </button>

</div>

</figure>       



    </main>
  



</body>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.3.2/jquery-migrate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script src="users/lib/touchSwipe/jquery.touchSwipe.min.js"></script>
<script src="users/js/main.js" defer></script>
<script>
    "use strict";

const testimonials = [
  {
    name: "Steve Miller", 
    
   work: "Actor at Hollywood Films Studio",
   
    photoUrl:"https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixlib=rb-4.0.3&q=85&fm=jpg&crop=entropy&cs=srgb&dl=ali-morshedlou-WMD64tMfc4k-unsplash.jpg",
    
    text: "sosanya Upholsteries and furnitures is a life saver! I just started a company, so there's no time to search for furnitures. too much paper works to go through and interiors to design.They took care of it all!"
  },
  {
    name: " David Carter ", 
    
   work: "Lawyer at Smith & Associates Law Firm",
   
    photoUrl:"https://images.unsplash.com/photo-1504791635568-fa4993808e0a?ixlib=rb-4.0.3&q=85&fm=jpg&crop=entropy&cs=srgb&dl=royal-anwar-u5T5b3lNYw8-unsplash.jpg",
    
    text: "I recently purchased furniture from Sosanya Upholsteries and Furnitures and I am extremely satisfied. The staff was helpful and the furniture is beautiful !"
  },
  {
    name: "Olivia Davis ", 
    
   work: "Graphic Designer at google",
   
    photoUrl:"https://images.unsplash.com/photo-1543132220-4bf3de6e10ae?ixlib=rb-4.0.3&q=85&fm=jpg&crop=entropy&cs=srgb&dl=redd-f-v6771a4avV4-unsplash.jpg",
    
    text: "Sosanya Upholsteries and Furnitures exceeded my expectations. Their furniture is top-notch in terms of quality and design. I highly recommend them!",
  },
  {
      name: "Benjamin Wilson ", 
    
   work: "Accountant at ABC Accounting Services",
   
    photoUrl:"https://images.unsplash.com/photo-1534030347209-467a5b0ad3e6?ixlib=rb-4.0.3&q=85&fm=jpg&crop=entropy&cs=srgb&dl=gregory-hayes-h5cd51KXmRQ-unsplash.jpg",
    
    text: "Sosanya Upholsteries and Furnitures offers excellent furniture options. I am impressed with the craftsmanship and attention to detail. Highly recommended!"  },
];

const imgEl = document.querySelector("#testimonial-img");
const workEl = document.querySelector(".testimonial-job");
const textEl = document.querySelector(".testimonial-text");
const usernameEl = document.querySelector("#testimonial-name");
const btnRight = document.querySelector('.btn-right');
const btnLeft = document.querySelector('.btn-left');
const carouselBtn = document.querySelectorAll('.btn-dot')
let idx = 0;

const updateTestimonial= ()=> {
  const { name, work, photoUrl, text } = testimonials[idx];

  imgEl.src = photoUrl;
  textEl.innerText = text;
  usernameEl.innerText = name;
  workEl.innerText = work;
  
  carouselBtn.forEach(btn=>btn.classList.remove('btn-dot-active'))
    
 
    carouselBtn[idx].classList.add('btn-dot-active')

}


const stopSlideshow = () =>
  clearInterval(intervalId);


  let intervalId;

const startSlideshow = () => intervalId = setInterval(nextTestimonial, 4000);




const nextTestimonial = () => {
  idx++;
  if (idx === testimonials.length) {
    idx = 0;
  }
  updateTestimonial();
  stopSlideshow()
  startSlideshow();
  
  }
  
  const previousTestimonial = () => {
  idx--;
  if (idx < 0) {
    idx = testimonials.length - 1;
  }
  updateTestimonial();
  stopSlideshow()
  startSlideshow();
}


btnRight.addEventListener('click', nextTestimonial);
btnLeft.addEventListener('click', previousTestimonial);




updateTestimonial();
startSlideshow();


carouselBtn.forEach((btn,i) =>{
    
    btn.addEventListener('click',function(){
    carouselBtn.forEach(btn=>btn.classList.remove('btn-dot-active'))
    
    idx = i;
    btn.classList.add('btn-dot-active')
   updateTestimonial();
  stopSlideshow()
  startSlideshow();
    }) })

</script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->
<!-- Contact Form JavaScript File -->
<!-- <script src="users/contactform/contactform.js"></script> -->

<!-- Template Main Javascript File -->
</html>


