<?php include_once "partials/header.php"; ?>
<html>
<head> <link rel="stylesheet" href="iconpack/assets/Pe-icon-7-stroke.css"></head>  

<body>

<!-- home section starts  -->


<section class="home">
   <div class="swiper home-slider">
      <div class="swiper-wrapper">
         <section class="swiper-slide slide" style="background-image: url(images/web1.png);" data-aos="fade-in" data-aos-duration="1000">
            <div class="content" data-aos="fade-up" data-aos-duration="1000">
               <h3>"Discover the World of Knowledge: Explore Royal Coast Academy"</h3>
               <p style="color: rgb(240, 248, 255);">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas impedit labore dolore unde, quidem corrupti?</p>
               <a href="#" class="btn">Explore</a>
            </div>
         </section>
         <section class="swiper-slide slide" style="background-image: url(images/home-slide-2.jpg);">
            <div class="content">
               <h3>the best courses you will find find here!</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas impedit labore dolore unde, quidem corrupti?</p>
               <a href="#" class="btn">get started</a>
            </div>
         </section>
         <section class="swiper-slide slide" style="background-image: url(images/home-slide-3.jpg);">
            <div class="content">
               <h3>the best courses you will find find here!</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas impedit labore dolore unde, quidem corrupti?</p>
               <a href="#" class="btn">get started</a>
            </div>
         </section>
      </div>
      <div class="swiper-pagination"></div>
   </div>
</section>

<script>
   src="https://code.jquery.com/jquery-3.6.0.min.js">

   $(document).ready(function() {
      // preload the images
      var images = ['images/web1.png', 'images/home-slide-2.jpg', 'images/home-slide-3.jpg'];
      $.each(images, function(i, img) {
         $('<img/>')[0].src = img;
      });

      $('.home-slider .swiper-slide').hide(); // hide all slides initially
   
      // function to show slides with fade-in effect
      function showSlides() {
         var currentIndex = $('.home-slider .swiper-slide:visible').index();
         var nextIndex = currentIndex === 2 ? 0 : currentIndex + 1;
         $('.home-slider .swiper-slide').eq(nextIndex).fadeIn(1000, function() {
            setTimeout(showSlides, 2500); // show next slide after 2.5 seconds
         });
      }
   
      // show first slide to start animation
      $('.home-slider .swiper-slide').eq(0).fadeIn(1000, function() {
         setTimeout(showSlides, 2500); // show next slide after 2.5 seconds
      });
   });
</script>


<!-- home section ends -->


<!-- subjects section starts  -->

<section class="about">

   <div class="imgbox" data-aos="fade-right" data-aos-duration="1000">
      <img style="width: 90%" src="images/wids2.jpg" alt="">
   </div>

   <div class="content" data-aos="fade-left" data-aos-duration="1000">
      <h3 style="font-size: 48px;" class="about-title">Welcome to Royal Coast Academy</h3>
      <p style="font-size: 20px;">At Royal Coast Academy, we believe that education is the foundation of a successful life, and we are committed to providing our students with the best possible education. Our curriculum is designed to meet the needs of all students, regardless of their abilities or interests. We have a team of highly qualified and experienced teachers who are dedicated to helping students achieve their full potential.</p>
      <a href="about.php" class="btn">Read more</a>
   </div>

</section>


<!-- Icons Dsc -->
<section data-aos="fade-up" data-aos-duration="1500" style="display: flex; justify-content: center; align-items: center;">
  <div style="background-color: #fff; padding: 20px; display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); grid-gap: 20px; width: 80%;">
    <div style="background-color: white; text-align: center;">
      <i class="pe-7s-science" style="color: #e070dd; font-size: 11em;"></i>
      <h3 style="margin: 10px 0; font-size: 3em; font-weight:light; color:#444;">Center for Excellence</h3>
      <p style="font-size: 1.6em; padding: 20px;">We are dedicated to giving our pupils the greatest education possible.</p>
    </div>
    <div style="background-color: white; text-align: center;">
      <i class="pe-7s-light" style="color: #e070dd; font-size: 11em;"></i>
      <h3 style="margin: 10px 0; font-size: 3em; font-weight:light; color:#444;">Citadel of Knowledge</h3>
      <p style="font-size: 1.6em; padding: 20px;">We are dedicated to giving our pupils the greatest education possible.</p>
    </div>
    <div style="background-color: white; text-align: center;">
       <i class="pe-7s-gift" style="color: #e070dd; font-size: 11em;"></i>
      <h3 style="margin: 10px 0; font-size: 3em; font-weight:light; color:#444;">Developing A Total Child</h3>
      <p style="font-size: 1.6em; padding: 20px;">We are dedicated to giving our pupils the greatest education possible.</p>
    </div>
  </div>
