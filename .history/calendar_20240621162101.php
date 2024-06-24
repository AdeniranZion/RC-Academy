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

      <script>
         // Define an array of objects representing the data for each box
         const boxesData = [
            {
               imageSrc: "images/wids2.jpg",
               imageAlt: "Arts and Culture",
               imageTitle: "Arts and Culture",
               contentTitle: "Cultural Day 2023",
               contentText: "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque, odit!",
               link: "#",
               modules: "12 modules",
               updatedTime: "Updated 8 weeks ago"
            },
            {
               imageSrc: "images/wids.jpg",
               imageAlt: "Career Development",
               imageTitle: "Career Development",
               contentTitle: "Career Day 2023",
               contentText: "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque, odit!",
               link: "#",
               modules: "12 modules",
               updatedTime: "6 hours ago"
            },
            {
               imageSrc: "images/IMG-20240616-WA0054.jpg",
               imageAlt: "Fun and Games",
               imageTitle: "Fun and Games",
               contentTitle: "End of the Year Party 2022",
               contentText: "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque, odit!",
               link: "#",
               modules: "12 modules",
               updatedTime: "6 hours"
            },
            {
               imageSrc: "images/IMG_2543.jpg",
               imageAlt: "Outdoor Learning",
               imageTitle: "Outdoor Learning",
               contentTitle: "Field Trip 2022",
               contentText: "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque, odit!",
               link: "#",
               modules: "12 modules",
               updatedTime: "6 hours ago"
            },
            {
               imageSrc: "images/IMG-20240616-WA0055.jpg",
               imageAlt: "Sports",
               imageTitle: "Sports",
               contentTitle: "Inter House Sports",
               contentText: "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque, odit!",
               link: "#",
               modules: "12 modules",
               updatedTime: "6 hours"
            },
            {
               imageSrc: "images/IMG-20240616-WA0033.jpg",
               imageAlt: "Science",
               imageTitle: "Science",
               contentTitle: "Science Fair 2023",
               contentText: "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque, odit!",
               link: "#",
               modules: "12 modules",
               updatedTime: "6 hours"
            }
         ];

         // Function to generate box HTML structure
         function generateBoxHTML(box) {
            return `
               <div class="box">
               <div class="image">
                  <img src="${box.imageSrc}" alt="${box.imageAlt}">
                  <h3>${box.imageTitle}</h3>
               </div>
               <div class="content">
                  <h3>${box.contentTitle}</h3>
                  <p>${box.contentText}</p>
                  <a href="${box.link}" class="btn">read more</a>
                  <div class="icons">
                     <span><i class="fas fa-book"></i> ${box.modules}</span>
                     <span><i class="fas fa-clock"></i> ${box.updatedTime}</span>
                  </div>
               </div>
               </div>
            `;
         }

         // Get the container element
         const container = document.getElementById("box-container");

         // Loop through the data and append each box's HTML to the container
         boxesData.forEach(box => {
            container.innerHTML += generateBoxHTML(box);
         });
      </script>


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