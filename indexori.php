<?php 
session_start();
include('includes/config.php');

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
$query=mysqli_query($con,"insert into tblcomments_keran(name,email,comment) values('$name','$email','$comment')");
if($query):
  echo "<script>alert('Terimakasih atas kritik dan saran yang telah Anda kirim.');</script>";
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
        <title>MBM PKN STAN</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto%7CJosefin+Sans:100,300,400,500" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- <link rel="stylesheet" href="css/bootstrap3.min.css"> -->
	<link rel="shortcut icon" href="img/logo.png"/>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/cubeportfolio.min.css">
    <link rel="stylesheet" type="text/css" href="css/component.css" />

  </head>
  <body>
  <nav class="navbar navbar-expand-lg fixed-top activate-menu navbar-light bg-light">
    <img src="img/home.png" width="60"></img> <a class="navbar-brand" href="#"> MBM PKN STAN</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse"    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li >
          <a class="nav-link" style="color:black" href=""><b>Beranda</b></a>
        </li>
        <li class="dropdown">
          <a class="nav-link" href="#">Tentang MBM</a>
			<ul style="text-decoration: none;" class="isi-dropdown">
				<li><a href="sejarah">Sejarah</a></li><br>
				<li><a href="visi-misi">Visi Misi</a></li>
				<li><a href="hubungi">Hubungi Kami</a></li>
			</ul>
        </li>
        <li>
          <a class="nav-link" href="event">Event MBM</a>
        </li>
        <li class="dropdown">
          <a class="nav-link" href="#">Konten Islami</a>
			<ul style="text-decoration: none;" class="isi-dropdown">
				<li><a href="materi">Materi Kajian</a></li>
				<li><a href="buku">Buku dan Modul</a></li>
				<li><a href="blog">Blog Islami</a></li>
			</ul>
        </li>
        <li>
          <a class="nav-link" href="galeri">Galeri Kegiatan</a>
        </li>
		<li>
          <a class="nav-link" href="toko">MBM Shop</a>
        </li>
      </ul>
    </div>
  </nav>

  <!--================== SELAMAT DATANG =====================-->
  <br>
  <div id="features">
     <div class="text-center features-caption features">
                <h3>Selamat Datang di Website Masjid Baitul Maal PKN STAN</h3>
                  <h4>Dekat, Bersahabat, Bermanfaat.</h4>
                  <p>
				  Laman Resmi Lembaga Dakwah Kampus PKN STAN
                  </p>
     </div>
          <div class="container">
            <div class="row">
              <div class="col-sm bottom-space">
					<a style="color:black; text-decoration: none;" href="sejarah">
						<div class="feature-box">
							<i class="fa fa-institution fa-5x fa-icon-image"></i>
							<h3 class="heading-tertiary u-margin-bottom-small">Tentang<br>MBM</h3>
							<p class="feature-box__text">
							  Berisi sejarah, visi dan misi MBM.
							</p>
						</div>
					</a>
              </div>
              <div class="col-sm bottom-space">
					<a style="color:black; text-decoration: none;" href="event">
						<div class="feature-box">
							<i class="fa fa-calendar-check-o fa-5x fa-icon-image" ></i>
							<h3 class="heading-tertiary u-margin-bottom-small">Event<br>MBM</h3>
							<p class="feature-box__text">
							 Berisi daftar acara besar MBM.
							</p>
						</div>
					</a>
              </div>
              <div class="col-sm bottom-space">
					<a style="color:black; text-decoration: none;" href="materi">
						<div class="feature-box">
							<i class="fa fa-5x fa-file-text fa-icon-image"></i>
							<h3 class="heading-tertiary u-margin-bottom-small">Konten<br>Islami</h3>
							<p class="feature-box__text">
							  Berisi konten Islami; materi, buku dan blog.
							</p>
						</div>
					</a>
              </div>
			   <div class="col-sm bottom-space">
					<a style="color:black; text-decoration: none;" href="materi">
						<div class="feature-box">
							<i class="fa fa-5x fa-image fa-icon-image"></i>
							<h3 class="heading-tertiary u-margin-bottom-small">Galeri<br>Kegiatan</h3>
							<p class="feature-box__text">
							  Berisi dokumentasi kegiatan MBM.
							</p>
						</div>
					</a>
              </div>
			  <div class="col-sm bottom-space">
					<a style="color:black; text-decoration: none;" href="toko">
						<div class="feature-box">
							<i class="fa fa-5x fa-cart-plus fa-icon-image"></i>
							<h3 class="heading-tertiary u-margin-bottom-small">MBM<br>Shop</h3>
							<p class="feature-box__text">
							  Berisi produk yang dapat dibeli.
							</p>	
						</div>
					</a>
              </div>
			  
            </div>
     </div>
  </div>


 <!--================== EVENT =====================-->
  <section class="grid3d vertical portfolio" id="portfolio">
    <div class="container">
       <div class="teams-heading text-center col-md-8 offset-md-2 col-sm-12 text-center">
        <!-- <span>Heros Behind The Company</span> -->
        <h1 class="teams-heading">Event MBM</h1>

        <p class="heading_space">Berisi daftar acara besar MBM yang akan datang dan sudah berlalu.
        </p>
      </div>
    </div>
    
	<div class="container">
           <div class="row">
		 
