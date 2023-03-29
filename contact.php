<?php include_once "partials/header.php"; ?>


<!-- header section ends -->

<section class="heading-link">
   <h3>contact <span style="color: #e070dd;">us</span></h3>
   <p> <a href="home.html">home</a> / contact </p>
</section>

<!-- contact section starts  -->

<section class="contact">

   <h1 class="heading"> get in touch </h1>

   <div class="icons-container">

      <div class="icons">
         <i class="fas fa-clock"></i>
         <h3>opening hours :</h3>
         <p>00:07am to 00:06pm</p>
      </div>

      <div class="icons">
         <i class="fas fa-phone"></i>
         <h3>phone :</h3>
         <p>+123-456-7890</p>
         <p>+111-222-3333</p>
      </div>

      <div class="icons">
         <i class="fas fa-envelope"></i>
         <h3> email : </h3>
         <p>shaikhanas@gmail.com</p>
         <p>anasbhai@gmail.com</p>
      </div>

      <div class="icons">
         <i class="fas fa-map"></i>
         <h3>address :</h3>
         <p>mumbai, india - 400104</p>
      </div>

   </div>

   <div class="row">

      <div class="image">
         <img src="images/contact-img.png" alt="">
      </div>

      <form action="">
         <h3>send us a message</h3>
         <input type="text" placeholder="name" class="box">
         <input type="email" placeholder="email" class="box">
         <input type="number" placeholder="phone" class="box">
         <textarea name="" class="box" placeholder="message" id="" cols="30" rows="10"></textarea>
         <input type="submit" value="send message" class="btn">
      </form>

   </div>

</section>

<!-- contact section ends -->

<!-- faq section starts  -->

<!-- the contact us map -->
<?php
// Set the location to be shown on the map
$latitude = 37.7749;
$longitude = -122.4194;

// Set the Google Maps API key (replace with your own key)
$api_key = 'AIzaSyA1icNMxFZLgneTBqsQpyh8jsHxp1OYG5E';

// Define the URL for the Google Maps Static API
$url = "https://maps.googleapis.com/maps/api/staticmap?center={$latitude},{$longitude}&zoom=14&size=400x400&key={$api_key}";

// Display the map image
echo "<img src='{$url}'>";
?>
<!-- the contact us map ends -->


<section class="faq">

   <h1 class="heading">frequently asked questions</h1>

   <div class="accordion-container">

      <div class="accordion active">
         <div class="accordion-heading">
            <h3>how to contact for help?</h3>
            <i class="fas fa-angle-down"></i>
         </div>
         <p class="accordion-content">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit consequatur molestias deserunt facere laborum doloremque fuga, quae aut. Recusandae officia quis temporibus! Magnam mollitia nostrum voluptatibus deserunt quidem. Natus, quo.
         </p>
      </div>

      <div class="accordion">
         <div class="accordion-heading">
            <h3>what is the best career in 2022?</h3>
            <i class="fas fa-angle-down"></i>
         </div>
         <p class="accordion-content">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit consequatur molestias deserunt facere laborum doloremque fuga, quae aut. Recusandae officia quis temporibus! Magnam mollitia nostrum voluptatibus deserunt quidem. Natus, quo.
         </p>
      </div>

      <div class="accordion">
         <div class="accordion-heading">
            <h3>how much fees for web development?</h3>
            <i class="fas fa-angle-down"></i>
         </div>
         <p class="accordion-content">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit consequatur molestias deserunt facere laborum doloremque fuga, quae aut. Recusandae officia quis temporibus! Magnam mollitia nostrum voluptatibus deserunt quidem. Natus, quo.
         </p>
      </div>

      <div class="accordion">
         <div class="accordion-heading">
            <h3>can I choose my own tutor?</h3>
            <i class="fas fa-angle-down"></i>
         </div>
         <p class="accordion-content">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit consequatur molestias deserunt facere laborum doloremque fuga, quae aut. Recusandae officia quis temporibus! Magnam mollitia nostrum voluptatibus deserunt quidem. Natus, quo.
         </p>
      </div>

      <div class="accordion">
         <div class="accordion-heading">
            <h3>what payment methods are availabe?</h3>
            <i class="fas fa-angle-down"></i>
         </div>
         <p class="accordion-content">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit consequatur molestias deserunt facere laborum doloremque fuga, quae aut. Recusandae officia quis temporibus! Magnam mollitia nostrum voluptatibus deserunt quidem. Natus, quo.
         </p>
      </div>

      <div class="accordion">
         <div class="accordion-heading">
            <h3>can I have free trial for a month?</h3>
            <i class="fas fa-angle-down"></i>
         </div>
         <p class="accordion-content">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit consequatur molestias deserunt facere laborum doloremque fuga, quae aut. Recusandae officia quis temporibus! Magnam mollitia nostrum voluptatibus deserunt quidem. Natus, quo.
         </p>
      </div>

   </div>

</section>

<!-- faq section ends -->

<!-- logo slider starts  -->

<section class="logo-container">
   <div class="swiper logo-slider">
      <div class="swiper-wrapper">
         <div class="swiper-slide"> <img src="images/RCALogo.png" alt=""> </div>
         <div class="swiper-slide"> <img src="images/RCALogo.png" alt=""> </div>
         <div class="swiper-slide"> <img src="images/RCALogo.png" alt=""> </div>
         <div class="swiper-slide"> <img src="images/RCALogo.png" alt=""> </div>
         <div class="swiper-slide"> <img src="images/RCALogo.png" alt=""> </div>
      </div>
   </div>
</section>

<!-- logo slider ends -->


<?php include_once "partials/footer.php"; ?>



<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>