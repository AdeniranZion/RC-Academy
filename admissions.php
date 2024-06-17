<?php include_once "partials/header.php"; ?>

<style>
          /* Global reset and typography */

    .container {
        max-width: 960px;
        margin: 0 auto;
        padding: 20px;
        font-size: 1.6rem;

    }

    .section {
        padding: 60px 0;
    }

    /* Header section */
    .hero {
        background-color: #671470;
        color: #fff;
        text-align: center;
        padding: 80px 0;
    }

    .hero-title {
        font-size: 3rem;
        margin-bottom: 10px;
    }

    .hero-subtitle {
        font-size: 1.5rem;
        font-weight: 300;
    }


    /* Form styles */
    .form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
        color: #333;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    textarea,
    input[type="file"] {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 1.6rem;
        margin-top: 5px;
        color: #333;
    }

    textarea {
        resize: vertical;
    }

    /* Confirmation section styles */

#confirmation {
    background-color: #f9f9f9;
    padding: 60px 0;
}

#confirmation .container {
    max-width: 800px;
    margin: 0 auto;
    text-align: center;
}

#confirmation h2 {
    font-size: 2.5rem;
    margin-bottom: 20px;
    color: #333;
}

#confirmation p {
    font-size: 1.1rem;
    line-height: 1.6;
    color: #666;
    margin-bottom: 15px;
}

#confirmation ul {
    list-style: none;
    padding: 0;
    margin-top: 20px;
}

#confirmation ul li {
    margin-bottom: 10px;
}

#confirmation a {
    color: #336699;
    text-decoration: none;
    transition: color 0.3s ease;
}

#confirmation a:hover {
    color: #255580;
}


</style>


<body>
  <main>
  <div style="background-color: #671470; padding: 35px; padding-right: 12.5%; text-align: right;">
    <h1 class="logo" style="margin: 0; color: white; font-size: 3rem">Admission into Royal Coast Academy</h1>
