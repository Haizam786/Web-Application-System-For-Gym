<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <title>Rathnayaka GYMS </title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class ="menu">
            <ul>
            <li><a href="ICBT 91.php" onclick="toggleMenu();">Home</a></li>
                <li><a href="Supplements.php" onclick="toggleMenu();">Bodybuilding Supplements</a></li>
                <li><a href="Equipment.php" onclick="toggleMenu();">Fitness Equipment </a></li>
                <li><a href="Gallery.php" onclick="toggleMenu();">Gallery </a></li>
                <li><a href="Packages.php" onclick="toggleMenu();">Membership Packages </a></li>
                <li><a href="About us.php" onclick="toggleMenu();">About Us</a></li>
                <li><a href="Contact Us.php" onclick="toggleMenu();">Contact Us</a></li>
                <li><a href="index.php" onclick="toggleMenu();">Register/Login</a></li>
            </ul>
        </div>
        <section class="banner">
            <header>
                <h2 class="logo">Rathnayaka Gyms</h2>
                <div class="toggle_button" onclick="toggleMenu();">&#9776</div>
            </header> 
        
        
            <div class="col-1">
              <img src="Images/Equi/e3.jpg">
              <h2><bold>Incline Bench Press Machine</bold></h2>
              <h3 style="color:Yellow;">Rs.50,000/-</h3>
              <p>Who doesn’t enjoy the bench press? It is probably the most popular upper body exercise machine in gyms across the world.
                It allows you to change the angle of the exercise to target the same muscle groups in a different way. </p>
            </div>
            <div class="col-1">
              <img src="Images/Equi/e4.jpg" >
              <h2><bold>Treadmil Fitrun</bold></h2>
              <h3 style="color:Yellow;">Rs.45,000/-</h3>
              <p>Take control of your fitness with the newly updated Treadmil Fitrun. This affordable treadmill features a spacious belt surface that is perfect for walking, jogging, or running, and is supported by 8 compression shock absorbers to provide safe cushioning for your knees, back, and joints. </p>
            </div>
        
        </section>
        <script type="text/javascript">
            function toggleMenu(){
                var menuToggle=document.querySelector('.toggle_button');
                var banner = document.querySelector('.banner');
                menuToggle.classList.toggle('active');
                banner.classList.toggle('active');
            }
            </script>        
        </body>
    </html>