<?php 
     if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 3;
        $offset = ($pageno-1) * $no_of_records_per_page;


        $total_pages_sql = "SELECT COUNT(*) FROM tblposts_event";
        $result = mysqli_query($con,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);

$query=mysqli_query($con,"select tblposts_event.id as pid,tblposts_event.PostTitle as posttitle,tblposts_event.PostImage,tblposts_event.PostDetails as postdetails,tblposts_event.PostingDate as postingdate,tblposts_event.PostUrl as url from tblposts_event where tblposts_event.Is_Active=1 order by tblposts_event.id desc  LIMIT $offset, $no_of_records_per_page");
while ($row=mysqli_fetch_array($query)) {
?> 
            <div class="col-sm">
                <div class="blog-item-box">
                <figure class="blog-item">
                    <div class="image">
                      <img src="masuk-admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>"/>
                    </div>
                    <figcaption>
                      <h3><?php echo htmlentities($row['posttitle']);?></h3>
                      <h5><?php echo htmlentities($row['postingdate']);?></h5>
                      <a href="event/event.php?nid=<?php echo htmlentities($row['pid'])?>" class="read-more">SELENGKAPNYA</a>
                    </figcaption>
                  </figure>
                </div>
				 
            </div>
            <?php } ?>
          </div>
		  
		  
		  <div class="showcase-button text-center">
                      <a href="event" class="button-style showcase-btn">
                        <h5>SELENGKAPNYA</h5>
                      </a>
                </div>
		  
        </div>
	
  </section>
  <br><br>



  <!--================== MATERI KAJIAN =====================-->  
  <section class="grid3d vertical portfolio" id="portfolio">
    <div class="container">
       <div class="teams-heading text-center col-md-8 offset-md-2 col-sm-12 text-center">
        <!-- <span>Heros Behind The Company</span> -->
        <h1 class="teams-heading">Materi Kajian</h1>

        <p class="heading_space">Berisi materi kajian Islam berupa media video.
        </p>
      </div>
    </div>
    
		<div class="container">
          <div class="row">
		  
		  <?php 
     if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 3;
        $offset = ($pageno-1) * $no_of_records_per_page;


        $total_pages_sql = "SELECT COUNT(*) FROM tblposts_materi";
        $result = mysqli_query($con,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);

$query=mysqli_query($con,"select tblposts_materi.id as pid,tblposts_materi.PostTitle as posttitle,tblposts_materi.PostDetails as postdetails,tblposts_materi.PostingDate as postingdate,tblposts_materi.PostUrl as url from tblposts_materi where tblposts_materi.Is_Active=1 order by tblposts_materi.id desc  LIMIT $offset, $no_of_records_per_page");
while ($row=mysqli_fetch_array($query)) {
?> 


			<div class="col-sm bottom-space">
					<a style="color:black; text-decoration: none;" href="materi/materi.php?nid=<?php echo htmlentities($row['pid'])?>">
						<div class="feature-box">
							<i class="fa fa-file-video-o fa-5x fa-icon-image"></i>
							<h3 class="heading-tertiary u-margin-bottom-small"><?php echo htmlentities($row['posttitle']);?></h3>
						</div>
					</a>
            </div>
<?php } ?>

            
          </div>
		  
				<div class="showcase-button text-center">
                      <a href="materi" class="button-style showcase-btn">
                        <h5>SELENGKAPNYA</h5>
                      </a>
                </div>
		  
        </div>
	
  </section>
  <br><br>

  <!--================== BUKU DAN MODUL =====================-->

  <div id="teams">
    <div class="container">
      <div class="teams-heading text-center col-md-8 offset-md-2 col-sm-12 text-center">
        <!-- <span>Heros Behind The Company</span> -->
        <h1 class="teams-heading">Buku dan Modul</h1>

        <p class="heading_space">Berisi buku dan modul agama Islam yang dapat diunduh.
        </p>
      </div>

      <div class="container">
          <div class="row">
		  
