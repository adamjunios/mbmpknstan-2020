<?php
session_start();
include('includes/config.php');

if (empty($_SESSION['token'])) {
    $_SESSION['token'] = bin2hex(random_bytes(32));
}

if (isset($_POST['form-submit'])) {
    //Verifying CSRF Token
    if (!empty($_POST['csrftoken'])) {
        if (hash_equals($_SESSION['token'], $_POST['csrftoken'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $comment = $_POST['comment'];
            $query = mysqli_query($con, "insert into tblcomments_keran(name,email,comment) values('$name','$email','$comment')");

            if ($query) :
                echo "<script>alert('Terimakasih atas kritik dan saran yang telah Anda kirim.');</script>";
                unset($_SESSION['token']);
            else :
                echo "<script>alert('Terjadi kesalahan. Coba lagi');</script>";
            endif;
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="icon" href="assets/images/hijau.png" type="image/x-icon" />
    <title>MBM PKN STAN</title>

    <!--

Lava Landing Page

https://templatemo.com/tm-540-lava-landing-page

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/templatemo-lava.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

</head>

<body>



    <!-- ***** Header Area Start ***** -->
    <?php
    include 'part/headerWelcome.php';
    ?>
    <!-- ***** Header Area End ***** -->


    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="left-text col-lg-6 col-md-12 col-sm-12 col-xs-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <h1><em>Masjid Baitul Maal</em></h1>
                        <p style="text-align: justify;">
                            Masjid Baitul Maal atau MBM merupakan lembaga kegamaan resmi sebagaimana tercantum dalam struktur Badan Kelengkapan Keluarga Mahasiswa PKN STAN. Nama tersebut diambil dari masjid yang menjadi tempat kedudukan MBM PKN STAN yaitu Masjid Baitul Maal.
                            <br><br>
                            <a href="profil/" class="main-button-slider">Lihat Masjid Baitul Maal</a>
                    </div>
                    <div class="update col-lg-6 col-md-12 col-sm-12 col-xs-12" id="update" data-scroll-reveal="enter left move  50px over 1.6s after 1.0s">
                        <div class="slideshow-container">

                            <img src="assets/images/update-bg.png" class="bgSlide" alt="">

                            <?php
                            if (isset($_GET['pageno'])) {
                                $pageno = $_GET['pageno'];
                            } else {
                                $pageno = 1;
                            }

                            $no_of_records_per_page = 10;
                            $offset = ($pageno - 1) * $no_of_records_per_page;
                            $total_pages_sql = "SELECT COUNT(*) FROM info_update";
                            $result = mysqli_query($con, $total_pages_sql);
                            $total_rows = mysqli_fetch_array($result)[0];
                            $total_pages = ceil($total_rows / $no_of_records_per_page);

                            $query = mysqli_query($con, "select info_update.id as pid,
                                    info_update.PostImage as postimage,
                                    info_update.Date as date,
                                    info_update.link as link from info_update
                                    where info_update.Status=1 order by info_update.id desc LIMIT $offset, $no_of_records_per_page");
                            while ($row = mysqli_fetch_array($query)) {
                            ?>
                                <div class="mySlides">
                                    <a href="<?php echo htmlentities($row['link']) ?>" target="_blank">
                                        <img src="masuk-admin/postimages/update/<?php echo htmlentities($row['postimage']) ?>" class="perimage">
                                    </a>
                                </div>
                            <?php } ?>

                        </div>

                        <br>
                        <div class="dots" style="text-align:center">
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                        </div>
                        <!-- <button class="goHide" onclick="goHide()">Click Me</button> -->
                        <div class="caption">
                            <div class="jumperupdate">
                                <div></div>
                            </div>
                            <div class="jumperupdate2">
                                <div></div>
                            </div>
                            <div class="jumperupdate3">
                                <div></div>
                            </div>
                            <h2> Info Terbaru</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="event">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2" style="margin-bottom: -30px;">
                    <div class="center-heading">
                        <h2>Event <em>MBM</em></h2>
                        <p>Berikut adalah event-event terdekat MBM PKN STAN maupun IMM setiap jurusan. Klik di masing-masing kegiatan untuk informasi lengkap serta link pendaftaran, atau
                            <a href="event/"> <em>lihat semua event MBM</em>
                            </a>
                    </div>
                </div>
                <?php
                if (isset($_GET['pageno'])) {
                    $pageno = $_GET['pageno'];
                } else {
                    $pageno = 1;
                }

                $no_of_records_per_page = 3;
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
                                            tblposts_event.PostUrl as url 
                                            from tblposts_event where tblposts_event.Is_Active=1 order by tblposts_event.id desc  LIMIT $offset, $no_of_records_per_page");
                while ($row = mysqli_fetch_array($query)) {
                ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter up move 30px over 0.6s after 0.4s">
                        <div class="features-item">
                            <h2></h2>

                            <?php
                            $img = $row['postimage'];
                            $imgBg = $row['postimagebg'];
                            echo "  
                                    <img class=\"imgBg\" src=\"masuk-admin/postimages/$imgBg\" alt=\"\" >
                                    ";
                            echo "                                     
                                    <img class=\"imgLogo\" src=\"masuk-admin/postimages/$img\" alt=\"\" 
                                    style=\"width: 100px;height:100px;\">
                                    ";
                            ?>
                            <h4 style="padding: 50px 0 50px 0;font-weight:650;font-size: 22px; color: #1d7d71;"><?php echo $row['posttitle'] ?></h4>
                            <p style="font-size:13px;">
                                <?php
                                echo substr($row['postdetails'], 0, 150) ?>...</p>
                            <a href="event/event.php?nid=<?php echo htmlentities($row['pid']) ?>" class="main-button">
                                Selengkapnya
                            </a>
                            <br>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        </div>
    </section>



    <!-- style="background-image: url(assets/images/dekor-kiri-kamu.png);background-repeat:no-repeat" -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="podcast" style="background-image: url(assets/images/dekor-kanan-kamu.png);background-repeat:no-repeat;background-position:top left,bottom right">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="center-heading">
                        <h2>Podcast <em>MBM</em></h2>
                        <p>Podcast MBM adalah media dakwah via suara berisi kajian atau resume kajian yang membahas tentang perkara-perkara Islam.
                            <a href="pod/index.php">kami juga hadir di Spotify</a></p>
                    </div>
                </div>
                <div class="left-image col-lg-5 col-md-12 col-sm-12 mobile-bottom-fix-big" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="blog-slider">
                        <div class="blog-slider">
                            <div id="player">
                                <div id="0" class="container" style="margin-left: -8%;">
                                    <iframe src="https://open.spotify.com/embed-podcast/episode/6YRYstCCublMUTyHUd42OQ" width="118%" height="232" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                                    <p style="text-align: justify;width:118%">Ramadan memasuki tahap awal, kira - kira apa saja ya hal - hal yang perlu kita ketahui tentang Ramadan?</p>
                                </div>
                                <?php
                                $query = mysqli_query($con, "select tblposts_podcast.id as pid,
                                            tblposts_podcast.PostTitle as posttitle,
                                            tblposts_podcast.PostDetails as postdetails,
                                            tblposts_podcast.PostImage as postimage,
                                            tblposts_podcast.PostingDate as postingdate,
                                            tblposts_podcast.PostUrl as url 
                                            from tblposts_podcast where tblposts_podcast.Is_Active=1 order by tblposts_podcast.id desc  LIMIT $offset, $no_of_records_per_page");
                                while ($row = mysqli_fetch_array($query)) {
                                ?>
                                    <div id="<?php echo $row['pid']; ?>" style="display: none;margin-left: -8%;" class="container">
                                        <?php echo $row['url'] ?>
                                        <p style="text-align: justify;width:118%"><?php echo substr($row['postdetails'], 0, 100) ?><a class="more" href="pod/">[...]</a></p>
                                    </div>
                                <?php } ?>
                                <!-- <img src="https://res.cloudinary.com/muhammederdem/image/upload/v1535759872/kuldar-kalvik-799168-unsplash.jpg" alt=""> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right-text offset-lg-1 col-lg-6 col-md-12 col-sm-12 mobile-bottom-fix">
                    <ul>
                        <?php
                        if (isset($_GET['pageno'])) {
                            $pageno = $_GET['pageno'];
                        } else {
                            $pageno = 1;
                        }

                        $no_of_records_per_page = 3;
                        $offset = ($pageno - 1) * $no_of_records_per_page;
                        $total_pages_sql = "SELECT COUNT(*) FROM tblposts_podcast";
                        $result = mysqli_query($con, $total_pages_sql);
                        $total_rows = mysqli_fetch_array($result)[0];
                        $total_pages = ceil($total_rows / $no_of_records_per_page);

                        $query = mysqli_query($con, "select tblposts_podcast.id as pid,
                                            tblposts_podcast.PostTitle as posttitle,
                                            tblposts_podcast.PostDetails as postdetails,
                                            tblposts_podcast.ust as ust,
                                            tblposts_podcast.PostImage as postimage,
                                            tblposts_podcast.PostingDate as postingdate,
                                            tblposts_podcast.PostUrl as url 
                                            from tblposts_podcast where tblposts_podcast.Is_Active=1 order by tblposts_podcast.id desc  LIMIT $offset, $no_of_records_per_page");
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <li class="lii" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s" style="max-width: 420px;" data-switch="#<?php echo $row['pid']; ?>">
                                <div>
                                    <?php
                                    $img = $row['postimage'];
                                    echo "                                     
                                    <img src=\"masuk-admin/postimages/$img\" alt=\"\" 
                                    style=\"width: 100px;height:100px;\">
                                    "
                                    ?>
                                </div>
                                <div class="text" style="margin-left: 20px;">
                                    <h5><?php echo $row['posttitle']; ?></h5>
                                    <p><?php echo $row['ust'] ?></p>
                                </div>
                            </li>
                        <?php } ?>
                        <br>
                        <li class="lii playlist">
                            <a href="https://open.spotify.com/show/757YCuDrKqrtNeUV4xNAmz" target="_blank">
                                <img src="assets/images/pdo_lain.png" alt="" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s" />
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->


    <!-- ***** Testimonials Starts ***** -->
    <section class="section" id="kajian">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="center-heading">
                        <h2>Ngopi sama Ngemil di <em>MBM</em></h2>
                        <p><i>Ngobrolin Perkara Islam</i> dan <i>Ngobrol Seru Nimba Ilmu</i> merupakan kajian rutin yang diselenggarakan oleh MBM,
                            membahas hal - hal menarik yang dibawakan dengan santuy</p>
                    </div>
                </div>
                <div class="col-lg-10 col-md-12 col-sm-12 mobile-bottom-fix-big" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="owl-carousel owl-theme">
                        <?php
                        if (isset($_GET['pageno'])) {
                            $pageno = $_GET['pageno'];
                        } else {
                            $pageno = 1;
                        }

                        $no_of_records_per_page = 3;
                        $offset = ($pageno - 1) * $no_of_records_per_page;
                        $total_pages_sql = "SELECT COUNT(*) FROM tblposts_materi";
                        $result = mysqli_query($con, $total_pages_sql);
                        $total_rows = mysqli_fetch_array($result)[0];
                        $total_pages = ceil($total_rows / $no_of_records_per_page);

                        $query = mysqli_query($con, "select tblposts_materi.id as pid,
                                            tblposts_materi.PostTitle as posttitle,
                                            tblposts_materi.PostDetails as postdetails,
                                            tblposts_materi.PostingDate as postingdate,
                                            tblposts_materi.PostUrl as url 
                                            from tblposts_materi where tblposts_materi.Is_Active=1 order by tblposts_materi.id desc  LIMIT $offset, $no_of_records_per_page");
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <div class="item service-item">
                                <!-- <div class="author">
                                <i><img src="assets/images/testimonial-author-1.png" alt="Author One"></i>
                                </div> -->
                                <div class="testimonial-content" style="padding: 0px;">
                                    <?php
                                    echo $row['url'];
                                    ?>
                                    <div style="height:80px;">
                                        <h4 style="text-align:left; margin:20px"><?php echo $row['posttitle']; ?></h4>
                                    </div>
                                    <p style="text-align:justify; margin:20px">
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
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="item service-item">
                    <div class="testimonial-content-seeall" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <a href="materi/" style="color:white">Lihat Semua</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Ends ***** -->

    <section class="section" style="padding-top:0px;background-image: url(assets/images/dekor-kiri-kamu.png);background-repeat: no-repeat;background-position: right top;">
        <div class="welcome-area" id="apps" style="background-image: none;">

            <div class="header-text">
                <div class="container">
                    <div class="row">
                        <div class="left-text col-lg-6 col-md-12 col-sm-12 col-xs-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                            <h1>Aplikasi<br>
                                <em>MBM PKN STAN</em></h1>
                            <p style="text-align: justify;">Aplikasi MBM berisi informasi tentang profil MBM, Qur'an 30 juz, kajian rutin, podcast MBM, youtube kajian MBM, dan akun-akun media sosial MBM. Download aplikasinya untuk memudahkan kamu mengakses konten-konten terbaik MBM PKN STAN. Tersedia di Play Store.<br><br>
                                <a href="https://play.google.com/store/apps/details?id=com.mbm.pkn.stan" class="main-button-slider" target="_blank">Download</a>
                        </div>
                        <div class="right-text col-lg-6 col-md-12 col-sm-12 col-xs-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s" style="display: flex;align-items:center;justify-content:center;">
                            <img src="./img/iphone.png" style="width:250px;height:auto" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- ***** Header Text End ***** -->
        </div>

    </section>

    <!-- ***** Footer Start ***** -->
    <?php
    include 'part/footerWelcome.php';
    ?>


    <script>
        var swiper = new Swiper(".blog-slider", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            mousewheel: {
                invert: false
            },
            // autoHeight: true,
            pagination: {
                el: ".blog-slider__pagination",
                clickable: true
            }
        });
    </script>
    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>
    <!-- <script src="//code.tidio.co/1chwo5mmho6ot6wrmwaut50c6kpi14ip.js" async></script> -->
    <!-- <script type="text/javascript">function add_chatinline(){var hccid=26137723;var nt=document.createElement("script");nt.async=true;nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);}

        add_chatinline(); </script> -->
    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 3000); // Change image every 2 seconds
        }
        // Listening to a button click.
        $('[data-switch]').on('click', function(e) {
            var $page = $('#player'),
                blockToShow = e.currentTarget.getAttribute('data-switch');

            // Hide all children.
            $page.children().hide();

            // And show the requested component.
            $page.children(blockToShow).show();
        });
    </script>

</body>

</html>