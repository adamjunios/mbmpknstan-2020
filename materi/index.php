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
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/slick.css">
    <link rel="stylesheet" href="../css/cubeportfolio.min.css">
    <link rel="stylesheet" type="../text/css" href="../css/component.css" />

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">


    <link rel="stylesheet" href="../assets/css/owl-carousel.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../assets/css/templatemo-lava.css">

</head>

<body>
    <?php
    include '../part/header.php';
    ?>




    <div class="left-image-decor"></div>
    <div class="right-image-decor" style="margin-top:-100px"></div>
    <div class="left-image-decor"></div>
    <!--================== MATERI KAJIAN =====================-->
    <section class="grid3d vertical portfolio" id="portfolio">
        <div class="container">
            <div class="teams-heading text-center col-md-8 offset-md-2 col-sm-12 text-center">
                <!-- <span>Heros Behind The Company</span> -->


                <h1 class="teams-heading">Materi Kajian</h1>

                <p class="heading_space">Berisi materi kajian Islam berupa media video.
                </p>
                <form name="search" action="cari.php" method="post">
                    <div class="input-group">
                        <input type="text" name="searchtitle" class="form-control" placeholder="Cari materi kajian" required>&nbsp;
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
                if (isset($_GET['pageno'])) {
                    $pageno = $_GET['pageno'];
                } else {
                    $pageno = 1;
                }
                $no_of_records_per_page = 12;
                $offset = ($pageno - 1) * $no_of_records_per_page;


                $total_pages_sql = "SELECT COUNT(*) FROM tblposts_materi";
                $result = mysqli_query($con, $total_pages_sql);
                $total_rows = mysqli_fetch_array($result)[0];
                $total_pages = ceil($total_rows / $no_of_records_per_page);

                $query = mysqli_query($con, "select tblposts_materi.id as pid,tblposts_materi.PostTitle as posttitle,tblposts_materi.PostDetails as postdetails,tblposts_materi.PostingDate as postingdate,tblposts_materi.PostUrl as url from tblposts_materi where tblposts_materi.Is_Active=1 order by tblposts_materi.id desc  LIMIT $offset, $no_of_records_per_page");
                while ($row = mysqli_fetch_array($query)) {
                ?>


                    <div class="col-sm bottom-space" style="height: 700px;margin-bottom:0px">

                        <?php
                        echo $row['url'];
                        ?>
                        <div class="b" style="background:#f8f7b1; height: 350px;border-radius:5px;padding:10px ">
                            <h5 class="tirle-box-video" style="text-align: justify;"><?php echo htmlentities($row['posttitle']); ?></h5><p style="text-align:justify; margin:20px">
                                    <?php if(strlen($row['postdetails'])<=140)
                                        {
                                            echo $row['postdetails'];
                                        }
                                        else
                                        {
                                            echo substr($row['postdetails'], 0, 140). '[...]';
                                        }
                                    ?>
                                    </p>
                        </div>
                        <!-- <a style="color:black; text-decoration: none;" href="materi.php?nid=<?php echo htmlentities($row['pid']) ?>">
                            Lihat di <i class="fa fa-youtube" style="position: absolute;right:0;margin:-25px 25px 0 0;"></i>
                        </a> -->
                        
                    </div>
                <?php } ?>


            </div>
        </div>

    </section>







    <!--================== PAGINATION =====================-->
    <br>
    <ul class="pagination justify-content-center mb-4">
        <li class="page-item"><a href="?pageno=1" class="page-link" style="font-size: 14px;padding:2px auto">Paling awal</a></li>
        <li class="<?php if ($pageno <= 1) {
                        echo 'disabled';
                    } ?> page-item">
            <a href="<?php if ($pageno <= 1) {
                            echo '#';
                        } else {
                            echo "?pageno=" . ($pageno - 1);
                        } ?>" class="page-link" style="font-size: 14px;padding:2px auto">Sebelumnya</a>
        </li>
        <li class="<?php if ($pageno >= $total_pages) {
                        echo 'disabled';
                    } ?> page-item">
            <a href="<?php if ($pageno >= $total_pages) {
                            echo '#';
                        } else {
                            echo "?pageno=" . ($pageno + 1);
                        } ?> " class="page-link" style="font-size: 14px;padding:2px auto">Berikutnya</a>
        </li>
        <li class="page-item"><a href="?pageno=<?php echo $total_pages; ?>" class="page-link" style="font-size: 14px;padding:2px auto">Paling akhir</a></li>
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