<?php
$query=mysqli_query($con,"select id,CategoryName from tblcategory_buku LIMIT 3");
while ($row=mysqli_fetch_array($query)) {
?> 
             <div class="col-sm bottom-space">
					<a style="color:black; text-decoration: none;" href="buku/buku.php?catid=<?php echo htmlentities($row['id'])?>">
						<div class="feature-box">
							<i class="fa fa-book fa-5x fa-icon-image"></i>
							<h3 class="heading-tertiary u-margin-bottom-small"><?php echo htmlentities($row['CategoryName']);?></h3>
						</div>
					</a>
            </div>
           
		               <?php } ?>

            
          </div>
		  
		  
        </div>

				<div class="showcase-button text-center">
                      <a href="buku" class="button-style showcase-btn">
                        <h5>SELENGKAPNYA</h5>
                      </a>
                </div>
	
    </div>
  </div>
  
 
  <!--================== BLOG ISLAMI =====================-->
 
  <div id="blog" class="blog">
      <div class="container">
	  
		<div class="teams-heading text-center col-md-8 offset-md-2 col-sm-12 text-center">
        <!-- <span>Heros Behind The Company</span> -->
        <h1 class="teams-heading">Blog Islami</h1>

        <p class="heading_space">Berisi blog Islami berupa tulisan artikel maupun berita.
        </p>
		</div>
		

          <div class="row">
		 
<?php 
     if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 3;
        $offset = ($pageno-1) * $no_of_records_per_page;


        $total_pages_sql = "SELECT COUNT(*) FROM tblposts";
        $result = mysqli_query($con,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);

