 <!--HTML BEGINS-->
<!doctype html>
<html lang="en">
  <head>

  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
<link rel="stylesheet" href="css/qlstyle.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">


  <title>Royal Coast Academy</title>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

    

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://fontawesome.com/icons/phone?s=solid&f=classic" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/aos.css">
   


<!-- //Go to top Button -->
<button onclick="topFunction()" class="top-btn" id="myBtn" title="Go to top"><img width="50%" src="images/chevron_up1.png" alt=""></button>
</head>

<body>


<!-- header section starts  -->
<div class="scroll-div">
    <div class="scroll-wrapper">
      <div class="scroll-text">
        <h1>Have any questions? <i class="fa-solid fa-phone"></i> Call us on +2348027664776 +2347059695895 +2349030009521 <i class="fa-solid fa-envelope"></i> royalcoastacademy@gmail.com or Visit us @ 10 Oluwole Daramola Crescent, Isheri Oke 102109, Ojodu Berger, Ogun State.</h1>
      </div>
    </div>
  </div>



<header class="header">


   <a href="#" class="logo">
      <img src="images/RCALogo.png" width="45" alt="Royal Coast Academy Logo">
      Royal Coast Academy
   </a>


   <nav class="navbar">

         <div id="close-navbar" class="fa-sharp fa-solid fa-xmark"></div>
         <?php

            $file_names = ['index.php', 'calender.php', 'contact.php', 'about.php', 'courses.php'];
            $current_page = basename($_SERVER['PHP_SELF']);
            $links = array(
               array('text' => 'HOME', 'href' => 'index.php'),
               array('text' => 'ABOUT US', 'href' => 'about.php'),
               array('text' => 'ADMISSIONS', 'href' => 'admissions.php'),
               array('text' => 'EVENTS', 'href' => 'calender.php'),
               array('text' => 'CONTACT US', 'href' => 'contact.php'),
             );

            

             foreach ($links as $link) {
               $style = ($link['href'] == $current_page) ? 'style="color: #f670f2;"' : '';
               echo '<a href="' . $link['href'] . '" ' . $style . '>' . $link['text'] . '</a>';
             }
         ?>

      

   </nav>

   <div class="icons">
      <div id="menu-btn" class="fa-solid fa-bars"></div>
   </div>

</header>

<!-- account form section starts  -->

<!-- <div class="account-form">

   <div id="close-form" class="fas fa-times"></div>

   <div class="buttons">
      <span class="btn active login-btn">login</span>
      <span class="btn register-btn">register</span>
   </div>

   <form class="login-form active" action="">
      <h3>login now</h3>
      <input type="email" placeholder="enter your email" class="box">
      <input type="password" placeholder="enter your password" class="box">
      <div class="flex">
         <input type="checkbox" name="" id="remember-me">
         <label for="remember-me">remember me</label>
         <a href="#">forgot password?</a>
      </div>
      <input type="submit" value="login now" class="btn">
   </form>

   <form class="register-form" action="">
      <h3>register now</h3>
      <input type="email" placeholder="enter your email" class="box">
      <input type="password" placeholder="enter your password" class="box">
      <input type="password" placeholder="confirm your password" class="box">
      <input type="submit" value="register now" class="btn">
   </form> -->

   <!-- account form section ends -->

<!-- header section ends -->
</div>

<script>
    AOS.init({
        duration: 800, // animation duration in milliseconds
        offset: 200, // offset (in pixels) from the top of the page for the start of the animation
        easing: 'ease-out', // easing function to use for the animation
        once: true, // only animate elements once on page load
    });

      // Refresh AOS on scroll event
      window.addEventListener('scroll', function() {
      AOS.refresh();
});
  </script>
  
</body>