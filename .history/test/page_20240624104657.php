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
      width: 50px;
      height: 50px;
      border-radius: 50%;
      background-color: #000; /* Add a background color for visibility */
      box-shadow: 0 0 10px #fed, 0 0 20px #dde, 0 0 30px #fff, 0 0 40px #ddd, 0 0 70px #ddd, 0 0 80px #ddd, 0 0 100px #ddd, 0 0 150px #ddd;
      pointer-events: none; /* Prevent mouse events on the object itself */
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

      // Update the position of the neon object
      neonObject.style.left = `${x - neonObject.offsetWidth / 2}px`;
      neonObject.style.top = `${y - neonObject.offsetHeight / 2}px`;
    });
  </script>
</body>

</html>
