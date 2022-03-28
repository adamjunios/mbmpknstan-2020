<?php
session_start();
include('../includes/config.php');
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <meta name="author" content="MBM PKN STAN">
    <!-- description -->
    <meta name="description" content="Website Masjid Baitul Maal PKN STAN">
    <!-- keywords -->
    <meta name="keywords" content="masjid, baitul, maal, muslim, pkn, stan">
    <title>Event - MBM PKN STAN</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto%7CJosefin+Sans:100,300,400,500" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- <link rel="stylesheet" href="css/bootstrap3.min.css"> -->
    <link rel="shortcut icon" href="../img/logo.png" />
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/slick.css">
    <link rel="stylesheet" href="../css/cubeportfolio.min.css">
    <link rel="stylesheet" type="../text/css" href="../css/component.css" />

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">

    <link rel="stylesheet" href="../assets/css/templatemo-lava.css">

    <link rel="stylesheet" href="../assets/css/owl-carousel.css">

</head>

<body>
    <?php
    include '../part/header.php';
    ?>


    <div class="right-image-decor" style="margin-top: 0px;"></div>

    <div class="left-image-decor" style="margin-top: 200px;"></div>
    <!--================== MATERI KAJIAN =====================-->
    <section class="grid3d vertical portfolio" id="portfolio">
        <div class="container">

            <br>
            <a style="color:black; text-decoration: none;position:absolute;z-index:8;margin:15px 0 0 0px;text-align:left;font-size:14px" href="index.php"><i class="fa fa-chevron-left"></i> &nbsp;&nbsp;<b>Event Lainnya</b></a><br><br>

            <div class="teams-heading text-center col-md-8 offset-md-2 col-sm-12 text-center">
                <!-- <span>Heros Behind The Company</span> -->

                <?php
                $pid = intval($_GET['nid']);
                $query = mysqli_query($con, "select tblposts_event.PostTitle as posttitle,
                tblposts_event.PostImage as postimage,
                tblposts_event.PostImageBg as postimagebg,
                tblposts_event.PostDetails as postdetails,
                tblposts_event.PostingDate as postingdate,
                tblposts_event.ig as ig,
                tblposts_event.line as line,
                tblposts_event.youtube as youtube,
                tblposts_event.spotify as spotify,
                tblposts_event.PostUrl as url from tblposts_event where tblposts_event.id='$pid'");
                while ($row = mysqli_fetch_array($query)) {
                ?>
                    <div class="event">
                        <h1 class="teams-heading"><?php echo htmlentities($row['posttitle']); ?></h1>

                        <img class="img-fluid rounded" style="width: 300px; height: 180px;" src="../masuk-admin/postimages/<?php echo htmlentities($row['postimagebg']); ?>" alt="<?php echo htmlentities($row['posttitle']); ?>">
                        <br>

                        <div class="container">
                            <br>
                            <p class="event-desc">
                                <?php
                                $pt = $row['postdetails'];
                                echo (substr($pt, 0)); ?>
                            </p>
                        </div><br>
                        <div class="footer-event">
                            <p class="tgl-upload">
                                Diunggah pada<br>
                                <b><?php echo substr(htmlentities($row['postingdate']), 0, 11); ?></b>
                            </p>
                            <p class="off-socmed">
                                <img src="../masuk-admin/postimages/<?php echo htmlentities($row['postimage']); ?>" alt="<?php echo htmlentities($row['posttitle']); ?>">
                                <a href="<?php echo htmlentities($row['ig']); ?>" target="_blank" style="margin-right:10px"><i class="fa fa-instagram"></i></a>
                                <?php
                                if ($row['line'] != NULL) {
                                    echo "
                                    <a href=" . htmlentities($row['line']) . " target=\"_blank\" style=\"margin-right:10px\" ><img src=\"../assets/css/line.svg\" style=\"width: 18px;height:auto;margin-left:10px\"></a>";
                                }
                                if ($row['youtube'] != NULL) {
                                    echo "
                                    <a href=" . htmlentities($row['youtube']) . " target=\"_blank\" style=\"margin-right:10px\"><i class=\"fa fa-youtube\"></i></a>";
                                }
                                if ($row['spotify'] != NULL) {
                                    echo "
                                    <a href=" . htmlentities($row['spotify']) . " target=\"_blank\" style=\"margin-right:10px\"><i class=\"fa fa-spotify\"></i></a>";
                                }
                                ?>
                            </p>
                        </div>
                    </div>
                <?php } ?>
    </section>



    <!--================== FOOTER =====================-->
    <?php
    include '../part/footer.php';
    ?>

    <script src="../js/jquery.min.js"></script>
    <script src="../js/modernizr.custom.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/slick.min.js"></script>
    <script src="../js/scrollreveal.min.js"></script>
    <script src="../js/jquery.cubeportfolio.min.js"></script>
    <script src="../js/jquery.matchHeight-min.js"></script>
    <script src="../js/masonry.pkgd.min.js"></script>
    <script src="../js/jquery.flexslider-min.js"></script>
    <script src="../js/classie.js"></script>
    <script src="../js/helper.js"></script>
    <script src="../js/grid3d.js"></script>
    <script src="../js/script.js"></script>

    <!-- jQuery -->
    <script src="../assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="../assets/js/popper.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="../assets/js/owl-carousel.js"></script>
    <script src="../assets/js/scrollreveal.min.js"></script>
    <script src="../assets/js/waypoints.min.js"></script>
    <script src="../assets/js/jquery.counterup.min.js"></script>
    <script src="../assets/js/imgfix.min.js"></script>

    <!-- Global Init -->
    <script src="../assets/js/custom.js"></script>

</body>

</html>