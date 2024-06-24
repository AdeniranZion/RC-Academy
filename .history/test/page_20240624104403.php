<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Swiper demo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />

  <style>
        .neon-container {
  position: relative;
  width: 100%;
  height: 100vh;
  background-color: #fff;
}

.neon-object {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 50px;
  height: 50px;
  border-radius: 50%;
  box-shadow: 0 0 10px #fed, 0 0 20px #fff, 0 0 30px #fff, 0 0 40px #ddd, 0 0 70px #0ff, 0 0 80px #0ff, 0 0 100px #0ff, 0 0 150px #0ff;
  animation: move 8s ease-in-out infinite;
}

@keyframes move {
  0% {
    transform: translate(-50%, -50%);
  }
  25% {
    transform: translate(calc(-50% + 100px), calc(-50% + 100px));
  }
  50% {
    transform: translate(-50%, -50%);
  }
  75% {
    transform: translate(calc(-50% - 100px), calc(-50% - 100px));
  }
  100% {
    transform: translate(-50%, -50%);
  }
}

  </style>
</head>
<body>
    <div class="neon-container">
    <div class="neon-object"></div>
    </div>
</body>

</html>

<!DOCTYPE html>