$query=mysqli_query($con,"select tblposts.id as pid,
tblposts.PostTitle as posttitle,
tblposts.PostImage,
tblcategory.CategoryName as category,
tblcategory.id as cid,
tblposts.PostDetails as postdetails,
tblposts.PostingDate as postingdate,
tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId where tblposts.Is_Active=1 order by tblposts.id desc  LIMIT $offset, $no_of_records_per_page");
while ($row=mysqli_fetch_array($query)) {
?> 
            <div class="col-sm">
                <div class="blog-item-box">
                <figure class="blog-item">
                    <div class="image">
                      <img src="masuk-admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>"/>
                    </div>
                    <figcaption>
                      <h3><?php echo htmlentities($row['posttitle']);?></h3>
                      <p><?php echo htmlentities($row['postingdate']);?></p>
                      <a href="blog/blog.php?nid=<?php echo htmlentities($row['pid'])?>" class="read-more">SELENGKAPNYA</a>
                    </figcaption>
                  </figure>
                </div>
				 
            </div>
            <?php } ?>
          </div>
		  
				<div class="showcase-button text-center">
                      <a href="blog" class="button-style showcase-btn">
                        <h5>SELENGKAPNYA</h5>
                      </a>
                </div>
		  
        </div>
		
  </div>
  
  
  
   <!--================== GALERI =====================-->

  <div id="teams">
    <div class="container">
      <div class="teams-heading text-center col-md-8 offset-md-2 col-sm-12 text-center">
        <!-- <span>Heros Behind The Company</span> -->
        <h1 class="teams-heading">Galeri Kegiatan</h1>

        <p class="heading_space">Berisi dokumentasi kegiatan MBM.
        </p>
      </div>

      <div class="container">
          <div class="row">
		  
<?php
$query=mysqli_query($con,"select id,CategoryName from tblcategory_galeri LIMIT 3");
while ($row=mysqli_fetch_array($query)) {
?> 
             <div class="col-sm bottom-space">
					<a style="color:black; text-decoration: none;" href="galeri/foto.php?catid=<?php echo htmlentities($row['id'])?>">
						<div class="feature-box">
							<i class="fa fa-image fa-5x fa-icon-image"></i>
							<h3 class="heading-tertiary u-margin-bottom-small"><?php echo htmlentities($row['CategoryName']);?></h3>
						</div>
					</a>
            </div>
           
		               <?php } ?>

            
          </div>
		  
		  
        </div>

				<div class="showcase-button text-center">
                      <a href="galeri" class="button-style showcase-btn">
                        <h5>SELENGKAPNYA</h5>
                      </a>
                </div>
	
    </div>
  </div>
  
 

  <!--================== TOKO DAN DONASI =====================-->
  <section class="grid3d vertical portfolio" id="portfolio">
    <div class="container">
       <div class="teams-heading text-center col-md-8 offset-md-2 col-sm-12 text-center">
        <!-- <span>Heros Behind The Company</span> -->
        <h1 class="teams-heading">MBM Shop</h1>

        <p class="heading_space">Berisi toko barang/produk yang dapat dibeli dan donasi.
        </p>
      </div>
    </div>
    
	<div class="container">
           <div class="row">
		 
<?php 
     if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 3;
        $offset = ($pageno-1) * $no_of_records_per_page;


        $total_pages_sql = "SELECT COUNT(*) FROM tblposts_toko";
        $result = mysqli_query($con,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);

$query=mysqli_query($con,"select tblposts_toko.id as pid,tblposts_toko.PostTitle as posttitle,tblposts_toko.PostImage,tblposts_toko.CategoryId as category,tblposts_toko.PostDetails as postdetails,tblposts_toko.PostingDate as postingdate,tblposts_toko.PostUrl as url from tblposts_toko where tblposts_toko.Is_Active=1 order by tblposts_toko.id desc  LIMIT $offset, $no_of_records_per_page");
while ($row=mysqli_fetch_array($query)) {
?> 
            <div class="col-sm">
                <div class="blog-item-box">
                <figure class="blog-item">
                    <div class="image">
                      <img src="masuk-admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>"/>
                    </div>
                    <figcaption>
                      <h3><?php echo htmlentities($row['posttitle']);?></h3>
                      <h5><?php echo htmlentities($row['category']);?></h5>
                      <a href="toko/toko.php?nid=<?php echo htmlentities($row['pid'])?>" class="read-more">SELENGKAPNYA</a>
                    </figcaption>
                  </figure>
                </div>
				 
            </div>
            <?php } ?>
          </div>
		  
		  
		  <div class="showcase-button text-center">
                      <a href="toko" class="button-style showcase-btn">
                        <h5>SELENGKAPNYA</h5>
                      </a>
                </div>
		  
        </div>
	
  </section>
  <br><br>

  <!--================== KONTAK =====================-->

  <div id="contact" class="contact">
      <div class="map">
        <iframe height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=3%20Politeknik%20Keuangan%20Negara%20STAN&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
      </div>
	
	   <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
              <h1 class="contact-heading">Pojok Keran MBM</h1>
              <p>Merupakan program kerja Badan Kepatuhan Internal untuk menampung aspirasi mahasiswa tentang MBM.
			  <br><br>“Keran MBM adalah sarana penyampaian kritik dan saran untuk Masjid Baitul Maal. Bantu kami menjadi lebih baik dengan mengisi Keran MBM.”</p>
            </div>


            <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
              <!-- Starting of ajax contact form -->
   <form name="Comment" method="post">
		<input type="hidden" name="csrftoken" value="<?php echo htmlentities($_SESSION['token']); ?>" />
      <!-- Element of the ajax contact form -->
      <div class="row">
          <div class="col-md-6 form-group">
              <input name="name" type="text" class="form-control" placeholder="Nama" required>
          </div>
          
          <div class="col-md-6 form-group">
              <input name="email" type="email" class="form-control" placeholder="Email" required>
          </div>
         
          <div class="col-12 form-group">
              <textarea name="comment" class="form-control" rows="3" placeholder="Kritik dan Saran" required></textarea>
          </div>
          <div class="col-12">
              <input name="submit" type="submit" class="button-style" value="Kirim">
          </div>
      </div>
      

    </form>
	
	
      <!-- Ending of successful form message -->
          </div>
        </div>
  </div>





  </div>
  
  
  
  
  <!--================== FOOTER =====================-->  
  <footer class="text-center pos-re">
    <div class="container">
      <div class="footer__box">
        <!-- Logo -->
        <a style="text-decoration: none;" class="logo" href="#">
            <img src="img/atas.png" alt="logo">
			<p>Kembali ke atas</p>
        </a>

		<div class="social">
            <a style="text-decoration: none;"  href="https://instagram.com/mbmpknstan" target="_blank" aria-hidden="true"><img src="img/ig.png" width="40px"/></a>
			<a style="text-decoration: none;"  href="https://line.me/R/ti/p/%40mbmpknstan" target="_blank" aria-hidden="true"><img src="img/line.png" width="40px"/></a>
            <a style="text-decoration: none;"  href="https://www.youtube.com/channel/UCmbm9RdGdG6DkyhxI-y-_Tw" target="_blank" aria-hidden="true"><img src="img/youtube.png" width="40px"/></a>
        </div>
       
		<br>
        <p>&copy; <script type="text/JavaScript">
					document.write(new Date().getFullYear());
					</script> MBM PKN STAN. Hak cipta dilindungi.</p>
      </div>
    </div>

    <div class="curve curve-top curve-center"></div>
</footer>

  <script src="./js/jquery.min.js"></script>
  <script src="./js/modernizr.custom.js"></script>
  <script src="./js/bootstrap.min.js"></script>
  <script src="./js/slick.min.js"></script>
  <script src="./js/scrollreveal.min.js"></script>
  <script src="./js/jquery.cubeportfolio.min.js"></script>
  <script src="./js/jquery.matchHeight-min.js"></script>
  <script src="./js/masonry.pkgd.min.js"></script>
  <script src="./js/jquery.flexslider-min.js"></script>
  <script src="./js/classie.js"></script>
	<script src="./js/helper.js"></script>
  <script src="./js/grid3d.js"></script>
  <script src="./js/script.js"></script>


</body>
</html>