</section>


<!-- Welcome Speech -->
<section data-aos="fade-in" data-aos-duration="2500" class="intro-section" style="display: flex; justify-content: center; align-items: center;">
  <div style="flex-basis: 50%; padding: 20px;">
     <h2 style="font-size: 3.9em; font-weight: bolder; margin-bottom: 20px;">An Introduction from the Principal</h2>
     <p style="font-size: 1.6em; line-height: 1.6; margin-bottom: 20px;">I welcome you to Royal Coast Academy's official website on behalf of the administration, faculty, and students there. Excellence is our watchword here at Royal Coast Academy. We think that anything worth doing is worth doing well, and we work to infuse this quality in all of our activities and Wards. Every child committed to our care is guaranteed a top-notch education from qualified teachers. For all of our children, we want to lay a strong foundation that will support them throughout their academic and professional careers. We are also concerned with our students' physical, social, and psychological growth, helping them to mature into accountable, impactful citizens. Enjoy the journey.<br><br>Principal</p>
     <a href="#" style="background-color: #e070dd; color: #fff; padding: 10px 20px; text-decoration: none; border-radius: 30px;">Read More</a>
  </div>
  <div style="width: 300px; height: 450px;">
     <img src="images/mama.jpg" alt="Image description" style="width: 100%; height: 100%;">
  </div>

  <style>
  @media screen and (max-width: 768px) {
     .intro-section {
        flex-direction: column;
     }
     .intro-section div:last-child {
        width: 100%;
     }
  }
  </style>
</section>




<!-- About Us Header-->
<div class="parent" data-aos="fade-up" data-aos-duration="1000">
   <div class="containerbackground">
          <h3 style="font-size: 70px;" class="about-title">About <span style="color: #e070dd;">Us</span></h3>
   </div>
  <div class="text">
    <h3 style="font-size: 48px;" class="about-title">About <span style="color: #e070dd;">Us</span></h3>
  </div>
</div>


<!-- About Us-->
<section class="about">

   <div class="content" data-aos="fade-left" data-aos-duration="1000">
      <p style="font-size: 20px;">At Royal Coast Academy, we understand the importance of technology in today's world, and we are committed to integrating technology into our curriculum. We have state-of-the-art computer labs, and our students have access to the latest educational software and online resources. We also have a well-equipped science laboratory that allows our students to explore and experiment with science concepts in a hands-on environment.</p>
      <a href="about.php" class="btn">Read more</a>
   </div>
   <div class="imgbox" data-aos="fade-right" data-aos-duration="1000">
      <img style="width: 90%" src="images/wids2.jpg" alt="">
   </div>

</section>

<section style=" background-color: #FFE7FE;" class="about" data-aos="fade-up" data-aos-duration="1000">

   <div class="content">
      <div class="mybox">
         <h3 style="font-size: 48px;" class="about-title">About <span style="color: #f670f2;">Us</span></h3>
         <p style="font-size: 20px;">We're all about Empowering Young Minds and Preparing Students for Success using innovative Teaching methods.</p>
         <a href="about.php" class="btn">Read more</a>
      </div>
      <span><img style="width: 20%" src="images/ab2.png" alt="">  </span>

   </div>

</section>

<!-- Mission and Vision -->
<section data-aos="fade-up" data-aos-duration="1500" style="display: flex; justify-content: center; align-items: center;">
  <div style="background-color: #fff; padding: 20px; display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); grid-gap: 60px; width: 75%;">
      <div style="background-color: white; text-align: center; border-radius: 5%; box-shadow: 0 0 30px rgb(208,208,208);">
               <div style="padding: 10px;">
                  <i class="pe-7s-search" style="color: #e070dd; font-size: 11em;"></i>
               </div>
            <h3 style="margin: 10px 0; font-size: 3em; font-weight:light; color:#444;">Our Vision</h3>
            <p style="font-size: 1.8em; padding: 20px;">At Royal Coast Academy, we are dedicated to giving our pupils the greatest education possible since we think that education is the cornerstone of a successful life.</p>
         </div>
         <div style="background-color: white; text-align: center; border-radius: 5%; box-shadow: 0 0 30px rgb(208,208,208);">
            <div style="padding: 10px;">
                <i class="pe-7s-arc" style="color: #e070dd; font-size: 11em;"></i>
            </div>
            <h3 style="margin: 10px 0; font-size: 3em; font-weight:light; color:#444;">Our Mission</h3>
            <p style="font-size: 1.8em; padding: 20px;">At Royal Coast Academy, we also understand the importance of technology in today's world, and we are committed to integrating technology into our curriculum.</p>
         </div>
         <div style="background-color: white; text-align: center; border-radius: 5%; box-shadow: 0 0 30px rgb(208,208,208);">
               <div style="padding: 10px;">
                  <i class="pe-7s-gift" style="color: #e070dd; font-size: 11em;"></i>
               </div>
            <h3 style="margin: 10px 0; font-size: 3em; font-weight:light; color:#444;">Our Values</h3>
            <p style="font-size: 1.8em; padding: 20px;">We are dedicated to giving our pupils the greatest education possible.</p>
         </div>
  </div>
