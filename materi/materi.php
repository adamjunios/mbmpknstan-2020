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
    <title>Materi Kajian - MBM PKN STAN</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto%7CJosefin+Sans:100,300,400,500" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- <link rel="stylesheet" href="css/bootstrap3.min.css"> -->
    <link rel="shortcut icon" href="../img/logo.png" />
    <link rel="stylesheet" href="../assets/css/templatemo-lava.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/slick.css">
    <link rel="stylesheet" href="../css/cubeportfolio.min.css">
    <link rel="stylesheet" type="../text/css" href="../css/component.css" />
    <link rel="stylesheet" href="../assets/css/templatemo-lava.css">

</head>

<body>

    <div class="right-image-decor" style="margin-top:-100px"></div>
    <div class="left-image-decor" style="margin-top:200px;" style="
    @media screen and (max-width:810px){ opacity:50%;}"></div>
    <?php
    include '../part/header.php';
    ?>




    <!--================== MATERI KAJIAN =====================-->
    <section class="grid3d vertical portfolio" id="portfolio">
        <div class="container">

            <div class="teams-heading text-center col-md-8 offset-md-2 col-sm-12 text-center">
                <!-- <span>Heros Behind The Company</span> -->

                <?php
                $pid = intval($_GET['nid']);
                $query = mysqli_query($con, "select tblposts_materi.PostTitle as posttitle,tblposts_materi.PostDetails as postdetails,tblposts_materi.PostingDate as postingdate,tblposts_materi.PostUrl as url from tblposts_materi where tblposts_materi.id='$pid'");
                while ($row = mysqli_fetch_array($query)) {
                ?>
                    <div class="video-full">
                        <?php echo $row['url']; ?>
                        <h1 class="teams-heading"><?php echo htmlentities($row['posttitle']); ?></h1>
                    </div>
            </div>
        </div>

        <div class="container materi">
            <br>
            <?php
                    $pt = $row['postdetails'];
                    echo (substr($pt, 0)); ?>
            <br>
            <a style="color:black; text-decoration: none;position:absolute;z-index:999;margin:15px 0 0 0px;text-align:left" href="index.php"><i class="fa fa-chevron-left"></i> &nbsp;&nbsp;<b>Video Lainnya</b></a><br><br>


        </div>
    <?php } ?>
    </section>


    <!--================== FOOTER =====================-->

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






</body>

</html>