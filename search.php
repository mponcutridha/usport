<?php 
    $koneksi = new mysqli('localhost','root','','usport');
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Ninestars bootstrap 3 one page template</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="css/landing-page.min.css" rel="stylesheet">
    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/nivo-lightbox.css" rel="stylesheet" />
    <link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
    <link href="css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="color/default.css" rel="stylesheet">
    <!-- =======================================================
    Theme Name: Ninestars
    Theme URL: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body data-spy="scroll">
    <div class="container">
        <ul id="gn-menu" class="gn-menu-main">
            <li class="gn-trigger">
                <a class="gn-icon gn-icon-menu">
                    <li><a href="index.html">Menu</a></li>
                    <nav class="gn-menu-wrapper">
                        <div class="gn-scroller">
                            <ul class="gn-menu">
                                <li class="gn-search-item">
                                    <input placeholder="Search" type="search" class="gn-search">
                                    <a class="gn-icon gn-icon-search"><span>Search</span></a>
                                </li>
                                <li>
                                    <a href="home.php" class="gn-icon gn-icon-download">Home</a>
                                </li>
                                <li><a href="search.php" class="gn-icon gn-icon-cog">Booking</a></li>
                                <li><a href="#community" class="gn-icon gn-icon-help">Community</a></li>
                                <li><a href="#event" class="gn-icon gn-icon-archive">Event</a></li>
                                <li><a href="#about" class="gn-icon gn-icon-archive">About Us</a></li>
                                <li><a href="#setaccount" class="gn-icon gn-icon-archive">Setting Account</a></li>
                                <li><a href="#help" class="gn-icon gn-icon-archive">Help</a></li>
                            </ul>
                        </div>
                        <!-- /gn-scroller -->
                    </nav>
            </li>
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/avatar1_small.jpg">
                            </span>
                            <span class="username">Member</span>
                            
                        </a>
                <ul class="dropdown-menu extended logout">
                    <div class="log-arrow-up"></div>
                    <li class="eborder-top">
                        <a href="#"><i class="icon_profile"></i> My Profile</a>
                    </li>
                    <li>
                        <a href="login.php"><i class="icon_logout"></i> Log Out</a>
                    </li>
                </ul>   
            </ul>
    </div>
    <header class="masthead text-white text-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h1 class="mb-5">Build a landing page for your business or project and generate more leads!</h1>
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                    <form method="POST">
                        <div class="form-row">
                            <div class="col-12 col-md-9 mb-2 mb-md-0">
                                <input type="text" class="form-control form-control-lg" name="kec">
                            </div>
                            <div class="col-12 col-md-3">
                                <button type="submit" class="btn btn-block btn-lg btn-primary" name="search">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <!-- Tabel -->
        
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Kecamatan</th>
                                    <th>alamat</th>
                                    <th>keterangan</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php 
                                if (isset($_POST['search'])) {
                                    $kec = $_POST['kec'];
                                    $sql = "SELECT * FROM katagori WHERE kecamatan = '$kec' ";
                                    $query = mysqli_query($koneksi,$sql);

                                    if (mysqli_num_rows($query) > 0) { ?>
                                    <?php
                                    while ($data = mysqli_fetch_array($query)) { ?>
                                     <tr>
                                         <td><?php echo $data['id']; ?></td>
                                         <td><?php echo $data['kecamatan']; ?></td>
                                         <td><?php echo $data['alamat']; ?></td>
                                         <td><?php echo $data['keterangan']; ?></td>
                                     </tr>
                                    <?php }; ?>
                    
                                <?php } else{ ?>
                                     <tr>
                                        <td><?php echo "Unknown Data!!!"; ?></td>
                                        <td><?php echo "Unknown Data!!!"; ?></td>
                                        <td><?php echo "Unknown Data!!!"; ?></td>
                                        <td><?php echo "Unknown Data!!!"; ?></td>
                                    </tr>
                           <?php
                            }
                        } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    <!-- Section: contact -->
    <section id="contact" class="home-section text-center">
        <div class="heading-contact marginbot-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <p>&copy; U-Sport</p>
                    <div class="credits">
                        <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Ninestars
            -->
                        <a href="https://bootstrapmade.com/">Free Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/gnmenu.js"></script>
    <script src="js/jquery.scrollTo.js"></script>
    <script src="js/nivo-lightbox.min.js"></script>
    <script src="js/stellar.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>
</body>
</html>