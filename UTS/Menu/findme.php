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
                <div class="col text-center text-dark bg-white pt-5 pb-5">
                    <h3 class="display-3" style="font-family: Playfair Display; font-style: italic;"><u>Know me more!</u></h3>
                    
                </div>
            </div>
        </div>   

        <div class="container-fluid ">
            <!--Grid row-->
            <div class="row text-dark bg-white pb-5 mb-5">
                <!--Grid column-->
                <div class="col-md-2 px-md-4"></div>
                            
                <div class="col-md-4 px-md-4">
                    <h1 class="pt-5 mt-3 pb-4">FIND ME!</h1>

                            <?php
                            // Mengambil data dari tabel about
                            $strSQL = "SELECT * FROM sosmed";
                            $execStrSQL = mysqli_query($conn, $strSQL);
                            
                            if (mysqli_num_rows($execStrSQL) > 0){
                                while ($row = mysqli_fetch_assoc($execStrSQL)){
                            ?>

                    <h5 class="pt-2 pb-2"><a class="text-dark font-weight-bold" href="<?=$row["link_sosmed"] ?>" target="_blank"><?=$row["nama_sosmed"] ?></a></h5>
                    
                            <?php
                                    }
                                }
                            ?>

                </div>
                <?php
                include "../fungsi.php";
                $nim = $namadepan = $namabelakang = $email = "";
                if ($_SERVER["REQUEST_METHOD"]=="POST"){
                    $nama = bersihkan_input($_POST["namaCust"]);
                    $email = bersihkan_input($_POST["emailCust"]);
                    $subject_pesan = bersihkan_input($_POST["subject"]);
                    $pesan = bersihkan_input($_POST["pesan"]);
                    $waktu = date('Y-m-d H:i:s');

                    $strSQL = "INSERT INTO message_cust VALUES (NULL,'$nama','$email', '$subject_pesan', '$pesan', '$waktu')";

                //echo "Query = ".$strSQL;
                    $execStrSQL = mysqli_query($conn, $strSQL);
                    if ($execStrSQL){
                        // This is in the PHP file and sends a Javascript alert to the client
                        $message = "Pesan berhasil dikirim!";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                    }
                    else {
                        // This is in the PHP file and sends a Javascript alert to the client
                        $message = "Pesan gagal dikirim!";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                    }
                }
                ?>
                <div class="col-md-4 px-md-4 pt-5 mt-5">
                    <form name="email" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" id="namaCust" placeholder="Name" name="namaCust">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="emailCust" placeholder="Email" name="emailCust">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" id="pesan" placeholder="Type your message her ..." name="pesan"></textarea>
                        </div>
                            <button class="btn btn-dark btn-lg btn-block" type="submit" name="kirim">SEND</button>
                    </form>
                </div>
                <div class="col-md-2 px-md-4">
                            
                </div>
            </div>
            <hr></hr>
            <div class="row  justify-content-center"  style="margin: 2%;">
                <div class="col text-center">
                        <a href="contact.php"><button type="button" class="btn btn-dark">Or you can contact me!</button></a>
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