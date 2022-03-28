<?php 
session_start();
include('../includes/config.php');

if (empty($_SESSION['token'])) {
 $_SESSION['token'] = bin2hex(random_bytes(32));
}

if(isset($_POST['submit']))
{
  //Verifying CSRF Token
if (!empty($_POST['csrftoken'])) {
    if (hash_equals($_SESSION['token'], $_POST['csrftoken'])) {
$name=$_POST['name'];
$email=$_POST['email'];
$comment=$_POST['comment'];
$postid=intval($_GET['nid']);
$st1='0';
$query=mysqli_query($con,"insert into tblcomments(postId,name,email,comment,status) values('$postid','$name','$email','$comment','$st1')");
if($query):
  echo "<script>alert('Komentarmu berhasil dikirim. Komentar akan tampil setelah disetujui oleh masuk-admin');</script>";
  unset($_SESSION['token']);
else :
 echo "<script>alert('Terjadi kesalahan. Coba lagi');</script>";  

endif;

}
}
}

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
        <title>Blog - MBM PKN STAN</title>
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
          <a class="nav-link" style="color:black" href="#"><b>Konten Islami</b></a>
			<ul style="text-decoration: none;" class="isi-dropdown">
				<li><a href="../materi">Materi Kajian</a></li>
				<li><a href="../buku">Buku dan Modul</a></li>
				<li><a href="#">Blog Islami</a></li>
			</ul>
        </li>
        <li>
          <a class="nav-link" href="../galeri">Galeri Kegiatan</a>
        </li>
		<li>
          <a class="nav-link" href="../toko">MBM Shop</a>
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
 $query=mysqli_query($con,"select tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId where tblposts.id='$pid'");
while ($row=mysqli_fetch_array($query)) {
?>

        <h1 class="teams-heading"><?php echo htmlentities($row['posttitle']);?></h1>

        <p class="heading_space"><i class="fa fa-tag"></i></b> <a style="color:black; text-decoration: none;" href="kategori.php?catid=<?php echo htmlentities($row['cid'])?>"><?php echo htmlentities($row['category']);?></a>&nbsp;&nbsp;&nbsp;	<i class="fa fa-calendar"></i> <?php echo htmlentities($row['postingdate']);?>
        </p>
		
		<img class="img-fluid rounded" src="../masuk-admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>">
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
  
  
   <!--================== COMMENT =====================-->  
    <div class="container">
        <div class="row">
							<div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
							<h1 class="contact-heading">Komentar</h1>
							<form name="Comment" method="post">
								<input type="hidden" name="csrftoken" value="<?php echo htmlentities($_SESSION['token']); ?>" />
								<div class="form-group">
								<input type="text" name="name" class="form-control" placeholder="Nama Lengkap" required>
								</div>

								 <div class="form-group">
								 <input type="email" name="email" class="form-control" placeholder="Email" required>
								 </div>


												<div class="form-group">
												  <textarea class="form-control" name="comment" rows="3" placeholder="Komentar" required></textarea>
												</div>
												<button type="submit" class="btn btn-primary" name="submit"><i class="fa fa-paper-plane"></i> Kirim</button>
											  </form>
				
						  </div>
</div>

            
         
<hr>
<?php 
 $sts=1;
 $query=mysqli_query($con,"select name,comment,postingDate from  tblcomments where postId='$pid' and status='$sts'");
while ($row=mysqli_fetch_array($query)) {
?>
<div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="../images/usericon.png" alt="">
            <div class="media-body">
              <h5 class="mt-0"><?php echo htmlentities($row['name']);?> <br />
                  <span style="font-size:11px;"><b>pada</b> <?php echo htmlentities($row['postingDate']);?></span>
            </h5>
           
             <?php echo htmlentities($row['comment']);?>            </div>
          </div>
<?php } ?>

	</div>   
	

  
   <!--================== FOOTER =====================-->  
      <div class="container">
          <div class="row">
            <div class="col-sm-5 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
              <h1 class="contact-heading">Artikel Terbaru</h1>
				
				<ul>
					<?php
					$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId limit 8");
					while ($row=mysqli_fetch_array($query)) {
					?>

					<li><i class="fa fa-file"></i> <a style="color:black; text-decoration: none;" href="blog.php?nid=<?php echo htmlentities($row['pid'])?>"><?php echo htmlentities($row['posttitle']);?></a> </li>
					<?php } ?>
				</ul>
            </div>
			
			<div class="col-sm-5 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
              <h1 class="contact-heading">Kategori</h1>
				
				<ul>
					<?php $query=mysqli_query($con,"select id,CategoryName from tblcategory");
					while($row=mysqli_fetch_array($query))
					{
					?>

					<li><i class="fa fa-tag"></i> <a style="color:black; text-decoration: none;" href="kategori.php?catid=<?php echo htmlentities($row['id'])?>"><?php echo htmlentities($row['CategoryName']);?></a> </li>
					<?php } ?>
				</ul>
            </div>


            
        </div>
  </div>
  
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
