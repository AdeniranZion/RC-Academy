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
      width: 20px;
      height: 20px;
      border-radius: 50%;
      background-color: #000; /* Add a background color for visibility */
      box-shadow: 0 0 10px #fed, 0 0 20px #dde, 0 0 30px #fff, 0 0 40px #ddd, 0 0 70px #ddd, 0 0 80px #ddd, 0 0 100px #ddd, 0 0 150px #ddd;
      filter: blur(2px); /* Add Gaussian blur effect */
      pointer-events: none; /* Prevent mouse events on the object itself */
      transition: transform 0.2s ease-in-out; /* Smooth movement */
    }
  </style>
</head>

<body>
  <div class="neon-container">
    <div class="neon-object"></div>
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

      // Update the position of the neon object with a smooth effect
      neonObject.style.transform = `translate(${distanceX}px, ${distanceY}px)`;
    });
  </script>
</body>

</html>
