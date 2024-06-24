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
        <h1>Have any questions? <i class="fa-solid fa-phone"></i> Call us on +2348027664776 +2347059695895 +2349030009521 <i class="fa-solid fa-envelope"></i> royalcoastacademy@gmail.com or <i class="fa-solid fa-location-dot"></i> Visit us @ 10 Oluwole Daramola Crescent, Isheri Oke 102109, Ojodu Berger, Ogun State.</h1>
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
            $file_names = ['index.php', 'calendar.php', 'contact.php', 'about.php', 'courses.php', 'admissions.php', 'admission_form.php'];
            $current_page = basename($_SERVER['PHP_SELF']);
            $links = array(
               array('text' => 'HOME', 'href' => 'index.php'),
               array('text' => 'ABOUT US', 'href' => 'about.php'),
               array('text' => 'ADMISSIONS', 'href' => 'admissions.php'),
               array('text' => 'EVENTS', 'href' => 'calendar.php'),
               array('text' => 'CONTACT US', 'href' => 'contact.php'),
            );

            echo '<nav>'; // Start the navigation container

            foreach ($links as $link) {
               // Check if the link is the current page or if it's the admissions link when on admission_form.php
               $style = ($link['href'] == $current_page || ($link['href'] == 'admissions.php' && $current_page == 'admission_form.php')) ? 'style="color: #e070dd;"' : '';

               if ($link['text'] == 'ADMISSIONS') {
                  echo '<div class="dropdown">';
                  echo '<a href="' . $link['href'] . '" ' . $style . '>' . $link['text'] . '</a>';
                  echo '<div class="dropdown-content">';
                  
                  // Set style for dropdown links, excluding the current page
                  echo '<a href="admission_form.php"' . ($current_page == 'admission_form.php' ? ' style="color: #e070dd;"' : '') . '>Admission Form</a>';
                  echo '<a href="admissions.php"' . ($current_page == 'admissions.php' ? ' style="color: #e070dd;"' : '') . '>Admission Details</a>';
                  
                  echo '</div>';
                  echo '</div>';
               } else {
                     echo '<a href="' . $link['href'] . '" ' . $style . '>' . $link['text'] . '</a>';
               }
             }

            echo '</nav>'; // End the navigation container
?>



      

   </nav>

   <div class="icons">
      <div id="menu-btn" class="fa-solid fa-bars"></div>
   </div>

</header>


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