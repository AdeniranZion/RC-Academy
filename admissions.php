<?php include_once "partials/header.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <title>Admissions Page</title>
  <!-- AOS CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-R8rHrSyN1bJ58gvc/mwMMJ8e4+HWH1e4Y1G5jJtFQOaxo0cSyzkkPfwGH0w3qZ1zGZlFwhRv/QJMS1pd8yJtxg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="js/aos.js"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
</head>
<body>

<script>
    AOS.init({
        duration: 800, // animation duration in milliseconds
        offset: 200, // offset (in pixels) from the top of the page for the start of the animation
        easing: 'ease-out', // easing function to use for the animation
        once: true, // only animate elements once on page load
    });
  </script>



<div class="floating-objects">
    <div class="floating-object"></div>
    <div class="floating-object"></div>
    <div class="floating-object"></div>
    <div class="floating-object"></div>
    <div class="floating-object"></div>
    <div class="floating-object"></div>
    <div class="floating-object"></div>
    <div class="floating-object"></div>
    <div class="floating-object"></div>
    <div class="hexagon"></div>
  </div>

  <main>
    <section class="hero" data-aos="fade-up" data-aos-duration="1000">
      <h1>Welcome to Our Admissions Page</h1>
      <p>This page is still under construction</p>
      <a href="index.php" class="btn2">Go back</a>

  </main>
 
</body>
</html>


