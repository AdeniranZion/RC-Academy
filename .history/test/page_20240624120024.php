<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Neon Object Movement</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <style>
    body, html {
      margin: 0;
      padding: 0;
      height: 100%;
      overflow: hidden; /* Prevent scrollbars */
    }
    
    .neon-container {
      position: relative;
      width: 100%;
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #061c30;
      overflow: hidden; /* Prevent object from going out of bounds */
    }

    .triangle {
      position: fixed;
      left: 200px;
      bottom: 200px;
      width: 200px; /* Adjust width as needed */
      height: 200px; /* Adjust height as needed */
      clip-path: polygon(50% 2%, 100% 38%, 82% 100%, 18% 100%, 0% 38%);
      background-color: #3498db; /* Adjust background color as needed */
      border-radius: 100px; /* Adjust border radius for smoothness */
      transition: transform 0.1s ease-out; /* Smooth movement */
    }

    .neon-object {
      position: absolute;
      width: 25px;
      height: 25px;
      border-radius: 50%;
      background-color: #222; /* Add a background color for visibility */
      box-shadow: 0 0 10px #fed, 0 0 20px #dde, 0 0 30px #fff, 0 0 40px #ddd, 0 0 70px #ddd, 0 0 80px #ddd, 0 0 100px #ddd, 0 0 150px #ddd;
      filter: blur(4px); /* Add Gaussian blur effect */
      pointer-events: none; /* Prevent mouse events on the object itself */
      transition: transform 0.1s ease-out; /* Smooth movement */
    }

    .neon-object-2 {
      width: 180px;
      height: 180px;
      border-radius: 3px;
      background-image: radial-gradient(circle, rgba(255, 0, 0, 0.5) 20%, transparent 5%); /* Dotted pattern */
      background-size: 25px 25px; /* Size of each dot */
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

    /* Styling for the rotating circle */
    .rotating-circle {
      position: fixed;
      left: -50px; /* Adjust position as needed */
      top: 40%; /* Center vertically */
      width: 150px;
      height: 150px;
      border-radius: 50%;
      /* background-color: rgba(255, 0, 0, 0.5); */
      animation: rotate 4s linear infinite; /* Rotate animation */
      background-image: radial-gradient(circle, rgba(255, 0, 0, 0.5) 15%, transparent 5%); /* Dotted pattern */
      background-size: 15px 15px; /* Size of each dot */
      background-position: 0 0; /* Start position of background */
      position: fixed;
    }

    @keyframes rotate {
      from {
        transform: rotate(0deg);
      }
      to {
        transform: rotate(360deg);
      }
    }

  </style>
</head>
<body>
  <div class="neon-container">
    <div class="neon-object"></div>
    <div class="neon-object-2"></div>
    <div class="neon-object-3"></div>
    <div class="triangle"></div>
  </div>

  <!-- Rotating circle element -->
  <div class="rotating-circle"></div>

  <script>
    document.addEventListener('mousemove', function(e) {
      const neonObject = document.querySelector('.neon-object');
      const neonObject2 = document.querySelector('.neon-object-2');
      const neonObject3 = document.querySelector('.neon-object-3');
      const triangle = document.querySelector('.triangle');
      const container = document.querySelector('.neon-container');

      // Get the mouse position relative to the container
      const rect = container.getBoundingClientRect();
      const centerX = rect.left + rect.width / 2;
      const centerY = rect.top + rect.height / 2;

      // Calculate the distance from the center
      const distanceX = e.clientX - centerX;
      const distanceY = e.clientY - centerY;

      // Set a multiplier to control the trailing effect
      const multiplier = 0.04; // Adjust this value for the trailing effect

      // Update the position of neon-object with a trailing effect
      neonObject.style.transform = `translate(${multiplier * distanceX}px, ${multiplier * distanceY}px)`;

      // Update the position of neon-object-2 with the same trailing effect
      neonObject2.style.transform = `translate(${multiplier * distanceX}px, ${multiplier * distanceY}px)`;

      // Update the position of neon-object-3 with the opposite trailing effect
      neonObject3.style.transform = `translate(${-multiplier * distanceX}px, ${-multiplier * distanceY}px)`;

      // Update the position of neon-object-3 with the opposite trailing effect
      triangle.style.transform = `translate(${multiplier * distanceX}px, ${multiplier * distanceY}px)`;

    });
  </script>
</body>
</html>
