<?php include_once "partials/header.php"; ?>

<style>

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

</style>


<body>
  <main>
<div style="background-color: #671470; padding: 35px; padding-right: 12.5%; text-align: right; position: relative;">
    <h1 class="logo" style="margin: 0; color: white; font-size: 3rem;"  data-aos="fade-right">Admission into Royal Coast Academy</h1>
    <div style="position: absolute; bottom: 0; right: 0; width: 120px; height: 2px; background-color: white; margin-right:12%;" data-aos="fade-left"></div>
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
            <p style="font-size: 1.5em; color: #555; text-align: center;">Complete and submit the online application form. Please ensure all required documents are uploaded.</p>
          </div>
          
          <!-- Step 2 -->
          <div class="step" style="flex: 1; min-width: 280px; max-width: 350px; padding: 20px; border: 1px solid #ddd; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); display: flex; flex-direction: column; align-items: center;">
            <div class="step-number" style="width: 50px; height: 50px; border-radius: 50%; background-color: #33A1FF; display: flex; justify-content: center; align-items: center; color: #fff; font-size: 1.5em; margin-bottom: 15px;">2</div>
            <h3 style="font-size: 2em; margin-bottom: 20px;">Assessment</h3>
            <p style="font-size: 1.5em; color: #555; text-align: center;">Our team will carefully review your ward's application before taking the assessment test.</p>
          </div>
          
          <!-- Step 3 -->
          <div class="step" style="flex: 1; min-width: 280px; max-width: 350px; padding: 20px; border: 1px solid #ddd; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); display: flex; flex-direction: column; align-items: center;">
            <div class="step-number" style="width: 50px; height: 50px; border-radius: 50%; background-color: #FFC107; display: flex; justify-content: center; align-items: center; color: #fff; font-size: 1.5em; margin-bottom: 15px;">4</div>
            <h3 style="font-size: 2em; margin-bottom: 20px;">Interview</h3>
            <p style="font-size: 1.5em; color: #555; text-align: center;">Participate in a personal interview. This is an opportunity for us to learn more about you and for you to ask questions about our school.</p>
          </div>

          <!-- Step 4 -->
          <div class="step" style="flex: 1; min-width: 280px; max-width: 350px; padding: 20px; border: 1px solid #ddd; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); display: flex; flex-direction: column; align-items: center;">
            <div class="step-number" style="width: 50px; height: 50px; border-radius: 50%; background-color: #28A745; display: flex; justify-content: center; align-items: center; color: #fff; font-size: 1.5em; margin-bottom: 15px;">3</div>
            <h3 style="font-size: 2em; margin-bottom: 20px;">Decision</h3>
            <p style="font-size: 1.5em; color: #555; text-align: center;">Receive your admission details via email. Our admissions team will notify you of the outcome and guide you through the next steps if your child is accepted.</p>
          </div>
        
      </div>


    </section>
    <!-- End Admissions Overview Section -->

    <!-- Contact Admissions Section -->
    <section class="contact-admissions" style="padding: 50px 20px; text-align: center; background-color: #fcf5fc">
      <h2 style="font-size: 2.5em; margin-bottom: 20px;">ENROLL YOUR CHILD NOW!</h2>
      <p style="font-size: 1.5em; max-width: 800px; margin: 0 auto 40px;">Application form into our schools are available online, right here on this website.
      Click here to access the form. <strong style="color: red;">Application closes on Friday, March 1, 2024.</strong></p>
      <a href="admission_form.php" class="btn" >Application Form</a>
    </section>
    <!-- End Contact Admissions Section -->

    <section>
      <section id="application-form" class="admissions-overview">
          <div class="container">
              <h1>Entrance Examination Information for 2024 – 2025</h1>
              <p>We are excited to announce the details for the upcoming Entrance Examinations for the 2024-2025 academic session. Below you will find all the necessary information for both our Primary and Secondary School admissions.
              </p>
            <h2>Primary School Entrance Examination</h2>
            <p>For students seeking admission into our Nursery, Lower Primary (Grade 1-3), and Upper Primary (Grade 4-6) School, the entrance examination will be held on
              <strong style="color: red;">Saturday, 14th July, 2024. Time: 9:00 AM - 12:00 PM.</strong> The examination will
              consist of the following subjects:</p>
            <li>English Language</li>
            <li>Mathematics</li>
            <li>General Knowledge</li>
      <h2>Secondary School Entrance Examination</h2>
        <p>For students seeking admission into our Junior Secondary School (JSS 1-3), the entrance examination will be held on
          <strong style="color: red;">Saturday, 14th July, 2024. Time: 9:00 AM - 12:00 PM.</strong> The examination will
          consist of the following subjects:</p>
          <li>English Language</li>
          <li>Mathematics</li>
          <li>General Knowledge</li>
      </p>
      <p style="color: red; font-weight:bolder">NOTE: Come along with the following documents: Birth certificate, Most recent report card, and Two passport-sized photographs.</p>
                </div>
            </section>
          </section>
          <div style="padding: 50px 20px; background-color: #f8f9fa; margin: 0 0">
                    <h2 style="font-size: 2.5em; text-align: center; margin-bottom: 20px; font-weight:bolder">REQUIREMENTS FOR PROSPECTIVE CANDIDATES</h2>
                    <div style="padding: 0 20px; font-size: 1.5em; text-align: center; margin: 0 20%"><p>Applicants for Nursery classes must be at least 3 years old by September 1, <?php
                        echo date("Y"); ?>, while Applicants for Grade 1 must be at least 5 years old by September 1, <?php
                        echo date("Y"); ?>. We do not encourage students planning to attend our junior secondary school to apply before their 10th birthday. The general recommendation for admission is that students who plan to enter Basic 7 (JSS 1) are either 10years or close to 11 years of age.</p></div>
                </div>  
    <!-- End Why Choose Us Section -->

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
