<?php
  include_once "partials/header.php";  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Royal Gazette</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Roboto:wght@400;500&display=swap">
  <style>
        /* News Section Style */
        .news-section {
  padding: 40px 20px;
  background: linear-gradient(to right, #e0a3cc, #f6e3e9); /* Purple to light pink gradient */
}

.news-container {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 20px;
  margin-top: 30px;
}

.news-item {
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  display: flex;
  flex-direction: column;
}

.news-item:hover {
  transform: translateY(-5px);
  box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
}

.news-item img {
  width: 100%;
  height: auto;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
}

.news-content {
  padding: 15px; /* Reduced padding */
  flex-grow: 1;
}

.news-item h3 {
  font-family: 'Merriweather', serif;
  font-size: 1.4em; /* Slightly reduced font size */
  color: #333;
  margin-bottom: 8px; /* Reduced margin */
}

.news-item p {
  font-size: 0.9em; /* Reduced font size */
  color: #666;
  margin-bottom: 10px; /* Reduced margin */
  line-height: 1.5;
}

.news-item .btn {
  align-self: flex-start;
  padding: 8px 16px; /* Smaller button padding */
  font-size: 0.9em;
  background-color: #e070dd;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  text-decoration: none;
  transition: background-color 0.3s ease;
}

.news-item .btn:hover {
  background-color: #c05db8;
}

/* Read more/less toggle button */
.toggle-btn {
  display: block;
  margin-top: 8px; /* Reduced margin */
  font-size: 0.8em; /* Smaller font size */
  color: #007bff;
  cursor: pointer;
  text-decoration: underline;
}


/* Responsive Design */
@media (max-width: 768px) {
  .news-item img {
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
  }
}

@media (max-width: 480px) {
  .news-item h3 {
    font-size: 1.2em; /* Further reduced font size */
  }

  .news-item p {
    font-size: 0.8em; /* Further reduced font size */
    margin-bottom: 8px; /* Reduced margin */
  }

  .toggle-btn {
    font-size: 0.7em; /* Smaller font size */
  }
}

    </style>
</head>
<body>

  <!-- Header -->
  <header class="header">
    <div class="container">
      <h1>The Royal Gazette</h1>
      <p>Your trusted source for the latest news and stories</p>
    </div>
  </header>

  <section class="news-section">
    <div class="container news-container">
        <!-- News Item 1 -->
        <div class="news-item">
        <div class="img-wrapper">
            <img src="images/wids2.jpg" alt="News Image">
        </div>
        <div class="news-content">
            <h3>Breaking News: Major Event Unfolds</h3>
            <p>Today, something extraordinary happened. The details are unfolding as we speak...</p>
            <div class="expandable-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
            </div>
            <span class="toggle-btn">Read more</span>
            <a href="#" class="btn">Continue Reading</a>
        </div>
        </div>
        <!-- News Item 2 -->
        <div class="news-item">
        <div class="img-wrapper">
            <img src="images/IMG-20240616-WA0055.jpg" alt="News Image">
        </div>
        <div class="news-content">
            <h3>Technology Update: New Innovations</h3>
            <p>The tech world is buzzing with the latest advancements that promise to change the way we live...</p>
            <div class="expandable-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
            </div>
            <span class="toggle-btn">Read more</span>
            <a href="#" class="btn">Continue Reading</a>
        </div>
        </div>
        <!-- News Item 3 -->
        <div class="news-item">
        <div class="img-wrapper">
            <img src="images/IMG-20240616-WA0031.jpg" alt="News Image">
        </div>
        <div class="news-content">
            <h3>Technology Update: New Innovations</h3>
            <p>The tech world is buzzing with the latest advancements that promise to change the way we live...</p>
            <div class="expandable-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
            </div>
            <span class="toggle-btn">Read more</span>
            <a href="#" class="btn">Continue Reading</a>
        </div>
        </div>
        <!-- Additional news items can be added similarly -->
    </div>
  </section>

  <!-- Footer -->

  <?php include_once "partials/footer.php"; ?>

  <!-- JavaScript to handle expandable content -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const toggleButtons = document.querySelectorAll('.toggle-btn');
      
      toggleButtons.forEach(button => {
        button.addEventListener('click', function () {
          const newsItem = this.closest('.news-item');
          newsItem.classList.toggle('expanded');
          this.textContent = newsItem.classList.contains('expanded') ? 'Read less' : 'Read more';
        });
      });
    });
  </script>

</body>
</html>
