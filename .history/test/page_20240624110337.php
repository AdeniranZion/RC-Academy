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
      width: 50px;
      height: 50px;
      background-color: red; /* Add a background color for visibility */
      border: 2px dotted white; /* Dotted border with white color */
      box-sizing: border-box; /* Ensure border width is included in total width and height */
    }

  </style>
</head>

<body>
  <div class="neon-container">
    <div class="neon-object"></div>
    <div class="neon-object-2"></div>
  </div>

  <script>
    document.addEventListener('mousemove', function(e) {
      const neonObject = document.querySelector('.neon-object');
      const container = document.querySelector('.neon-container');

      // Get the mouse position relative to the container
      const rect = container.getBoundingClientRect();
      const centerX = rect.left + rect.width / 2;
      const centerY = rect.top + rect.height / 2;

      // Calculate the distance from the center
      const distanceX = e.clientX - centerX;
      const distanceY = e.clientY - centerY;

      // Set a multiplier to control the trailing effect
      const multiplier = 0.2; // Adjust this value for the trailing effect

      // Update the position of the neon object with a trailing effect
      neonObject.style.transform = `translate(${multiplier * distanceX}px, ${multiplier * distanceY}px)`;
    });
  </script>
</body>

</html>
