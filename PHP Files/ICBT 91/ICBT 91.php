<?php
session_start();

?>

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

                <form action="" method="POST">
                    <input type="text" id="searchBar" placeholder="" value="Search..." maxlength="25" autocomplete="off" onmousedown="active();" onblur="inactive();"><input type="submit" id="searchBtn" value="Go!" > 
                    </form>
               
                <div class="container">

                <div class="info">
                <h1 style="color: red; margin-left:150%; "><b> 
                <?php  if (isset($_SESSION['name'])) : ?>
                <?php echo $_SESSION['name']; ?> <b> </h1>

                </div>
                
                <a class="nav-link" href="logout.php">
                <h3 style="margin-left:150%;">Logout</h3>
                </a>

                </div>
                <?php endif ?>


            <div class="toggle_button" onclick="toggleMenu();"></div>
            </header> 
            <video src="Images/Wokout.mp4" muted loop autoplay></video>
            <div class="overplay"></div>

            <div class="text">
            <h2>Be Strong</h2>
            <h3>Be Motivated</h3>
            </div>
        </section>
        <!--Javascript for toggle button-->
        <script type="text/javascript">
        function toggleMenu(){
            var menuToggle=document.querySelector('.toggle_button');
            var banner = document.querySelector('.banner');
            menuToggle.classList.toggle('active');
            banner.classList.toggle('active');
        }

        </script>        

         <!--Javascript for serching bar-->

        <script type="text/javascript">
            function active(){
                var searchBar=document.getElementById('searchBar');

                if(searchBar.value=='Search...'){
                    searchBar.value=''
                    searchBar.placeholder='Search...'

                }
            }
            function inactive(){
                var searchBar=document.getElementById('searchBar');

                if(searchBar.value==''){
                    searchBar.value='Search...'
                    searchBar.placeholder=''
                }
            }

            </script>
    </body>
</html>
