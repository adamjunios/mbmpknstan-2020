<?php 
session_start();
include('../includes/config.php');
?>

<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1"/>
    <meta name="author" content="MBM PKN STAN">
    <!-- description -->
    <meta name="description" content="Website Masjid Baitul Maal PKN STAN">
    <!-- keywords -->
    <meta name="keywords" content="masjid, baitul, maal, muslim, pkn, stan">
        <title>MBM Shop - MBM PKN STAN</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto%7CJosefin+Sans:100,300,400,500" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- <link rel="stylesheet" href="css/bootstrap3.min.css"> -->
	<link rel="shortcut icon" href="../img/logo.png"/>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/slick.css">
    <link rel="stylesheet" href="../css/cubeportfolio.min.css">
    <link rel="stylesheet" type="../text/css" href="../css/component.css" />

  </head>
  <body>
  <nav class="navbar navbar-expand-lg fixed-top activate-menu navbar-light bg-light">
    <img src="../img/home.png" width="60"></img> <a class="navbar-brand" href="#"> MBM PKN STAN</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse"    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li >
          <a class="nav-link" href="../">Beranda</a>
        </li>
        <li class="dropdown">
          <a class="nav-link"  href="#">Tentang MBM</a>
			<ul class="isi-dropdown">
				<li><a href="../sejarah">Sejarah</a></li><br>
				<li><a href="../visi-misi">Visi Misi</a></li>
				<li><a href="../hubungi">Hubungi Kami</a></li>
			</ul>
        </li>
        <li>
          <a class="nav-link" href="../event">Event MBM</a>
        </li>
        <li class="dropdown">
          <a class="nav-link"  href="#">Konten Islami</a>
			<ul style="text-decoration: none;" class="isi-dropdown">
				<li><a href="../materi">Materi Kajian</a></li>
				<li><a href="../buku">Buku dan Modul</a></li>
				<li><a href="../blog">Blog Islami</a></li>
			</ul>
        </li>
        <li>
          <a class="nav-link" href="../galeri">Galeri Kegiatan</a>
        </li>
		<li>
          <a class="nav-link" style="color:black" href="#"><b>MBM Shop</b></a>
        </li>
      </ul>
    </div>
  </nav>

 
  <!--================== MATERI KAJIAN =====================-->  
  <section class="grid3d vertical portfolio" id="portfolio">
    <div class="container">
		
		<a style="color:black; text-decoration: none;" href="index.php"><i class="fa fa-chevron-left"></i> &nbsp;&nbsp;<b>Kembali</b></a><br><br>
		
       <div class="teams-heading text-center col-md-8 offset-md-2 col-sm-12 text-center">
        <!-- <span>Heros Behind The Company</span> -->
		
<?php
$pid=intval($_GET['nid']);
 $query=mysqli_query($con,"select tblposts_toko.PostTitle as posttitle,tblposts_toko.PostImage,tblposts_toko.CategoryId as category,tblposts_toko.PostDetails as postdetails,tblposts_toko.PostingDate as postingdate,tblposts_toko.PostUrl as url from tblposts_toko where tblposts_toko.id='$pid'");
while ($row=mysqli_fetch_array($query)) {
?>

        <h1 class="teams-heading"><?php echo htmlentities($row['posttitle']);?></h1>

        <h5><p class="heading_space"><i class="fa fa-tag"></i></b> <?php echo htmlentities($row['category']);?></a>
        </p></h5>
		
		<img class="img-fluid rounded" src="../masuk-admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>">
		<br>
		
      </div>
    </div>
    
	<div class="container">
		<br>
	    <p>
			<?php 
			$pt=$row['postdetails'];
            echo  (substr($pt,0));?>
		</p>
		  
		  
		  
        </div>
	<?php } ?>
  </section>
  
  
  
 <!--================== FOOTER =====================-->  
  <footer class="text-center pos-re">
    <div class="container">
      <div class="footer__box">
        <!-- Logo -->
        <a style="text-decoration: none;" class="logo" href="#">
            <img src="../img/atas.png" alt="logo">
			<p>Kembali ke atas</p>
        </a>

		<div class="social">
            <a style="text-decoration: none;"  href="https://instagram.com/mbmpknstan" target="_blank" aria-hidden="true"><img src="../img/ig.png" width="40px"/></a>
			<a style="text-decoration: none;"  href="https://line.me/R/ti/p/%40mbmpknstan" target="_blank" aria-hidden="true"><img src="../img/line.png" width="40px"/></a>
            <a style="text-decoration: none;"  href="https://www.youtube.com/channel/UCmbm9RdGdG6DkyhxI-y-_Tw" target="_blank" aria-hidden="true"><img src="../img/youtube.png" width="40px"/></a>
        </div>
       
		<br>
        <p>&copy; <script type="text/JavaScript">
					document.write(new Date().getFullYear());
					</script> MBM PKN STAN. Hak cipta dilindungi.</p>
      </div>
    </div>

    <div class="curve curve-top curve-center"></div>
</footer>

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
