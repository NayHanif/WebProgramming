<?php
include "koneksi.php";
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Bootstrap Font Icon CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link href="https://fonts.googleapis.com/css?family=Playfair%20Display:400" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style> html {scroll-behavior: smooth;}</style>
        <title>Nayysuw!</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-light" id="section1">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">Nayysuw</a>
            <div class="collapse navbar-collapse dual-collapse2" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link mr-4" href="index.php">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mr-4" href="Menu/work.php">
                            Work
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mr-4" href="Menu/about.php">
                            About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mr-4" href="Menu/findme.php">
                            Find me
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mr-4" href="Menu/contact.php">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container-fluid">
            <!--Grid row-->
            <div class="row justify-content-center bg-image" style="background-image: url('image/bg-image.jpeg'); background-repeat: no-repeat; background-size: cover; background-position: center center; height: 90vh;">
           
            <!--Grid column-->
                <div class="col-md-5 text-center" style="  position: absolute; top: 80%; left: 50%; transform: translate(-50%, -50%);">
                    <h1 class="display-1 text-white centered" style="font-family: Playfair Display; font-style: italic;">Nayysuw</h1>    
                </div>
            </div>
        </div>   
        <!-- Content -->
        <div class="container-fluid">
            <!--Grid row-->

            <?php
                    $strSQL = "SELECT * FROM introduction";
                    $execStrSQL = mysqli_query($conn, $strSQL);
                    
                    if (mysqli_num_rows($execStrSQL) > 0){
                        while ($row = mysqli_fetch_assoc($execStrSQL)){
                    ?>
                
            <div class="row" style="margin: 2%;">
                <div class="col-md-2 px-md-4">

                </div><div class="col-md-4 px-md-4">
                    <h2 class="text-dark"><?=$row["judul"] ?></h2>
                    <p class="text-secondary"><?=$row["isi"] ?></p>
                </div>
                <div class="col-md-4 px-md-4 p-2">
                    <img src="image/<?=$row["image_name"] ?>" class="img-fluid" alt="Responsive image"></img>   
                </div>
            </div>
            <hr></hr>
                    <?php
                            }
                        }
                    ?>
                
            <div class="row text-center">
                <div class="col">
                        <a href="Menu/about.php"><button type="button" class="btn btn-dark">Wanna know about me?</button></a>
                        <a href="Menu/work.php"><button type="button" class="btn btn-dark">Wanna see more work?</button></a>
                </div>        
            </div>
        </div>


        <footer class="page-footer font-small white pt-3" style="font-size: smaller;">
            <!-- Footer Links -->
            <div class="container-fluid text-center p-3 bg-dark text-white">
                
                <!-- Grid row -->
                <div class="row">
            
                    <!-- Grid column -->
                    <div class="col">
                    <!-- Content -->
                        <p class="text-secondary">© 2021 - Anayah Hanifah Elsyaf</p>
                        <p><a class="text-light" href="#section1">Back to top</a></p>
            
                    </div>
                </div>
                <!-- Grid row -->
        
            </div>
            <!-- Footer Links -->
        </footer>
        <!-- Footer -->
            
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>