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

    .dotted-square {
      position: absolute;
      bottom: 20px;
      left: 20px;
      width: 100px;
      height: 100px;
      background-color: tomato;
      border: 1px dotted #333;
      clip-path: polygon(0% 0%, 100% 0%, 100% 70%, 0% 100%);
    }

    .blue-semi-circle {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100px;
      height: 50px;
      background-color: #3498db;
      border-bottom-right-radius: 100px;
    }

    .random-shape-1 {
      position: absolute;
      top: 20px;
      right: 20px;
      width: 80px;
      height: 60px;
      background-color: #f39c12;
      transform: rotate(-30deg);
      clip-path: polygon(0% 0%, 100% 25%, 75% 100%, 0% 75%);
    }

    .random-shape-2 {
      position: absolute;
      top: 50%;
      left: 50%;
      width: 120px;
      height: 60px;
      background-color: #9b59b6;
      transform: translate(-50%, -50%) rotate(45deg);
      clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
    }
  </style>
</head>

<body>
  <div class="neon-container">
    <div class="neon-object"></div>
    <div class="dotted-square">
      <div class="blue-semi-circle"></div>
    </div>
    <div class="random-shape-1"></div>
    <div class="random-shape-2"></div>
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
