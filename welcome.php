<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="assets/css/welcome.css" rel="stylesheet">
</head>

<body>
        <!-- Fontawesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous" />

 <!-- NAVBAR -->
    <nav id="navbar" class="nav">
        <ul class="nav-list">
        <li>
                <a href="#welcome-section">Home</a>
            </li>

            <li>
                <a href="service.php">Services</a>
            </li>
            <li>
                <a href="reset-password.php">Reset password</a>
            </li>
            <li>
                <a href="logout.php">logout</a>
            </li>
             <li>
                <a  href="#welcome-section"><?php echo htmlspecialchars($_SESSION["username"]); ?></a>
            </li>
        </ul>
    </nav>

    <!-- welcome-section -->
    <!-- <section id="welcome-section">
  

    </section> -->

    <!-- projects -->
    <section id="projects" class="projects-section">
        <h2 class="projects-section-header">Services</h2>

        <div class="projects-grid">
            <!-- 1 Project "Product Landing Page"-->
            <a href="admin/add-income.php" target="_blank" class="project project-tile">
               
                <p class="project-title">
                   Apply Income Certificate
                </p>
            </a>
            <!-- 2 Project "Reaction tester"-->
            <a href="admin/add-birth.php" target="_blank" class="project project-tile">
             
                <p class="project-title">
                Apply Birth Certificate
                </p>
            </a>
            <!-- 3 Project "Tribute Page"-->
            <a href="admin/add-death.php" target="_blank" class="project project-tile">
             
                <p class="project-title">
                Apply death Certificate
                </p>
            </a>
            <!-- 4 Project "Italians Survey Form"-->
            <a href="admin/add-marriage.php" target="_blank" class="project project-tile">
             
             <p class="project-title">
             Apply marriage Certificate
             </p>
         </a>
            <!-- 5 Project "Technical Documentation Page"-->
            <a href="admin/add-consumer.php" target="_blank" class="project project-tile">
             
             <p class="project-title">
             Apply Change ration card
             </p>
         </a>
 <!-- 6 Project "Animation ball"-->
 <a href="admin/add-widow.php" target="_blank" class="project project-tile">
             
             <p class="project-title">
             Apply widow Certificate
             </p>
         </a>
        </div>

        <a href="#" class="btn btn-show-all" target="_blank">Show all<i
                class="fas fa-chevron-right myDimension"></i></a>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy;
            <a href="" target="_blank">Gram panchayat</a>
        </p>
    </footer>
</body>
</html>