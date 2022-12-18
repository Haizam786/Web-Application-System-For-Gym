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
              <img src="Images/sup/i1.jpg">
              <h2><bold>Mass Tech</bold></h2>
              <h3 style="color:Yellow;">Rs.10,000/-</h3>
              <p>Mass gainer is a nutritional supplement that contain a healthy blend of carbohydrates, proteins and fats to provide calories</p>
            </div>
            <div class="col-1">
              <img src="Images/sup/i3.jpg" >
              <h2><bold>Nitro Tech</bold></h2>
              <h3 style="color:Yellow;">Rs.15,000/-</h3>
              <p>Complex proteins in Nitro Tech contribute to growth in muscle mass and muscle maintenance</p>
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