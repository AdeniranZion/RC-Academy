<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Neon Object Movement</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <style>
    .neon-container {
      position: relative;
      width: 100%;
      height: 100vh;
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
      transition: transform 0.3s ease-in-out; /* Smooth movement */
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
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;

      // Calculate new position with animation delay
      const currentX = parseFloat(neonObject.style.left) || (rect.width / 2 - neonObject.offsetWidth / 2);
      const currentY = parseFloat(neonObject.style.top) || (rect.height / 2 - neonObject.offsetHeight / 2);

      // Move only if the cursor has passed the current position of the neon object
      if (Math.abs(x - currentX) > neonObject.offsetWidth / 2 || Math.abs(y - currentY) > neonObject.offsetHeight / 2) {
        // Update the position of the neon object
        neonObject.style.transform = `translate(${x - neonObject.offsetWidth / 2}px, ${y - neonObject.offsetHeight / 2}px)`;
      }
    });
  </script>
</body>

</html>
