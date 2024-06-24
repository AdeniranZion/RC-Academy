<?php include_once "partials/header.php"; ?>

<!-- header section ends -->

<!-- <section class="heading-link"> 
   <h3>about <span style="color: #e070dd;">us</span></h3>
   <p> <a href="index.php">home</a> / about </p>
</section> -->

<div style="background-color: #671470; padding: 35px; padding-right: 12.5%; text-align: right; position: relative;">
    <h1 class="logo" style="margin: 0; color: white; font-size: 3rem;">About Us</h1>
    <div style="position: absolute; bottom: 0; right: 0; width: 70px; height: 2px; background-color: white;"></div>
</div>



<!-- About Header Section -->
<section class="about-header">
  <div class="image-container">
    <img src="images/image1.jpg" alt="First Image">
    <img src="images/image2.jpg" alt="Second Image">
    <img src="images/image3.jpg" alt="Third Image">
  </div>
</section>


  <!-- Mission Statement Section -->
  <section class="mission">
    <div class="container">
      <h2 class="section-title" data-aos="fade-up">Our Mission</h2>
      <p class="section-description" data-aos="fade-up" data-aos-delay="200">At Royal Coast Academy, we are committed to fostering academic excellence and moral integrity. We aim to develop well-rounded individuals who are equipped to thrive in a global society. Our inclusive community welcomes students from all backgrounds and celebrates diversity.</p>
    </div>
  </section>

  <!-- Vision Statement Section -->
  <section class="vision">
    <div class="container">
      <h2 class="section-title" data-aos="fade-up">Our Vision</h2>
      <p class="section-description" data-aos="fade-up" data-aos-delay="200">Our vision is to be a leading educational institution renowned for nurturing the full potential of each student. We aspire to create a dynamic learning environment that inspires creativity, critical thinking, and lifelong learning.</p>
    </div>
  </section>

  <!-- Values Section -->
  <section class="values">
    <div class="container">
      <h2 class="section-title" data-aos="fade-up">Our Core Values</h2>
      <div class="values-grid">
        <div class="value-item" data-aos="fade-right" data-aos-delay="200">
          <h3>Excellence</h3>
          <p>We strive for the highest standards in everything we do.</p>
        </div>
        <div class="value-item" data-aos="fade-up" data-aos-delay="400">
          <h3>Integrity</h3>
          <p>We believe in honesty, transparency, and strong moral principles.</p>
        </div>
        <div class="value-item" data-aos="fade-up" data-aos-delay="600">
          <h3>Innovation</h3>
          <p>We embrace creativity and new ideas to advance learning.</p>
        </div>
        <div class="value-item" data-aos="fade-left" data-aos-delay="800">
          <h3>Respect</h3>
          <p>We foster an environment of mutual respect and inclusivity.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Team Section -->
  <section class="team">
    <div class="container">
      <h2 class="section-title" data-aos="fade-up">Meet Our Team</h2>
      <div class="team-grid">
        <div class="team-member" data-aos="fade-right" data-aos-delay="200">
          <img src="images/bassey.jpg" alt="Jane Doe">
          <h3>Edifon Bassey</h3>
          <p>Principal</p>
        </div>
        <div class="team-member" data-aos="fade-up" data-aos-delay="400">
          <img src="images/teacher-2.png" alt="John Smith">
          <h3>John Smith</h3>
          <p>Vice Principal</p>
        </div>
        <div class="team-member" data-aos="fade-up" data-aos-delay="600">
          <img src="images/teacher-3.png" alt="Emily Johnson">
          <h3>Emily Johnson</h3>
          <p>Head of Admissions</p>
        </div>
        <div class="team-member" data-aos="fade-left" data-aos-delay="800">
          <img src="images/teacher-4.png" alt="Michael Brown">
          <h3>Michael Brown</h3>
          <p>Head of Academics</p>
        </div>
      </div>
    </div>
  </section>


<?php include_once "partials/footer.php"; ?>


<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- AOS Animation Library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<!-- <script>
    AOS.init();
  </script> -->
<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>