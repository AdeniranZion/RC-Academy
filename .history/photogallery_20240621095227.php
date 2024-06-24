<?php
// load_images.php functionality within the same file
function load_images($page) {
    $imagesPerPage = 6;
    $imageDir = 'images/'; // The directory containing your images
    $images = glob($imageDir . '*.jpg'); // Get all jpg images in the directory

    $totalImages = count($images);
    $startIndex = ($page - 1) * $imagesPerPage;
    $endIndex = $startIndex + $imagesPerPage;
    $hasMore = $endIndex < $totalImages;

    $imagesToLoad = array_slice($images, $startIndex, $imagesPerPage);
    $imageData = [];

    foreach ($imagesToLoad as $image) {
        $imageData[] = [
            'url' => $image,
            'description' => pathinfo($image, PATHINFO_FILENAME)
        ];
    }

    return [
        'images' => $imageData,
        'hasMore' => $hasMore
    ];
}

// Handle AJAX request
if (isset($_GET['page'])) {
    header('Content-Type: application/json');
    echo json_encode(load_images((int)$_GET['page']));
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Photo Gallery</title>
    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .gallery-container {
            text-align: center;
            max-width: 1200px;
            width: 100%;
            padding: 20px;
        }

        .gallery-container h1 {
            margin-bottom: 20px;
            font-size: 2rem;
        }

        .gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
        }

        .gallery img {
            width: 300px;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .gallery img:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        .load-more {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .load-more:hover {
            background-color: #0056b3;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .gallery img {
                width: 100%;
            }
        }

        @media (max-width: 480px) {
            .gallery img {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="gallery-container">
        <h1>School Photo Gallery</h1>
        <div id="gallery" class="gallery">
            <!-- Images will be loaded here by JavaScript -->
        </div>
        <button id="load-more" class="load-more">Load More</button>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let currentPage = 1;
            const gallery = document.getElementById('gallery');
            const loadMoreBtn = document.getElementById('load-more');

            function loadImages(page) {
                fetch(`?page=${page}`)
                    .then(response => response.json())
                    .then(data => {
                        data.images.forEach(image => {
                            const img = document.createElement('img');
                            img.src = image.url;
                            img.alt = image.description;
                            gallery.appendChild(img);
                        });

                        // Hide the load more button if there are no more images to load
                        if (!data.hasMore) {
                            loadMoreBtn.style.display = 'none';
                        }
                    })
                    .catch(error => console.error('Error loading images:', error));
            }

            loadMoreBtn.addEventListener('click', function() {
                currentPage++;
                loadImages(currentPage);
            });

            // Initial load
            loadImages(currentPage);
        });
    </script>
</body>
</html>
