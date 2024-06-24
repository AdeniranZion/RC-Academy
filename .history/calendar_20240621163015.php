<?php include_once "partials/header.php"; 
   // Define an array of news and events
$newsAndEvents = [
   [
       "image" => "images/wids2.jpg",
       "category" => "Arts and Culture",
       "title" => "Cultural Day 2023",
       "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque, odit!",
       "modules" => 12,
       "time" => "6 hours ago"
   ],
   [
       "image" => "images/wids.jpg",
       "category" => "Engineering",
       "title" => "Career Day 2023",
       "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque, odit!",
       "modules" => 12,
       "time" => "6 hours ago"
   ],
   [
       "image" => "images/wids2.jpg",
       "category" => "Mathematics",
       "title" => "End of the Year Party 2022",
       "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque, odit!",
       "modules" => 12,
       "time" => "6 hours ago"
   ],
   [
       "image" => "images/wids2.jpg",
       "category" => "Doctor",
       "title" => "Field Trip 2022",
       "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque, odit!",
       "modules" => 12,
       "time" => "6 hours ago"
   ],
   [
       "image" => "images/wids.jpg",
       "category" => "Science",
       "title" => "Inter House Sports",
       "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque, odit!",
       "modules" => 12,
       "time" => "6 hours ago"
   ],
   [
       "image" => "images/wids2.jpg",
       "category" => "Business",
       "title" => "Science Fair 2023",
       "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque, odit!",
       "modules" => 12,
       "time" => "6 hours ago"
   ],
   [
       "image" => "images/wids2.jpg",
       "category" => "Teaching",
       "title" => "Science Fair 2023",
       "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque, odit!",
       "modules" => 12,
       "time" => "6 hours ago"
   ],
   [
       "image" => "images/wids2.jpg",
       "category" => "Designing",
       "title" => "Choose What's Best for You!",
       "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque, odit!",
       "modules" => 12,
       "time" => "6 hours ago"
   ],
   [
       "image" => "images/wids2.jpg",
       "category" => "Dancing",
       "title" => "Choose What's Best for You!",
       "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque, odit!",
       "modules" => 12,
       "time" => "6 hours ago"
   ]
];

// Function to display news and events
function displayNewsAndEvents($items) {
   foreach ($items as $item) {
       echo '
       <div class="box">
           <div class="image">
               <img src="' . $item["image"] . '" alt="">
               <h3>' . $item["category"] . '</h3>
           </div>
           <div class="content">
               <h3>' . $item["title"] . '</h3>
               <p>' . $item["description"] . '</p>
               <a href="#" class="btn">read more</a>
               <div class="icons">
                   <span> <i class="fas fa-clock"></i> ' . $item["time"] . ' </span>
               </div>
           </div>
       </div>';
   }
}
?>

<!-- header section ends -->

<section class="heading-link">
   <h3>The Royal Gazette</h3>
   <p> <a href="index.php">home</a> / events </p>
</section>

