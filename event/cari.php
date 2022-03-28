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
    <link rel="stylesheet" href="../css/style.css">
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



    <!--================== MATERI KAJIAN =====================-->
    <section class="grid3d vertical portfolio" id="portfolio">
        <div class="container">
            <div class="teams-heading text-center col-md-8 offset-md-2 col-sm-12 text-center">
                <!-- <span>Heros Behind The Company</span> -->



                <h1 class="teams-heading">Hasil Pencarian</h1>

                <p class="heading_space">
                </p>
                <form name="search" action="cari.php" method="post">
                    <div class="input-group">
                        <input type="text" name="searchtitle" class="form-control" placeholder="Cari event" required>&nbsp;
                        <span class="input-group-btn">
                            <button class="btn btn-secondary" type="submit"><b><i class="fa fa-search"></i></b></button>
                        </span>
                </form>
            </div>

        </div>
        </div>

        <br><br>

        <div class="container">
            <div class="row">

                <?php
                if ($_POST['searchtitle'] != '') {
                    $st = $_SESSION['searchtitle'] = $_POST['searchtitle'];
                }
                $st;





                if (isset($_GET['pageno'])) {
                    $pageno = $_GET['pageno'];
                } else {
                    $pageno = 1;
                }
                $no_of_records_per_page = 8;
                $offset = ($pageno - 1) * $no_of_records_per_page;


                $total_pages_sql = "SELECT COUNT(*) FROM tblposts_event";
                $result = mysqli_query($con, $total_pages_sql);
                $total_rows = mysqli_fetch_array($result)[0];
                $total_pages = ceil($total_rows / $no_of_records_per_page);


                $query = mysqli_query($con, "select tblposts_event.id as pid,
                                            tblposts_event.PostTitle as posttitle,
                                            tblposts_event.PostDetails as postdetails,
                                            tblposts_event.PostImage as postimage,
                                            tblposts_event.PostImageBg as postimagebg,
                                            tblposts_event.PostingDate as postingdate,
                                            tblposts_event.PostUrl as url  from tblposts_event where tblposts_event.PostTitle like '%$st%' and tblposts_event.Is_Active=1 LIMIT $offset, $no_of_records_per_page");

                $rowcount = mysqli_num_rows($query);
                if ($rowcount == 0) {
                    echo "<p style=\"text-align:center;padding:0px 40px 50px 40px;\">Mohon maaf, kegiatan yang anda maksud tidak ditemukan</p>";
                } else {
                    while ($row = mysqli_fetch_array($query)) {


                ?>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" style="margin-top:15px;" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                            <div class="features-item">
                                <div class="features-icon">
                                    <h2></h2>

                                    <?php
                                    $img = $row['postimage'];
                                    $imgBg = $row['postimagebg'];
                                    echo "                                     
                                    <img class=\"imgBg\" src=\"../masuk-admin/postimages/$imgBg\" alt=\"\" 
                                    >
                                    ";
                                    echo "                                     
                                    <img class=\"imgLogo\" src=\"../masuk-admin/postimages/$img\" alt=\"\" 
                                    style=\"width: 100px;height:100px;\">
                                    ";
                                    ?>
                                    <h4 class="title-box-event" style="padding: 50px 0 50px 0;font-weight:650"><?php echo $row['posttitle'] ?></h4>
                                    <p><?php
                                        echo substr($row['postdetails'], 0, 150) ?>...</p>
                                    <a href="event.php?nid=<?php echo htmlentities($row['pid']) ?>" class="main-button">
                                        Selengkapnya
                                    </a>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                <?php } ?>

            </div>
        </div>

    </section>



    <br>
    <ul class="pagination justify-content-center mb-4">
        <li class="page-item"><a href="index.php" class="page-link">Tampilkan Semua Event</a></li>
    </ul>


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