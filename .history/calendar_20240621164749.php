<?php include_once "partials/header.php"; ?>

<?php
// Define an array of news and events with specific dates
$newsAndEvents = [
    // ... (your events array)
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
   <p><a href="index.php">home</a> / events</p>
</section>

<section class="courses">
    <h1 class="heading">Our Latest News and Events</h1>

    <div class="box-container" id="news-container">
        <?php displayNewsAndEvents($newsAndEvents); ?>
    </div>

    <div class="load-buttons">
        <div class="btn" id="load-more">Load More</div>
        <div class="btn" id="load-less" style="display: none;">Load Less</div>
    </div>
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

    // Load More / Load Less functionality
    document.addEventListener("DOMContentLoaded", function () {
        const boxes = document.querySelectorAll('.courses .box-container .box');
        const loadMoreButton = document.getElementById('load-more');
        const loadLessButton = document.getElementById('load-less');
        const boxesPerPage = 3; // Number of boxes to show per click
        let currentlyVisible = boxesPerPage;

        // Function to update the visibility of boxes
        function updateVisibility() {
            boxes.forEach((box, index) => {
                if (index < currentlyVisible) {
                    box.classList.add('visible');
                } else {
                    box.classList.remove('visible');
                }
            });

            // Show or hide the load buttons based on the current visibility
            loadMoreButton.style.display = (currentlyVisible < boxes.length) ? 'inline-block' : 'none';
            loadLessButton.style.display = (currentlyVisible > boxesPerPage) ? 'inline-block' : 'none';
        }

        // Initial visibility update
        updateVisibility();

        // Event listener for "Load More" button
        loadMoreButton.addEventListener('click', function () {
            currentlyVisible += boxesPerPage;
            updateVisibility();
        });

        // Event listener for "Load Less" button
        loadLessButton.addEventListener('click', function () {
            currentlyVisible = Math.max(boxesPerPage, currentlyVisible - boxesPerPage);
            updateVisibility();
        });
    });
</script>

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
