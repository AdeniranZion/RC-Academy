<?php
// Define image details (could be retrieved from a database)
function get_image_details($filename) {
    $details = [
        'IMG-20240616-WA0023.jpg' => ['title' => 'School Event', 'description' => 'A fun event at our school.'],
        'image2.jpg' => ['title' => 'Classroom Activity', 'description' => 'Students engaged in a classroom activity.'],
        'image3.jpg' => ['title' => 'Science Fair', 'description' => 'Innovative science projects presented by students.'],
        'image4.jpg' => ['title' => 'Sports Day', 'description' => 'Students participating in various sports.'],
        'image5.jpg' => ['title' => 'Art Exhibition', 'description' => 'Showcasing student artwork.'],
        'image6.jpg' => ['title' => 'Music Concert', 'description' => 'Students performing in a music concert.'],
        // Add more image details as needed...
    ];

    return $details[$filename] ?? ['title' => 'Unknown', 'description' => 'No description available.'];
}

// Load images based on the page and handle AJAX requests
function load_images($page) {
    $imagesPerPage = 6;
    $imageDir = 'images/'; // The directory containing your images
    $images = glob($imageDir . '*.jpg'); // Get all jpg images in the directory

    $totalImages = count($images);
    $startIndex = ($page - 1) * $imagesPerPage;
    $endIndex = $startIndex + $imagesPerPage;
    $hasMore = $endIndex < $totalImages;
    $hasLess = $page > 1;

    $imagesToLoad = array_slice($images, $startIndex, $imagesPerPage);
    $imageData = [];

    foreach ($imagesToLoad as $image) {
        $filename = basename($image);
        $details = get_image_details($filename);
        $imageData[] = [
            'url' => $image,
            'filename' => $filename,
            'title' => $details['title'],
            'description' => $details['description']
        ];
    }

    return [
        'images' => $imageData,
        'hasMore' => $hasMore,
        'hasLess' => $hasLess
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
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
            padding: 20px;
        }

        .gallery-container {
            max-width: 1200px;
            width: 100%;
            text-align: center;
        }

        .gallery-container h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #333;
        }

        .gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: center;
        }

        .gallery img {
            width: 300px;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .gallery img:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }

        .buttons {
            margin-top: 20px;
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .button {
            padding: 10px 25px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #0056b3;
        }

        /* Modal Styles */
        .modal {
            display: none; /* Hidden by default */
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.8);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 800px;
        }

        .modal-content img {
            width: 100%;
            height: auto;
        }

        .modal-caption {
            margin: 15px 0;
            color: #f0f0f0;
            text-align: center;
            font-size: 1.2rem;
        }

        .close {
            position: absolute;
            top: 10px;
            right: 25px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
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

            .modal-content {
                width: 90%;
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
        <div class="buttons">
            <button id="load-less" class="button">Load Less</button>
            <button id="load-more" class="button">Load More</button>
        </div>
    </div>

    <!-- The Modal -->
    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <div class="modal-content">
            <img id="modal-img">
            <div class="modal-caption" id="caption"></div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let currentPage = 1;
            const gallery = document.getElementById('gallery');
            const loadMoreBtn = document.getElementById('load-more');
            const loadLessBtn = document.getElementById('load-less');
            const modal = document.getElementById('myModal');
            const modalImg = document.getElementById("modal-img");
            const captionText = document.getElementById("caption");
            const closeBtn = document.getElementsByClassName("close")[0];

            function loadImages(page) {
                fetch(`?page=${page}`)
                    .then(response => response.json())
                    .then(data => {
                        gallery.innerHTML = ''; // Clear gallery for new page load
                        data.images.forEach(image => {
                            const imgContainer = document.createElement('div');
                            imgContainer.classList.add('image-container');
                            
                            const img = document.createElement('img');
                            img.src = image.url;
                            img.alt = image.title;
                            img.setAttribute('data-description', image.description);

                            imgContainer.appendChild(img);
                            gallery.appendChild(imgContainer);

                            // Add click event for modal display
                            img.addEventListener('click', function() {
                                modal.style.display = "flex";
                                modalImg.src = img.src;
                                captionText.innerHTML = `<strong>${img.alt}</strong><br>${img.getAttribute('data-description')}`;
                            });
                        });

                        // Handle Load More and Load Less button visibility
                        loadMoreBtn.style.display = data.hasMore ? 'inline-block' : 'none';
                        loadLessBtn.style.display = data.hasLess ? 'inline-block' : 'none';
                    })
                    .catch(error => console.error('Error loading images:', error));
            }

            loadMoreBtn.addEventListener('click', function() {
                currentPage++;
                loadImages(currentPage);
            });

            loadLessBtn.addEventListener('click', function() {
                if (currentPage > 1) {
                    currentPage--;
                    loadImages(currentPage);
                }
            });

            // Initial load
            loadImages(currentPage);

            // Close modal when clicking on <span> (x)
            closeBtn.addEventListener('click', function() {
                modal.style.display = "none";
            });

            // Close modal when clicking outside of the image
            window.addEventListener('click', function(event) {
                if (event.target === modal) {
                    modal.style.display = "none";
                }
            });
        });
    </script>
</body>
</html>
