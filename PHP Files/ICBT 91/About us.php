<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <title>Rathnayaka GYMS </title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>   
    </div>
    </div> 
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


    <div class="abu">
        <h2 style="color:Yellow;">Our Story</h2>
        <p style="color:rgb(245, 245, 236);">Rathnayaka GYMS was founded in 2002 as a family owned and operated business. The Gym and Fitness founders didn’t want it to be just another gym center - they wanted to be the best in the industry and set their minds to doing so! Since its birth, Rathnayaka GYMS has grown into one of Sri Lanka’s largest online fitness center and equipment & spplements retailers having helped over 20,000 customers live longer, happier and healthier lives</p>
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