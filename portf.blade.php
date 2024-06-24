<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yemi - Backend Developer Portfolio</title>
    <style>
        /* General styles */
            body {
                font-family: Arial, sans-serif;
                background-color: #061c30;
                color: #ccc;
                margin: 0;
                padding: 0;
                overflow-x: hidden; /* Prevent horizontal scrollbar */
            }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .content {
            flex-grow: 1;
            padding-right: 20px;
            order: 2; /* Content on the left */
        }

        .sidebar {
            flex-basis: 200px;
            padding-left: 20px;
            position: sticky;
            top: 20px;
            order: 1; /* Sidebar on the left */
        }

        /* Navbar styles */
        .navbar {
            position: fixed;
            left: 0;
            top: 0;
            width: 200px;
            background-color: #0f3552;
            height: 100vh;
            overflow-y: auto; /* Enable scrolling if needed */
            padding-top: 20px;
        }

        .navbar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .navbar ul li {
            margin-bottom: 10px;
        }

        .navbar ul li a {
            display: block;
            color: #ffffff;
            text-decoration: none;
            font-size: 1.2rem;
            padding: 10px;
            transition: background-color 0.3s ease;
        }

        .navbar ul li a:hover {
            background-color: #154567;
        }

        /* Header styles */
        header {
            text-align: center;
            margin-bottom: 50px;
            padding: 20px;
        }

        h1 {
            font-size: 3rem;
            margin-bottom: 10px;
        }

        p {
            font-size: 1.2rem;
            line-height: 1.6;
        }

        /* Tech stack styles */
        .tech-stack {
            margin-top: 50px;
        }

        .tech-stack h2 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .tech-stack ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .tech-stack ul li {
            margin: 5px;
            padding: 8px 12px;
            background-color: #0f3552;
            border-radius: 5px;
            font-size: 1.2rem;
        }

        /* Contact styles */
        .contact {
            margin-top: 50px;
        }

        .contact h2 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .contact a {
            display: block;
            color: #ffffff;
            text-decoration: none;
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        .contact a:hover {
            text-decoration: underline;
        }

        /* SVG illustration */
        .illustration {
            max-width: 400px;
            width: 100%;
            height: auto;
            order: 3; /* Illustration on the right */
        }
    </style>
</head>

<body>
    <div class="navbar">
        <ul>
            <li><a href="#about">About</a></li>
            <li><a href="#tech-stack">Tech Stack</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </div>

    <div class="container">
        <div class="sidebar">
            <ul>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact Me</a></li>
            </ul>
        </div>

        <div class="content">
            <header id="about">
                <h1>Yemi</h1>
                <p>Backend Developer</p>
            </header>
            
            <div class="tech-stack" id="tech-stack">
                <h2>Tech Stack</h2>
                <ul>
                    <li>Python</li>
                    <li>Java</li>
                    <li>Node.js</li>
                    <li>SQL / NoSQL Databases</li>
                </ul>
            </div>
            
            <div class="contact" id="contact">
                <h2>Contact</h2>
                <a href="mailto:yemi@example.com">yemi@example.com</a>
                <a href="https://linkedin.com/in/yemi" target="_blank">LinkedIn</a>
                <a href="https://github.com/yemi" target="_blank">GitHub</a>
            </div>
        </div>

        <img src="/images/undraw_laravel_and_vue.svg" alt="Illustration" class="illustration">
    </div>
</body>

</html>
