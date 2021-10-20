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
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">Nayysuw</a>
            <div class="collapse navbar-collapse dual-collapse2" id="collapsibleNavbar;">
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
            <div class="row">
            <!--Grid column-->
                <div class="col-2"></div>
                <div class="col-8 pt-5 pb-5">
                    <h3 class="display-4" style="font-family: Playfair Display; font-style: italic;"><u>CONTACT ME</u></h3>
                </div>
                <div class="col-2"></div>
            </div>
            <!--Grid row-->
            <div class="row">
            <!--Grid column-->
                <div class="col-2"></div>
                <div class="col-5 pt-5 pb-5">
                    <p>Apakah Anda ingin lebih tau tentang saya? Mencari tahu apa lagi hobi saya dan berseluncur lebih jauh?</p>
                    <p>Temukan saya lebih jauh!</p>
                </div>
                <div class="col-3 pt-5 pb-5">

                            <?php
                            // Mengambil data dari tabel about
                            $strSQL = "SELECT * FROM contact";
                            $execStrSQL = mysqli_query($conn, $strSQL);
                            
                            if (mysqli_num_rows($execStrSQL) > 0){
                                while ($row = mysqli_fetch_assoc($execStrSQL)){
                            ?>

                    <p class="font-weight-bold"><?=$row["nama_tempat"] ?></p>
                    <p><?=$row["alamat"] ?></p>

                            <?php
                                    }
                                }
                            ?>

                </div>
                <div class="col-2"></div>
            </div>
            <hr></hr>
                            <?php
                            // Mengambil data dari tabel about
                            $strSQL = "SELECT * FROM contactpersonal";
                            $execStrSQL = mysqli_query($conn, $strSQL);
                            
                            if (mysqli_num_rows($execStrSQL) > 0){
                                while ($row = mysqli_fetch_assoc($execStrSQL)){
                            ?>
            <div class="row">
            <!--Grid column-->
                <div class="col-2"></div>
                <div class="col-3 pt-5 pb-5">    
                    <img src="../image/<?=$row["foto_cp"] ?>" class="img-fluid" alt="Responsive image"></img>   
                </div>
                <div class="col-5 pt-5 pb-5">

                    <p class="font-weight-bold"><?=$row["nama_cp"] ?></p>
                    <p><?=$row["keterangan"] ?></p>
                    <p>Kalau kepo bisa kontak ke sini: <a class="font-weight-bold"> <?=$row["nomor_cp"] ?> </a></p>
                    <p>Kepo tapi ga punya pulsa: <a class="font-weight-bold"> <?=$row["email_cp"] ?> </a></p>
                </div>
                <div class="col-2"></div>
            </div>
                            <?php
                                    }
                                }
                            ?>
            <hr></hr>
            <div class="row  justify-content-center"  style="margin: 2%;">
                <div class="col text-center">
                        <a href="findme.php"><button type="button" class="btn btn-dark">Or you can find me!</button></a>
                </div>
            </div>
        </div>   

        
        <footer class="page-footer font-small white" style="font-size: smaller;">
            <!-- Footer Links -->
            <div class="container-fluid text-center p-5 bg-dark text-white">
                
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