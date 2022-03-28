<?php
session_start();
include('includes/config.php');
error_reporting(0);
if (strlen($_SESSION['login']) == 0) {
    header('location:index.php');
} else {

    // For adding post  
    if (isset($_POST['submit'])) {
        $posttitle = $_POST['posttitle'];
        $postdetails = $_POST['postdescription'];
        $ig = $_POST['ig'];
        $line = $_POST['line'];
        $youtube = $_POST['youtube'];
        $spotify = $_POST['spotify'];
        $url = $_POST['postUrl'];

        $imgfile = $_FILES["postimage"]["name"];
        $imgfileBg = $_FILES["postimageBg"]["name"];
        // get the image extension
        $extension = substr($imgfile, strlen($imgfile) - 4, strlen($imgfile));
        $extensionBg = substr($imgfileBg, strlen($imgfileBg) - 4, strlen($imgfileBg));
        // allowed extensions
        $allowed_extensions = array(".jpg", "jpeg", ".png", ".gif");
        $allowed_extensionsBg = array(".jpg", "jpeg", ".png", ".gif");
        // Validation for allowed extensions .in_array() function searches an array for a specific value.


        if (!in_array($extension, $allowed_extensions)) {
            echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
        } else {
            if (!in_array($extensionBg, $allowed_extensionsBg)) {
                echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
            } else {
                //rename the image file
                $imgnewfile = md5($imgfile) . $extension;
                $imgnewfileBg = md5($imgfileBg) . $extensionBg;
                // Code for move image into directory
                move_uploaded_file($_FILES["postimage"]["tmp_name"], "postimages/" . $imgnewfile);
                move_uploaded_file($_FILES["postimageBg"]["tmp_name"], "postimages/" . $imgnewfileBg);

                $status = 1;
                $query = mysqli_query($con, "insert into tblposts_event(PostTitle,PostDetails,ig,PostUrl,Is_Active,PostImage,PostImageBg,line,youtube,spotify) values('$posttitle','$postdetails','$ig','$url','$status','$imgnewfile','$imgnewfileBg','$line','$youtube','$spotify')");
                if ($query) {
                    $msg = "Berhasil";
                } else {
                    $error = "Gagal";
                }
            }
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
        <title>Tambah-Event</title>

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
                                    <h4 class="page-title">Tambah</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#">Pos-Event</a>
                                        </li>
                                        <li class="active">
                                            Tambah
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


                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="p-6">
                                    <div class="">
                                        <form name="addpost" method="post" enctype="multipart/form-data">
                                            <div class="form-group m-b-20">
                                                <label for="exampleInputEmail1">Nama event</label>
                                                <input type="text" class="form-control" id="posttitle" name="posttitle" placeholder="Masukkan Nama Event" required>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="card-box">
                                                        <h4 class="m-b-30 m-t-0 header-title"><b>Keterangan (silakan klik ikon link untuk memasukkan link pendaftaran event, masukkan juga keterangan lainnya.)</b></h4>
                                                        <textarea name="postdescription" required></textarea>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="card-box">
                                                        <h4 class="m-b-30 m-t-0 header-title"><b>Gambar</b></h4>
                                                        <input type="file" class="form-control" id="postimage" name="postimage" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="card-box">
                                                        <h4 class="m-b-30 m-t-0 header-title"><b>Gambar BG</b></h4>
                                                        <input type="file" class="form-control" id="postimageBg" name="postimageBg" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group m-b-20">
                                                <label for="exampleInputEmail1">Link Instagram</label>
                                                <input type="text" class="form-control" id="ig" name="ig" placeholder="Masukkan Link" required>
                                            </div>

                                            <div class="form-group m-b-20">
                                                <label for="exampleInputEmail1">Link LINE (Kosongi jika tidak ada)</label>
                                                <input type="text" class="form-control" id="line" name="line" placeholder="Masukkan Link">
                                            </div>

                                            <div class="form-group m-b-20">
                                                <label for="exampleInputEmail1">Link Youtube (Kosongi jika tidak ada)</label>
                                                <input type="text" class="form-control" id="youtube" name="youtube" placeholder="Masukkan Link">
                                            </div>

                                            <div class="form-group m-b-20">
                                                <label for="exampleInputEmail1">Link Spotify (Kosongi jika tidak ada)</label>
                                                <input type="text" class="form-control" id="spotify" name="spotify" placeholder="Masukkan Link">
                                            </div>

                                            <div class="row">
                                                <div class="col-md-10 col-md-offset-1">
                                                    <div class="p-6">
                                                        <div class="">
                                                            <form name="addpost" method="post" enctype="multipart/form-data">


                                                                <button type="submit" name="submit" class="btn btn-success waves-effect waves-light">Simpan dan Kirim</button>
                                                                <button type="button" class="btn btn-danger waves-effect waves-light">Batal</button>
                                                            </form>
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