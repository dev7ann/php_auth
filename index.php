<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultation Company</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Your Custom Styles -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        main {
            background: url('https://www.google.com/url?sa=i&url=https%3A%2F%2Fperceptivepowersconsulting.com%2Fproduct%2Fit-consultation%2F&psig=AOvVaw2M2LPbD3L3luDkpFYrLwEp&ust=1705219424251000&source=images&cd=vfe&opi=89978449&ved=0CBMQjRxqFwoTCJjh4sXz2YMDFQAAAAAdAAAAABAD') center/cover no-repeat;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        main a {
            margin: 10px;
        }

        footer {
            background-color: #3498db; /* Bluish color */
            color: white;
            padding: 1em;
            text-align: center;
        }
    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #3498db;">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="public/dashboard.php">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>   
            </ul>
            <ul class="navbar-nav ml-auto">
                <?php
                // Check if the user is logged in
                if (isset($_SESSION['user_id'])) {
                    echo '<li class="nav-item"><a class="nav-link btn btn-primary" href="#">Profile</a></li>';
                    echo '<li class="nav-item"><a class="nav-link btn btn-primary" href="public/logout.php">Logout</a></li>';
                } else {
                    echo '<li class="nav-item"><a class="nav-link btn btn-primary" href="public/login.php">Login</a></li>';
                    echo '<li class="nav-item"><a class="nav-link btn btn-primary" href="public/register.php">Register</a></li>';
                }
                ?>
            </ul>
        </div>
    </nav>

    <main style="background: url('assets/images/bg.jpeg') center/cover no-repeat; height: 100vh; display: flex; flex-direction: column; align-items: center; justify-content: center; color: #fff; text-align: center; padding: 20px;">

        <h2>Welcome to Our Consultation Services</h2>
        <p>Empowering your business with expert advice and solutions.</p>
        <p>Explore our services and take your business to new heights.</p>

        <div style="margin-top: 20px;">
            <h3>Content 1</h3>
            <p>This is some additional content on the page.</p>
            <p>Feel free to add more sections or elements as needed.</p>
        </div>

        <div style="margin-top: 50px;">
            <h3>Content 2</h3>
            <p>Another section of content to enhance the page.</p>
            <p>Customize and organize the content to suit your consultation company's theme.</p>
        </div>

        <div style="margin-top: 50px;">
            <h3>Content 3</h3>
            <p>Additional information or services can be placed here.</p>
            <p>Ensure the content is relevant and engages your audience.</p>
        </div>


    </main>


    <footer>
        <p>&copy; 2024 Consultation Company. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS and Popper.js (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
