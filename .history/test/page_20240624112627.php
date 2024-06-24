<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Neon Object Movement with GSAP</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script> <!-- Include GSAP from CDN -->

  <style>
    body, html {
      margin: 0;
      padding: 0;
      height: 100%;
    }
    
    .neon-container {
      position: relative;
      width: 100%;
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #fff;
      overflow: hidden; /* Prevent object from going out of bounds */
    }

    .neon-object {
      position: absolute;
      width: 30px;
      height: 30px;
      border-radius: 50%;
      background-color: #000; /* Add a background color for visibility */
      box-shadow: 0 0 10px #fed, 0 0 20px #dde, 0 0 30px #fff, 0 0 40px #ddd, 0 0 70px #ddd, 0 0 80px #ddd, 0 0 100px #ddd, 0 0 150px #ddd;
      filter: blur(4px); /* Add Gaussian blur effect */
      pointer-events: none; /* Prevent mouse events on the object itself */
      transition: transform 0.1s ease-out; /* Smooth movement */
    }

    .neon-object-2 {
      width: 120px;
      height: 120px;
      border-radius: 3px;
      background-image: radial-gradient(circle, red 15%, transparent 5%); /* Dotted pattern */
      background-size: 15px 15px; /* Size of each dot */
      background-position: 0 0; /* Start position of background */
      position: fixed;
      bottom: 200px;
      left: 200px;
      transition: transform 0.1s ease-out; /* Smooth movement */
    }
    .neon-object-3 {
      width: 120px;
      height: 120px;
      border-radius: 100px;
      background-image: radial-gradient(circle, blue 15%, transparent 5%); /* Dotted pattern */
      background-size: 15px 15px; /* Size of each dot */
      background-position: 0 0; /* Start position of background */
      position: fixed;
      top: 200px;
      right: 200px;
      transition: transform 0.1s ease-out; /* Smooth movement */
    }

  </style>
</head>
<body>
  <div class="neon-container">
    <div class="neon-object"></div>
    <div class="neon-object-2"></div>
    <div class="neon-object-3"></div>
  </div>

  <script>
    const neonObject = document.querySelector('.neon-object');
    const neonObject2 = document.querySelector('.neon-object-2');
    const neonObject3 = document.querySelector('.neon-object-3');
    const container = document.querySelector('.neon-container');

    // Setup GSAP animation
    gsap.to([neonObject, neonObject2, neonObject3], {
      x: () => (event.clientX - container.offsetWidth / 2) * 0.2,
      y: () => (event.clientY - container.offsetHeight / 2) * 0.2,
      ease: 'power2.out',
    });

    // Optionally, you can add an event listener to adjust animation on mouse move
    document.addEventListener('mousemove', function(event) {
      gsap.to([neonObject, neonObject2, neonObject3], {
        x: () => (event.clientX - container.offsetWidth / 2) * 0.2,
        y: () => (event.clientY - container.offsetHeight / 2) * 0.2,
        ease: 'power2.out',
      });
    });
  </script>
</body>
</html>
