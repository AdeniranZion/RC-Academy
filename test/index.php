<!DOCTYPE html>
<html lang="pt-br">

<head>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-R8rHrSyN1bJ58gvc/mwMMJ8e4+HWH1e4Y1G5jJtFQOaxo0cSyzkkPfwGH0w3qZ1zGZlFwhRv/QJMS1pd8yJtxg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="css/aos.css">
<link rel="stylesheet" href="css/qlstyle.css">

  <title>Royal Coast Academy</title>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">


   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://fontawesome.com/icons/phone?s=solid&f=classic" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/aos.css">
</head>
<body>
    <div class="hero">
        <div class="box">
            <h1>Hello World</h1>
                <img class="floating-object" style="animation-name: float-up;" src="flyingpen.png" alt="">
        </div>
    </div>
</body>

<style>
@import url('https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,400;0,600;1,500;1,700&family=Saira+Condensed:wght@100;200;300;400;500;600;800&display=swap');
@import url("https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600&display=swap");
* {
  font-family: 'Nunito', sans-serif;
  margin: 0;
  padding: 0;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  outline: none;
  border: none;
  text-decoration: none;
  -webkit-transition: all .2s linear;
  transition: all .2s linear;
}

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.hero{
    background-color: #e4dae8;
    width: 100%;
    height: 80vh;
    padding: 20px;
    font-family: 'Nunito', sans-serif;
    font-family: 'Saira Condensed', sans-serif;
}

.hero .box{
    margin-top: 20vh;
    display: flex;
    justify-content: flex-start;
    align-items: center;
    background-color: #fff;
    width: 50%;
    height: 30vh;
    padding: 20px;
    text-align: left;
    text-justify:auto;
    margin-left: 5%;

}

.hero .box h1{
    color: #876796;
    font-size: 3rem;
}

.hero .box img{
    position: relative;
}

.floating-object {
  width: 150%;
  opacity: 1;
  position: relative;
  animation: float 2s ease-in-out infinite;
  animation-name: float-up;

}



@keyframes float {
  from {
    transform: translate(0, 0);
  }
  to {
    transform: translate(0, -10px);
  }
}


@keyframes float-up {
  0% {
    transform: translateX(0px) translateY(0px);
  }
  50% {
    transform: translateX(0px) translateY(20px);
  }
  100% {
    transform: translateX(0px) translateY(0px);
  }
}  

</style>