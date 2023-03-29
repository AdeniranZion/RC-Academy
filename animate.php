<div class="container">
  <div class="shape"></div>
  <div class="shape"></div>
  <div class="shape"></div>
</div>
<style>
.container {
  width: 500px;
  height: 500px;
  position: relative;
  background-color: #f7f7f7;
}

.shape {
    position: absolute;
    width: 120px;
    height: 103.92px; /* This value is calculated based on the width and height of the hexagon */
    background-color: red; /* Set the background color */
    clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%); /* Define the polygon points */
    border-radius: 20%;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    animation-name: float;
    animation-duration: 7s;
    animation-iteration-count: infinite;
}
.hexagon {
  width: 120px;
  height: 100px;
  background-color: #f5f5f5;
  position: relative;
}

.hexagon:before,
.hexagon:after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: inherit;
  border-radius: 20%;
}

.hexagon:before {
  transform: rotate(60deg);
}

.hexagon:after {
  transform: rotate(-60deg);
}



@keyframes float {
  0% {
    transform: translateY(0);
  }
  25% {
    transform: translateY(-20px);
  }
  50% {
    transform: translateX(-20px);
  }
  75% {
    transform: translateX(40px);
  }
  100% {
    transform: translateY(0);
  }
}

.shape:nth-child(1) {
  top: 80px;
    
}


.shape:nth-child(2) {
  top: 200px;
  left: 160px;
}

.shape:nth-child(3) {
  top: 400px;
  left: 100px;
}

</style>