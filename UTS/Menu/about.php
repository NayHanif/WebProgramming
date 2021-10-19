<?php
include "../koneksi.php";
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
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">Nayysuw</a>
            <div class="collapse navbar-collapse" id="collapsibleNavbar;">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link mr-4" href="../index.php">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mr-4" href="work.php">
                            Work
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mr-4" href="about.php">
                            About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mr-4" href="findme.php">
                            Find me
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mr-4" href="contact.php">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container-fluid ">
            <!--Grid row-->
            <div class="row text-center text-white bg-dark">
                <!--Grid column-->
                <div class="col-md-2 px-md-4"></div>
                            
                <div class="col-md-4 px-md-4 p-5">
                            <?php
                            $strSQL = "SELECT * FROM gallery WHERE id='4'";
                            $execStrSQL = mysqli_query($conn, $strSQL);
                            
                            if (mysqli_num_rows($execStrSQL) > 0){
                                while ($row = mysqli_fetch_assoc($execStrSQL)){
                            ?>
                    <img src="../image/<?=$row["image_name"] ?>" class="img-fluid" alt="Responsive image"></img>   
                            <?php
                                    }
                                }
                            ?>
                </div>
                            
                <div class="col-md-4 px-md-4">
                    <h2 class="text-white pt-5 pb-3" style="font-family: Playfair Display;">HELLO, I'M NAY</h2>

                            <?php
                            // Mengambil data dari tabel about
                            $strSQL = "SELECT * FROM about";
                            $execStrSQL = mysqli_query($conn, $strSQL);
                            
                            if (mysqli_num_rows($execStrSQL) > 0){
                                while ($row = mysqli_fetch_assoc($execStrSQL)){
                            ?>

                    <p class="text-white text-left"><?=$row["isi_par"] ?></p>

                            <?php
                                    }
                                }
                            ?>

                </div><div class="col-md-2 px-md-4">
                            
                </div>
            </div>

            <div class="row text-center text-white bg-dark pb-5 pt-3">
                <div class="col text-center">
                    <a href="findme.php"><button type="button" class="btn btn-light font-weight-bold text-dark pl-4 pr-4">Find Me!</button></a>
                </div>
            </div>

            <div class="row text-center bg-white pb-3">
                <!--Grid column-->
                <div class="col-md-2 px-md-4"></div>
                            
                <div class="col-md-4 px-md-4">
                <h2 class="text-dark pt-5 pb-3">SOME OF MY WORK</h2>

                    <?php
                    // Mengambil data dari tabel about
                    $strSQL = "SELECT * FROM about";
                    $execStrSQL = mysqli_query($conn, $strSQL);

                    if (mysqli_num_rows($execStrSQL) > 0){
                        while ($row = mysqli_fetch_assoc($execStrSQL)){
                    ?>

                    <p class="text-dark text-left"><?=$row["isi_par"] ?></p>

                    <?php
                            }
                        }
                    ?>

                </div>
                        <?php
                        $strSQL = "SELECT * FROM gallery LIMIT 0, 1";
                        $execStrSQL = mysqli_query($conn, $strSQL);
                        
                        if (mysqli_num_rows($execStrSQL) > 0){
                            while ($row = mysqli_fetch_assoc($execStrSQL)){
                        ?> 
                <div class="col-md-4 px-md-4 pt-5 pb-4">
                        <img src="../image/<?=$row["image_name"] ?>" alt="Responsive image" class="img-thumbnail" data-wow-delay="0.3s"></img>

                </div>
                        <?php
                                }
                            }
                        ?>

                <div class="col-md-2 px-md-4">
                            
                </div>
            </div>

            <div class="row text-center pb-5">
                <div class="col text-center">
                    <a href="work.php"><button type="button" class="btn btn-dark font-weight-bold text-white pl-4 pr-4">Find More!</button></a>
                </div>
            </div>
        </div>   
       
        <footer class="page-footer font-small" style="font-size: smaller;">
            <!-- Footer Links -->
            <div class="container-fluid text-center bg-secondary text-white">
                
                <!-- Grid row -->
                <div class="row pt-5">
            
                    <!-- Grid column -->
                    <div class="col">
                    <!-- Content -->
                        <p class="text-light">© 2021 - Anayah Hanifah Elsyaf</p>
                        <p><a class="text-dark" href="#section1">Back to top</a></p>
            
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