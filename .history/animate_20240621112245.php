<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
    <style>
        .newsbody {
            font-family: 'Arial', sans-serif;
            background: #fff;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .section-title {
            text-align: center;
            margin-bottom: 2rem;
            font-size: 4rem;
        }

        .news-section {
            margin-bottom: 3rem;
        }
        .events-section {
            margin-bottom: 3rem;
            background-color: #fff;
        }

        .news-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .card {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            overflow: hidden;
            transition: transform 0.3s;
            flex: 1 1 calc(33.333% - 20px);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card img {
            width: 100%;
            height: auto;
        }

        .card-content {
            padding: 20px;
        }

        .card-title {
            font-size: 2rem;
            margin: 0 0 10px;
            color: #333;
        }

        .card-date {
            font-size: 1.4rem;
            color: #777;
            margin-bottom: 10px;
        }

        .card-text {
            flex-grow: 1;
            font-size: 1.4rem;
            color: #555;
            margin-bottom: 20px;
        }

        .card-footer {
            padding: 20px;
            background: #f4f4f9;
            text-align: right;
        }

        .card-footer a {
            text-decoration: none;
            color: #e070dd;
            font-weight: bold;
            transition: color 0.3s;
        }

        .card-footer a:hover {
            color: #0056b3;
        }

        .events-grid {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 20px;
        }

        .calendar-container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .calendar-header {
            font-size: 1.8rem;
            color: #e070dd;
            margin-bottom: 10px;
        }

        .calendar {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            grid-gap: 5px;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .calendar div {
            text-align: center;
            padding: 10px;
            border-radius: 4px;
            background: #f9f9f9;
            cursor: pointer;
            transition: background 0.3s;
            position: relative;
        }

        .calendar div:hover {
            background: #e9e9e9;
        }

        .calendar div.event-date:hover::after {
            content: attr(data-details); /* Show event details on hover */
            position: absolute;
            bottom: 100%;
            left: 50%;
            transform: translateX(-50%);
            padding: 5px;
            background: #bbb;
            color: #fff;
            border-radius: 4px;
            white-space: nowrap;
            font-size: 0.9rem;
            z-index: 10;
        }

        .event-date {
            background: #FFD700; /* Gold color for event dates */
            color: #e070dd; /* Dark text color for contrast */
            font-weight: bold;
        }

        .event-details {
            background: #f4f4f9;
            border-radius: 8px;
            margin-top: 40px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .event-details h3 {
            margin-top: 0;
            font-size: 2.5rem;
            font-weight: bolder;
            color: #e070dd;
        }

        .event-details p {
            margin: 0.5rem 0;
            font-size: 1.8rem;
            color: #555;
        }

        @media (max-width: 768px) {
            .card {
                flex: 1 1 calc(50% - 20px);
            }

            .events-grid {
                grid-template-columns: 1fr;
                display: flex;
                flex-direction: column;
              }
              
        }

        @media (max-width: 480px) {
            .card {
                flex: 1 1 100%;
            }
        }
    </style>
</head>
<body>
  <section class="newsbody">
    <div class="container">
        <!-- News Section -->
        <!-- <h1 class="section-title" id="typed">The Royal Gazette</h1> -->
        <h1 class="section-title">
            <span id="typed"></span>
        </h1>
        <section class="news-section">
            <div class="news-grid">
                <?php
                // Sample data for news
                $newsItems = [
                    [
                        "title" => "School Science Fair",
                        "date" => "June 25, 2024",
                        "image" => "images/IMG-20240616-WA0036.jpg",
                        "excerpt" => "Join us for the annual science fair where students showcase their projects.",
                        "link" => "#"
                    ],
                    [
                        "title" => "New Library Opening",
                        "date" => "July 10, 2024",
                        "image" => "images/IMG-20240616-WA0023.jpg",
                        "excerpt" => "We are excited to announce the opening of our new library.",
                        "link" => "#"
                    ],
                    [
                        "title" => "Summer Camp Registration",
                        "date" => "August 1, 2024",
                        "image" => "images/IMG-20240616-WA0031.jpg",
                        "excerpt" => "Register now for our summer camp full of fun and learning.",
                        "link" => "#"
                    ]
                ];

                // Loop through the news items and display them
                foreach ($newsItems as $key => $news) : ?>
                  <div class="card">
                      <img src="<?php echo $news['image']; ?>" alt="<?php echo $news['title']; ?>">
                      <div class="card-content">
                          <h3 class="card-title"><?php echo $news['title']; ?></h3>
                          <p class="card-date"><i class="fas fa-clock" style="color: #ccc"></i>  <?php echo $news['date']; ?></p>
                          <p class="card-text"><?php echo $news['excerpt']; ?></p>
                      </div>
                      <div class="card-footer">
                          <a href="javascript:void(0);" onclick="showNewsDetails(<?php echo $key; ?>)">Read More</a>
                      </div>
                  </div>
              <?php endforeach; ?>
              
            </div>
        </section>

        <!-- Events Section -->
        <section class="events-section">
            <h1 class="section-title">Upcoming Events</h1>
            <div class="events-grid">
                <!-- Calendar -->
                <div class="calendar-container">
                    <div class="calendar-header">
                        <?php echo date('F Y'); // Displays the current month and year ?>
                    </div>
                    <div class="calendar">
                        <?php
                        // Sample events with additional details
                        $events = [
                            1 => ["title" => "Science Fair", "time" => "10:00 AM", "location" => "School Auditorium", "details" => "Annual school science fair with exciting projects from students."],
                            2 => ["title" => "Library Opening", "time" => "9:00 AM", "location" => "New Library", "details" => "Celebrate the opening of our new library with a ribbon-cutting ceremony."],
                            3 => ["title" => "Summer Camp Registration", "time" => "12:00 PM", "location" => "Main Office", "details" => "Register now for our fun-filled summer camp."],
                            7 => ["title" => "Parents' Meeting", "time" => "2:00 PM", "location" => "Room 101", "details" => "Monthly meeting for parents to discuss school activities."],
                            14 => ["title" => "Sports Day", "time" => "8:00 AM", "location" => "School Field", "details" => "Join us for a day of fun and sports competitions."],
                            18 => ["title" => "Art Exhibition", "time" => "11:00 AM", "location" => "Art Gallery", "details" => "Showcase of students' artwork."],
                            23 => ["title" => "Music Concert", "time" => "7:00 PM", "location" => "School Hall", "details" => "Enjoy performances by our school band and choir."],
                            30 => ["title" => "Graduation Ceremony", "time" => "5:00 PM", "location" => "School Auditorium", "details" => "Celebrate the achievements of our graduates."]
                        ];

                        // Number of days in the current month
                        $daysInMonth = date('t');

                        // Loop through each day of the month
                        for ($day = 1; $day <= $daysInMonth; $day++) {
                            if (isset($events[$day])) {
                                // If there's an event on this day, highlight it and add hover details
                                echo '<div class="event-date" data-details="' . $events[$day]['title'] . ' - ' . $events[$day]['details'] . '" onclick="showEventDetails(' . $day . ')">' . $day . '</div>';
                            } else {
                                // Regular day without an event
                                echo '<div>' . $day . '</div>';
                            }
                        }
                        ?>
                    </div>
                </div>

                <!-- Event Details -->
                <div class="event-details">
                    <h3 id="event-title">Event Details</h3>
                    <p id="event-description">View all of our events this month</p>
                    <p id="event-time"></p>
                    <p id="event-location"></p>
                </div>
                <a href="calendar.php">View</a>
            </div>
        </section>
    </div>
  </section>


    <script>
        // Function to show news details
        function showNewsDetails(newsId) {
            const news = <?php echo json_encode($newsItems); ?>; // PHP array to JavaScript object

            // Update DOM with news details
            if (news[newsId]) {
                // Example: Display details in a modal or another section
                alert('News Title: ' + news[newsId].title + '\nDate: ' + news[newsId].date + '\nDetails: ' + news[newsId].excerpt);
            } else {
                alert('News details not found.');
            }
        }


        // Sample event details with time and location
        const events = {
            1: { title: "Science Fair", description: "Annual school science fair with exciting projects from students.", time: "10:00 AM", location: "School Auditorium" },
            2: { title: "Library Opening", description: "Celebrate the opening of our new library with a ribbon-cutting ceremony.", time: "9:00 AM", location: "New Library" },
            3: { title: "Summer Camp Registration", description: "Register now for our fun-filled summer camp.", time: "12:00 PM", location: "Main Office" },
            7: { title: "Parents' Meeting", description: "Monthly meeting for parents to discuss school activities.", time: "2:00 PM", location: "Room 101" },
            14: { title: "Sports Day", description: "Join us for a day of fun and sports competitions.", time: "8:00 AM", location: "School Field" },
            18: { title: "Art Exhibition", description: "Showcase of students' artwork.", time: "11:00 AM", location: "Art Gallery" },
            23: { title: "Music Concert", description: "Enjoy performances by our school band and choir.", time: "7:00 PM", location: "School Hall" },
            30: { title: "Graduation Ceremony", description: "Celebrate the achievements of our graduates.", time: "5:00 PM", location: "School Auditorium" }
        };

        // Function to show event details
        function showEventDetails(date) {
            if (events[date]) {
                document.getElementById('event-title').innerText = events[date].title;
                document.getElementById('event-description').innerText = events[date].description;
                document.getElementById('event-time').innerHTML = '<i class="fas fa-clock"></i> ' + events[date].time;
                document.getElementById('event-location').innerHTML = '<i class="fas fa-map-marker-alt"></i> ' + events[date].location;
            } else {
                document.getElementById('event-title').innerText = "Event Details";
                document.getElementById('event-description').innerText = "Select a date to see event details.";
                document.getElementById('event-time').innerText = "";
                document.getElementById('event-location').innerText = "";
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Typed.js
            new Typed('#typed', {
                strings: ['The Royal Gazette'],  // Text to be typed
                typeSpeed: 80,                   // Typing speed in milliseconds
                backSpeed: 25,                   // Backspacing speed in milliseconds
                startDelay: 100,                 // Delay before typing starts
                backDelay: 1500,                  // Delay before backspacing starts
                loop: true,                      // Loop the typing animation
                showCursor: true,                // Show the cursor
                cursorChar: ' ',                 // Cursor character
                autoInsertCss: true              // Automatically insert CSS for cursor
            });
        });

    </script>
</body>
</html>
