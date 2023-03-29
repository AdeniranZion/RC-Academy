 <!--HTML BEGINS-->
<!doctype html>
<html lang="en">
  <head>

  <title>Royal Coast Academy</title>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">


   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://fontawesome.com/icons/phone?s=solid&f=classic" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/aos.css">
   


<!-- //Go to top Button -->
<button onclick="topFunction()" class="top-btn" id="myBtn" title="Go to top"><img width="50%" src="images/chevron_up1.png" alt=""></button>


<!-- header section starts  -->

<header class="header">

   <a href="#" class="logo"> <img style="margin-bottom: -3%;" src="images/RCALogo.png" width="45"> Royal Coast Academy </a>

   <nav class="navbar">

         <div id="close-navbar" class="fa-sharp fa-solid fa-xmark"></div>
         <?php

            $file_names = ['index.php', 'calender.php', 'contact.php', 'about.php', 'courses.php'];
            $current_page = basename($_SERVER['PHP_SELF']);
            $links = array(
               array('text' => 'HOME', 'href' => 'index.php'),
               array('text' => 'ABOUT', 'href' => 'about.php'),
               array('text' => 'COURSES', 'href' => 'courses.php'),
               array('text' => 'CONTACT US', 'href' => 'contact.php'),
               array('text' => 'EVENTS', 'href' => 'calender.php')
             );

            

             foreach ($links as $link) {
               $style = ($link['href'] == $current_page) ? 'style="color: #f670f2;"' : '';
               echo '<a href="' . $link['href'] . '" ' . $style . '>' . $link['text'] . '</a>';
             }
         ?>

      

   </nav>

   <div class="icons">
      <div id="account-btn" class="fa-solid fa-user"></div>
      <div id="menu-btn" class="fa-solid fa-bars"></div>
   </div>

</header>

<!-- account form section starts  -->

<div class="account-form">

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
   </form>

   <!-- account form section ends -->

<!-- header section ends -->
</div>
</head>
<body>