</div>

    <!-- Hero Section -->
    <section class="hero" data-aos="fade-up" data-aos-duration="1000" style="position: relative; text-align: center; height: 60vh; background: url('images/wids.jpg') no-repeat center center/cover;">
      <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.7); display: flex; justify-content: center; align-items: right; flex-direction: column; padding: 20px;">
        <div class="hero-text">
          <p>Royal Coast Academy offers an excellent opportunity through our entrance examination for prospective students. We prioritize academic excellence and holistic development. Admission is open to all who meet our criteria, irrespective of religion, ethnicity, nationality, or gender. To apply, click the application link and follow instructions. For assistance, email admissions@royalcoastacademy.org or call (234) 705 847 7260 during office hours (Monday to Friday).</p>
        </div>
      </div>
    </section>
    <!-- End Hero Section -->

    <!-- Admissions Overview Section -->
    <section class="admissions-overview" style="padding: 50px 20px; text-align: center;">
      <h2 style="font-size: 2.5rem; margin-bottom: 20px;">Admissions Overview</h2>
      <p style="font-size: 1.5em; max-width: 800px; margin: 0 auto 40px;">At Royal Coast Academy, we welcome students from all backgrounds who are eager to learn and grow in a supportive and challenging environment. Our admissions process is designed to ensure we find the best match for our community. Below, you will find detailed steps to help guide you through our application process.</p>
      <div class="steps-container" style="display: flex; justify-content: center; flex-wrap: wrap; gap: 30px;">
          <!-- Step 1 -->
          <div class="step" style="flex: 1; min-width: 280px; max-width: 350px; padding: 20px; border: 1px solid #ddd; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); display: flex; flex-direction: column; align-items: center;">
            <div class="step-number" style="width: 50px; height: 50px; border-radius: 50%; background-color: #FF5733; display: flex; justify-content: center; align-items: center; color: #fff; font-size: 1.5em; margin-bottom: 15px;">1</div>
            <h3 style="font-size: 2em; margin-bottom: 20px;">Application</h3>
            <p style="font-size: 1.5em; color: #555; text-align: center;">Submit an online inquiry to express your interest in our school. Our admissions team will contact you with more information.</p>
          </div>
          
          <!-- Step 2 -->
          <div class="step" style="flex: 1; min-width: 280px; max-width: 350px; padding: 20px; border: 1px solid #ddd; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); display: flex; flex-direction: column; align-items: center;">
            <div class="step-number" style="width: 50px; height: 50px; border-radius: 50%; background-color: #33A1FF; display: flex; justify-content: center; align-items: center; color: #fff; font-size: 1.5em; margin-bottom: 15px;">2</div>
            <h3 style="font-size: 2em; margin-bottom: 20px;">Assessment</h3>
            <p style="font-size: 1.5em; color: #555; text-align: center;">Complete and submit the online application form. Please ensure all required documents are uploaded.</p>
          </div>
          
          <!-- Step 3 -->
          <div class="step" style="flex: 1; min-width: 280px; max-width: 350px; padding: 20px; border: 1px solid #ddd; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); display: flex; flex-direction: column; align-items: center;">
            <div class="step-number" style="width: 50px; height: 50px; border-radius: 50%; background-color: #FFC107; display: flex; justify-content: center; align-items: center; color: #fff; font-size: 1.5em; margin-bottom: 15px;">4</div>
            <h3 style="font-size: 2em; margin-bottom: 20px;">Interview</h3>
            <p style="font-size: 1.5em; color: #555; text-align: center;">Receive your admission decision. Our admissions team will notify you of the outcome and guide you through the next steps.</p>
          </div>

          <!-- Step 4 -->
          <div class="step" style="flex: 1; min-width: 280px; max-width: 350px; padding: 20px; border: 1px solid #ddd; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); display: flex; flex-direction: column; align-items: center;">
            <div class="step-number" style="width: 50px; height: 50px; border-radius: 50%; background-color: #28A745; display: flex; justify-content: center; align-items: center; color: #fff; font-size: 1.5em; margin-bottom: 15px;">3</div>
            <h3 style="font-size: 2em; margin-bottom: 20px;">Decision</h3>
            <p style="font-size: 1.5em; color: #555; text-align: center;">Participate in a personal interview. This is an opportunity for us to learn more about you and for you to ask questions about our school.</p>
          </div>
        
      </div>


    </section>
    <!-- End Admissions Overview Section -->

    <section>


      <section id="application-form" class="admissions-overview">
          <div class="container">
              <h2>Online Application Form</h2>
              <p>Complete the form below to start your application.</p>
              <form action="submit-application.php" method="post" class="form">
                  <div class="form-group">
                      <label for="full-name">Full Name</label>
                      <input type="text" id="full-name" name="full-name" required>
                  </div>
                  <div class="form-group">
                      <label for="email">Email Address</label>
                      <input type="email" id="email" name="email" required>
                  </div>
                  <div class="form-group">
                      <label for="phone">Phone Number</label>
                      <input type="tel" id="phone" name="phone" required>
                  </div>
                  <button type="submit" class="btn">Submit Application</button>
              </form>
          </div>
      </section>

      <section id="document-upload" class="section">
          <div class="container">
              <h2>Document Upload</h2>
              <p>Upload required documents securely using the form below.</p>
              <form action="upload-documents.php" method="post" enctype="multipart/form-data" class="form">
                  <div class="form-group">
                      <label for="birth-certificate">Birth Certificate (PDF)</label>
                      <input type="file" id="birth-certificate" name="birth-certificate" accept=".pdf" required>
                  </div>
                  <div class="form-group">
                      <label for="immunization-records">Immunization Records (PDF)</label>
                      <input type="file" id="immunization-records" name="immunization-records" accept=".pdf" required>
                  </div>
                  <button type="submit" class="btn">Upload Documents</button>
              </form>
          </div>
      </section>

      <section id="confirmation" class="section">
          <div class="container">
              <h2>Confirmation and Contact</h2>
              <p>Upon submission, you will receive a confirmation email.</p>
              <p>If you have any questions, please contact us:</p>
              <ul>
                  <li>Email: <a href="mailto:admissions@schoolname.com">admissions@schoolname.com</a></li>
                  <li>Phone: <a href="tel:+1234567890">+1 (234) 567-890</a></li>
              </ul>
          </div>
      </section>
    </section>


    <!-- Why Choose Us Section -->
    <section class="why-choose-us" style="padding: 50px 20px; background-color: #f8f9fa;">
      <h2 style="font-size: 2.5em; text-align: center; margin-bottom: 20px;">Why Choose Royal Coast Academy?</h2>
      <div class="reasons-container" style="display: flex; justify-content: center; flex-wrap: wrap; gap: 30px; text-align: center;">
        <div class="reason" style="flex: 1; min-width: 280px; max-width: 350px; padding: 20px;">
          <i class="pe-7s-science" style="color: #e070dd; font-size: 4em;"></i>
          <h3 style="font-size: 1.5em; margin: 15px 0;">Excellence in Education</h3>
          <p style="font-size: 1em; color: #555;">Our curriculum is designed to challenge and inspire students, preparing them for success in higher education and beyond.</p>
        </div>
        <div class="reason" style="flex: 1; min-width: 280px; max-width: 350px; padding: 20px;">
          <i class="pe-7s-users" style="color: #007bff; font-size: 4em;"></i>
          <h3 style="font-size: 1.5em; margin: 15px 0;">Diverse Community</h3>
          <p style="font-size: 1em; color: #555;">We pride ourselves on our diverse and inclusive community where every student is valued and respected.</p>
        </div>
        <div class="reason" style="flex: 1; min-width: 280px; max-width: 350px; padding: 20px;">
          <i class="pe-7s-leaf" style="color: #28a745; font-size: 4em;"></i>
          <h3 style="font-size: 1.5em; margin: 15px 0;">Holistic Development</h3>
          <p style="font-size: 1em; color: #555;">Our programs focus on the academic, social, and emotional growth of our students, fostering well-rounded individuals.</p>
        </div>
      </div>
    </section>
    <!-- End Why Choose Us Section -->

    <!-- Contact Admissions Section -->
    <section class="contact-admissions" style="padding: 50px 20px; text-align: center;">
      <h2 style="font-size: 2.5em; margin-bottom: 20px;">Contact Admissions</h2>
      <p style="font-size: 1.5em; max-width: 800px; margin: 0 auto 40px;">Upon submission, you will receive a confirmation email.

If you have any questions, please contact us:

Email: admissions@royalcoastacademy.edu.ng
Phone: +1 (234) 567-890</p>
      <a href="contact.php" class="btn2" style="background: #007bff; color: #fff; padding: 10px 20px; text-decoration: none; border-radius: 5px;">Contact Us</a>
    </section>
    <!-- End Contact Admissions Section -->
  </main>

  <?php include_once "partials/footer.php"; ?>

  <!-- Include Swiper.js and AOS.js scripts for animations and features -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>