</section>



<section class="subjects" data-aos="fade-right" data-aos-duration="1000">

   <h1 class="heading">our popular subjects</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/subject-icon-1.png" alt="">
         <h3>graphic design</h3>
         <p>12 modules</p>
      </div>

      <div class="box">
         <img src="images/subject-icon-2.png" alt="">
         <h3>mathemetics</h3>
         <p>12 modules</p>
      </div>

      <div class="box">
         <img src="images/subject-icon-3.png" alt="">
         <h3>teaching</h3>
         <p>12 modules</p>
      </div>

      <div class="box">
         <img src="images/subject-icon-4.png" alt="">
         <h3>development</h3>
         <p>12 modules</p>
      </div>

      <div class="box">
         <img src="images/subject-icon-5.png" alt="">
         <h3>science</h3>
         <p>12 modules</p>
      </div>

      <div class="box">
         <img src="images/subject-icon-6.png" alt="">
         <h3>engineering</h3>
         <p>12 modules</p>
      </div>

   </div>

</section>

<!-- subjects section ends -->

<!-- home courses slider section starts  -->

<section class="home-courses" data-aos="fade-left" data-aos-duration="1000">

   <h1 class="heading"> our popular courses </h1>

   <div class="swiper home-courses-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/course-1-1.png" alt="">
               <h3>web development</h3>
            </div>
            <div class="content">
               <h3>web development</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, ratione?</p>
               <a href="#" class="btn">read more</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/course-1-2.png" alt="">
               <h3>web development</h3>
            </div>
            <div class="content">
               <h3>web development</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, ratione?</p>
               <a href="#" class="btn">read more</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/course-1-3.png" alt="">
               <h3>web development</h3>
            </div>
            <div class="content">
               <h3>web development</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, ratione?</p>
               <a href="#" class="btn">read more</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/course-1-4.png" alt="">
               <h3>web development</h3>
            </div>
            <div class="content">
               <h3>web development</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, ratione?</p>
               <a href="#" class="btn">read more</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/course-1-5.png" alt="">
               <h3>web development</h3>
            </div>
            <div class="content">
               <h3>web development</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, ratione?</p>
               <a href="#" class="btn">read more</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/course-1-6.png" alt="">
               <h3>web development</h3>
            </div>
            <div class="content">
               <h3>web development</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, ratione?</p>
               <a href="#" class="btn">read more</a>
            </div>
         </div>

      </div>

   </div>

</section>

<!-- home courses slider section ends -->

<!-- Contact Us -->
<div class="parent" data-aos="fade-up" data-aos-duration="1000">
   <div class="containerbackground">
          <h3 style="font-size: 65px;" class="about-title">Contact <span style="color: #f670f2;">Us</span></h3>
   </div>
  <div class="text">
    <h3 style="font-size: 43px;" class="about-title">Contact <span style="color: #f670f2;">Us</span></h3>
  </div>
</div>
<section class="contact" data-aos="fade-up" data-aos-duration="1000">

         <div class="row">


               <form action="">
                  <h3 class="heading">You can send a message. We'll be delighted to hear from you</h3>
                  <input type="text" placeholder="Full Name" class="box">
                  <input type="email" placeholder="Email Address" class="box">
                  <input type="number" placeholder="Phone Number" class="box">
                  <input type="text" placeholder="Subject" class="box">
                  <textarea name="" class="box" placeholder="Message" id="" cols="30" rows="10"></textarea>
                  <input type="submit" value="send message" class="btn">
               </form>

         </div>

</section>



<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>

<?php include_once "partials/footer.php"; ?>

</body>
</html>