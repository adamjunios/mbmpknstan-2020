<?php
session_start();
include('includes/config.php');
error_reporting(0);
if (strlen($_SESSION['login']) == 0) {
    header('location:index.php');
} else {
    if (isset($_POST['update'])) {
        $posttitles = $_POST['posttitle'];
        $postdetails = $_POST['postdescription'];
        $igs = $_POST['ig'];
        $lines = $_POST['line'];
        $postid = intval($_GET['pid']);
        $query = mysqli_query($con, "update tblposts_event set PostTitle='$posttitles',
                                            PostDetails='$postdetails',
                                            ig='$igs',
                                            line='$lines' where id='$postid'");

        if ($query) {
            $msg = "Berhasil";
        } else {
            $error = "Gagal";
        }
    }
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!-- App title -->
        <title>Edit-Event</title>

        <!-- Summernote css -->
        <link href="../plugins/summernote/summernote.css" rel="stylesheet" />

        <!-- Select2 -->
        <link href="../plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

        <!-- Jquery filer css -->
        <link href="../plugins/jquery.filer/css/jquery.filer.css" rel="stylesheet" />
        <link href="../plugins/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css" rel="stylesheet" />

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
        <script src="assets/js/modernizr.min.js"></script>
    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <?php include('includes/topheader.php'); ?>
            <!-- ========== Left Sidebar Start ========== -->
            <?php include('includes/leftsidebar.php'); ?>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">


                        <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Edit Event</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#">Pos-Event</a>
                                        </li>
                                        <li class="active">
                                            Edit-Event
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-sm-6">
                                <!---Success Message--->
                                <?php if ($msg) { ?>
                                    <div class="alert alert-success" role="alert">
                                        <strong>Oke. </strong> <?php echo htmlentities($msg); ?>
                                    </div>
                                <?php } ?>

                                <!---Error Message--->
                                <?php if ($error) { ?>
                                    <div class="alert alert-danger" role="alert">
                                        <strong>Yah. </strong> <?php echo htmlentities($error); ?></div>
                                <?php } ?>


                            </div>
                        </div>

                        <?php
                        $postid = intval($_GET['pid']);
                        $query = mysqli_query($con, "select tblposts_event.id as postid,
                        tblposts_event.PostImage,
                        tblposts_event.PostTitle as title,
                        tblposts_event.PostImageBg as PostImageBg,
                        tblposts_event.ig as ig,
                        tblposts_event.line as line,
                        tblposts_event.PostDetails from tblposts_event where tblposts_event.id='$postid' and tblposts_event.Is_Active=1 ");
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="p-6">
                                        <div class="">
                                            <form name="addpost" method="post">

                                                <div class="form-group m-b-20">
                                                    <label for="exampleInputEmail1">Nama event</label>
                                                    <input type="text" class="form-control" id="posttitle" value="<?php echo htmlentities($row['title']); ?>" name="posttitle" placeholder="Masukkan nama" required>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="card-box">
                                                            <h4 class="m-b-30 m-t-0 header-title"><b>Keterangan (silakan klik ikon link untuk memasukkan link pendaftaran event, masukkan juga keterangan lainnya.)</b></h4>
                                                            <textarea class="summernote" name="postdescription"><?php echo htmlentities($row['PostDetails']); ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="card-box">
                                                            <h4 class="m-b-30 m-t-0 header-title"><b>Logo</b></h4>
                                                            <img src="postimages/<?php echo htmlentities($row['PostImage']); ?>" width="300" />
                                                            <br />
                                                            <a href="change-image-toko.php?pid=<?php echo htmlentities($row['postid']); ?>">Ubah Gambar</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-12">
                                                    <div class="card-box">
                                                        <h4 class="m-b-30 m-t-0 header-title"><b>Gambar Background</b></h4>
                                                        <img src="postimages/<?php echo htmlentities($row['PostImageBg']); ?>" width="300" />
                                                        <br />
                                                        <a href="change-image-toko.php?pid=<?php echo htmlentities($row['postid']); ?>">Ubah Gambar</a>
                                                    </div>
                                                </div>

                                                <div class="form-group m-b-20">
                                                    <label for="exampleInputIg">Link Instagram</label>
                                                    <input type="text" class="form-control" id="ig" value="<?php echo htmlentities($row['ig']); ?>" name="ig" placeholder="Masukkan link instagram" required>
                                                </div>

                                                <div class="form-group m-b-20">
                                                    <label for="exampleInputLine">Link Line</label>
                                                    <input type="text" class="form-control" id="line" value="<?php echo htmlentities($row['line']); ?>" name="line" placeholder="Masukkan link Line">
                                                </div>

                                            <?php } ?>

                                            <button type="submit" name="update" class="btn btn-success waves-effect waves-light">Perbarui </button>

                                        </div>
                                    </div> <!-- end p-20 -->
                                </div> <!-- end col -->
                            </div>
                            <!-- end row -->



                    </div> <!-- container -->

                </div> <!-- content -->

                <?php include('includes/footer.php'); ?>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>

        <!--Summernote js-->
        <script src="../plugins/summernote/summernote.min.js"></script>
        <!-- Select 2 -->
        <script src="../plugins/select2/js/select2.min.js"></script>
        <!-- Jquery filer js -->
        <script src="../plugins/jquery.filer/js/jquery.filer.min.js"></script>

        <!-- page specific js -->
        <script src="assets/pages/jquery.blog-add.init.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script>
            jQuery(document).ready(function() {

                $('.summernote').summernote({
                    height: 240, // set editor height
                    minHeight: null, // set minimum height of editor
                    maxHeight: null, // set maximum height of editor
                    focus: false // set focus to editable area after initializing summernote
                });
                // Select2
                $(".select2").select2();

                $(".select2-limiting").select2({
                    maximumSelectionLength: 2
                });
            });
        </script>
        <script src="../plugins/switchery/switchery.min.js"></script>

        <!--Summernote js-->
        <script src="../plugins/summernote/summernote.min.js"></script>



    </body>

    </html>
<?php } ?>