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
                <div class="toggle_button" onclick="toggleMenu();"></div>
            </header> 

            <div class="cont">
                <h2 style="background-color:rgb(255, 125, 19);">Contact US</h2>
                <p style="color:rgb(245, 245, 236);font-size:20px;">260,Highlevel Road,Kottawa <br>
                    Hotline Number : 011-5958783 <br>
                 E-mail-rathnayakagyms@gmail.com<br>
                <br>
                <br>
              </p>
              <p style ="color:rgb(255, 255, 1);font-size:30px;">Opening hours are Monday to Saturday 5.30 am to 6.00 pm
            <br>
        <br>
              </p>
        <p style ="color:rgb(255, 255, 255);font-size:25px;"style ="color:rgb(255, 255, 255);font-size:25px;">Our Branches are located in <br></p>
        <ul class="loc">
            <li>Kottawa</li>
            <li>Kaduwela</li>
            <li>Malabe</li>
            <li>Avissawella</li>
          </ul>  

    </style>  
                
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