<section class="courses">

   <h1 class="heading"> Our Latest News and Events </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/wids2.jpg" alt="">
            <h3>Arts and Culture</h3>
         </div>
         <div class="content">
            <h3>cultural Day 2023</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque, odit!</p>
            <a href="#" class="btn">read more</a>
            <div class="icons">
            <span><i class="fas fa-clock"></i> Updated <span id="time-elapsed"></span></span>
  </div>

  <?php
    // Define the upload date
    $uploadDate = '2024-06-20T00:00:00Z';
  ?>

  <script>
    // Convert the PHP upload date to a JavaScript date object
    const uploadDate = new Date('<?php echo $uploadDate; ?>');

    // Function to calculate the time difference
    function timeSince(date) {
      const seconds = Math.floor((new Date() - date) / 1000);
      const intervals = {
        year: 31536000,
        month: 2592000,
        week: 604800,
        day: 86400,
        hour: 3600,
        minute: 60,
        second: 1,
      };

      for (let [key, value] of Object.entries(intervals)) {
        const interval = Math.floor(seconds / value);
        if (interval >= 1) {
          return `${interval} ${key}${interval !== 1 ? 's' : ''} ago`;
        }
      }
    }

    // Calculate the time elapsed since the upload date
    const timeElapsed = timeSince(uploadDate);

    // Display the time elapsed in the specified element
    document.getElementById("time-elapsed").innerText = timeElapsed;
  </script>
            </div>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/wids.jpg" alt="">
            <h3>Career Development</h3>
         </div>
         <div class="content">
            <h3>Career day 2023</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque, odit!</p>
            <a href="#" class="btn">read more</a>
            <div class="icons">
               <span> <i class="fas fa-book"></i> 12 modules </span>
               <span> <i class="fas fa-clock"></i> 6 hours ago</span>
            </div>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/IMG-20240616-WA0054.jpg" alt="">
            <h3>Fun and Games</h3>
         </div>
         <div class="content">
            <h3>End of the year Party 2022</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque, odit!</p>
            <a href="#" class="btn">read more</a>
            <div class="icons">
               <span> <i class="fas fa-book"></i> 12 modules </span>
               <span> <i class="fas fa-clock"></i> 6 hours </span>
            </div>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/IMG_2543.jpg" alt="">
            <h3>Outdoor Learning</h3>
         </div>
         <div class="content">
            <h3>Field Trip 2022</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque, odit!</p>
            <a href="#" class="btn">read more</a>
            <div class="icons">
               <span> <i class="fas fa-book"></i> 12 modules </span>
               <span> <i class="fas fa-clock"></i> 6 hours ago</span>
            </div>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/IMG-20240616-WA0055.jpg" alt="">
            <h3>Sports</h3>
         </div>
         <div class="content">
            <h3>Inter house Sports</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque, odit!</p>
            <a href="#" class="btn">read more</a>
            <div class="icons">
               <span> <i class="fas fa-book"></i> 12 modules </span>
               <span> <i class="fas fa-clock"></i> 6 hours </span>
            </div>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/IMG-20240616-WA0033.jpg" alt="">
            <h3>Science</h3>
         </div>
         <div class="content">
            <h3>Science Fair 2023</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque, odit!</p>
            <a href="#" class="btn">read more</a>
            <div class="icons">
               <span> <i class="fas fa-book"></i> 12 modules </span>
               <span> <i class="fas fa-clock"></i> 6 hours </span>
            </div>
         </div>
      </div>

      <div class="box hide">
         <div class="image">
            <img src="images/wids2.jpg" alt="">
            <h3>teaching</h3>
         </div>
         <div class="content">
            <h3>Science Fair 2023</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque, odit!</p>
            <a href="#" class="btn">read more</a>
            <div class="icons">
               <span> <i class="fas fa-book"></i> 12 modules </span>
               <span> <i class="fas fa-clock"></i> 6 hours </span>
            </div>
         </div>
      </div>

      <div class="box hide">
         <div class="image">
            <img src="images/wids2.jpg" alt="">
            <h3>designing</h3>
         </div>
         <div class="content">
            <h3>choose what's best for you!</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque, odit!</p>
            <a href="#" class="btn">read more</a>
            <div class="icons">
               <span> <i class="fas fa-book"></i> 12 modules </span>
               <span> <i class="fas fa-clock"></i> 6 hours </span>
            </div>
         </div>
      </div>

      <div class="box hide">
         <div class="image">
            <img src="images/wids2.jpg" alt="">
            <h3>dancing</h3>
         </div>
         <div class="content">
            <h3>choose what's best for you!</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque, odit!</p>
            <a href="#" class="btn">read more</a>
            <div class="icons">
               <span> <i class="fas fa-book"></i> 12 modules </span>
               <span> <i class="fas fa-clock"></i> 6 hours </span>
            </div>
         </div>
      </div>

   </div>

   <div class="load-more"> <div class="btn">load more</div> </div>

</section>




<?php include_once "partials/footer.php"; ?>



<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>