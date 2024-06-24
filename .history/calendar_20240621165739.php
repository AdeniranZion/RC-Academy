<?php include_once "partials/header.php"; 
   // Define an array of news and events with specific dates
   $newsAndEvents = [
      [
         "image" => "images/wids2.jpg",
         "category" => "Arts and Culture",
         "title" => "Cultural Day 2023",
         "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque, odit!",
         "modules" => 12,
         "upload_date" => '2024-06-19T00:00:00Z' // Specific date for this event
      ],
      [
         "image" => "images/wids.jpg",
         "category" => "Engineering",
         "title" => "Career Day 2023",
         "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque, odit!",
         "modules" => 12,
         "upload_date" => '2024-06-18T00:00:00Z'
      ],
      [
         "image" => "images/IMG-20240616-WA0054.jpg",
         "category" => "Fun and Games",
         "title" => "End of the Year Party 2022",
         "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque, odit!",
         "modules" => 12,
         "upload_date" => '2024-06-17T00:00:00Z'
      ],
      [
         "image" => "images/IMG_2543.jpg",
         "category" => "Outdoor Learning",
         "title" => "Field Trip 2022",
         "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque, odit!",
         "modules" => 12,
         "upload_date" => '2024-06-16T00:00:00Z'
      ],
      [
         "image" => "images/IMG-20240616-WA0055.jpg",
         "category" => "Sports",
         "title" => "Inter house Sports",
         "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque, odit!",
         "modules" => 12,
         "upload_date" => '2024-06-15T00:00:00Z'
      ],
      [
         "image" => "images/IMG-20240616-WA0033.jpg",
         "category" => "Science",
         "title" => "Science Fair 2023",
         "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque, odit!",
         "modules" => 12,
         "upload_date" => '2024-06-14T00:00:00Z'
      ],
      [
         "image" => "images/wids2.jpg",
         "category" => "Teaching",
         "title" => "Choose What's Best for You!",
         "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque, odit!",
         "modules" => 12,
         "upload_date" => '2024-06-13T00:00:00Z'
      ],
      [
         "image" => "images/wids2.jpg",
         "category" => "Designing",
         "title" => "Choose What's Best for You!",
         "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque, odit!",
         "modules" => 12,
         "upload_date" => '2024-06-12T00:00:00Z'
      ],
      [
         "image" => "images/wids2.jpg",
         "category" => "Dancing",
         "title" => "Choose What's Best for You!",
         "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque, odit!",
         "modules" => 12,
         "upload_date" => '2024-06-11T00:00:00Z'
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
                     <span><i class="fas fa-clock"></i> Updated <span class="time-elapsed" data-date="' . $item["upload_date"] . '"></span></span>
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

      <?php displayNewsAndEvents($newsAndEvents); ?>

   </div>

   <div class="load-more"> <div class="btn">load more</div> </div>

</section>

<?php include_once "partials/footer.php"; ?>

<script>
   // Function to calculate the time difference
   function timeSince(date) {
      const seconds = Math.floor((new Date() - new Date(date)) / 1000);
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

   // Update all elements with the class 'time-elapsed'
   document.querySelectorAll('.time-elapsed').forEach((el) => {
      const uploadDate = el.getAttribute('data-date');
      el.innerText = timeSince(uploadDate);
   });

   document.addEventListener('DOMContentLoaded', () => {
    const items = document.querySelectorAll('.item');  // Select all items
    const loadMoreBtn = document.querySelector('.load-more .btn'); // Select the button
    const itemsPerPage = 3;    // Number of items to show initially and on load more
    let currentPage = 0;

    // Function to show items based on the current page
    function showItems() {
        items.forEach((item, index) => {
            if (index < (currentPage + 1) * itemsPerPage) {
                item.style.display = 'block'; // Show item
            } else {
                item.style.display = 'none'; // Hide item
            }
        });
    }

    // Function to toggle between "Load More" and "Show Less"
    function toggleButton() {
        if ((currentPage + 1) * itemsPerPage < items.length) {
            loadMoreBtn.textContent = 'Load More';
        } else {
            loadMoreBtn.textContent = 'Show Less';
        }
    }

    // Initial display setup
    showItems();
    toggleButton();

    // Event listener for the button
    loadMoreBtn.addEventListener('click', () => {
        if (loadMoreBtn.textContent === 'Load More') {
            currentPage++; // Increase page count to show more items
        } else {
            currentPage = 0; // Reset to show initial items
        }
        showItems();
        toggleButton();
       });
   });

</script>

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
