<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <a href="http://localhost/temanles/">
		<center><img src='<?php echo base_url();?>Capture.jpg' border='none' />
	</a>
	</center>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="http://localhost/temanles/">TemanLes.com</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="http://localhost/temanles/iklan/Guru">Cari Guru Les</a></li>
        <li><a href="http://localhost/temanles/iklan/Murid">Cari Murid Les</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php
        if(isset($_SESSION['nama'])){
        $nama = $_SESSION['nama'];
          if($_SESSION['nama'] == "ADMIN"){
            echo "<li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href=''><span class='glyphicon glyphicon-user'></span> Halo $nama<span class='caret'></span></a><ul class='dropdown-menu'>
                  <li><a href='http://localhost/temanles/admin/kelolaSistem'>Kelola Sistem</a></li>
            <li><a href='http://localhost/temanles/admin/logout'>Logout</a></li>
            </ul></li>";
          }else{
            echo "<li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href=''><span class='glyphicon glyphicon-user'></span> Halo $nama<span class='caret'></span></a><ul class='dropdown-menu'>
            <li><a href='http://localhost/temanles/profil'>Profil</a></li>
            <li><a href='http://localhost/temanles/logout'>Logout</a></li>
            </ul></li>";
          }
        }else{
          echo "<li><a href='http://localhost/temanles/login'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
        }
    ?>
      </ul>
    </div>
  </nav>


  <div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">

        <div class="item active">
          <img src="bingung.jpeg" alt="Los Angeles" style="width:30%;">
          <div class="carousel-caption">
            <h3 style="color:red;">Bingung ?</h3>
            <p style="color:Tomato;">Bingung dengan materi kalian</p>
          </div>
        </div>

        <div class="item">
          <img src="belajar.jpg" alt="Chicago" style="width:30%;">
          <div class="carousel-caption">
            <h3 style="color:red;">Mau Pintar?</h3>
            <p style="color:Tomato;">Punya impian bisa handal dalam semua mata pelajaran ?</p>
          </div>
        </div>

        <div class="item">
          <img src="<?php echo base_url();?>kemuliaan-menjadi-seorang-guru.jpg" alt="New York" style="width:30%;">
          <div class="carousel-caption">
            <h3 style="color:red;">Guru Terbaik ?</h3>
            <p style="color:Tomato;">Ingin punya guru yang baik dan sesuai dengan hati</p>
          </div>
        </div>

        <div class="item">
          <img src="Capture2.jpg" alt="New York" style="width:70%;">
          <div class="carousel-caption">
          </div>
        </div>

      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <br><br>


  <div class="container">
    <div class="jumbotron">
    <center>
    <button type="button" class="btn btn-danger btn-lg" data-toggle="collapse" data-target="#demo">Apa Itu Teman Les ?</button>
    <div id="demo" class="collapse">
      Punya pr tapi bingung gimana ngerjainnya?
      Pengen belajar piano tapi susah cari gurunya?
      Pengen punya guru les pribadi tapi bingung dimana nyarinya? TemanLes solusinya!
      TemanLes merupakan aplikasi solusi dari pencarian guru les private terlengkap. Cukup dengan memasang iklan melalui website TemanLes kamu bisa dapatkan guru yang sesuai dengan keinginanmu! Tidak hanya untuk pencari guru saja, TemanLes juga menyediakan fasilitas bagi pengajar untuk mempromosikan diri melalui iklan yang dapat dibuat dengan mengunjungi website TemanLes. Tingkatkan kemampuan akademik maupun non-akademikmu dengan guru les private yang asik, seru dan berpengalaman dibidangnya pastinya. Semua bisa diatur sesuai keinginanmu loh! Tinggal pasang iklannya, diskusi melalui kolom commentnya dan guru terbaik siap datang ke tempatmu! Dengan TemanLes #BelajarGakPakeRibet.
      </br></br><button type="button" class="btn btn-danger btn-lg" data-toggle="collapse" data-target="#demoo">Lebih Detail Lagi</button>
      <div id="demoo" class="collapse">
        Pada temanLes terdapat dua kategori iklan yakni iklan pencarian guru dan iklan pencarian murid. semua disusun sesuai jenjang sehingga memudahkan anda.
        </br></br><button type="button" class="btn btn-danger btn-lg" data-toggle="collapse" data-target="#demooo">Lalu ?</button>
        <div id="demooo" class="collapse">
            Tunggu apa lagi?
            Segera daftarkan diri anda <a href="http://localhost/temanles/registrasi">disini</a>
        </div>
      </div>
    </div>
    </center>
    </div>
  </div>
  <br><br><br>

















  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 footerleft ">
          <div class="logofooter">Temanles.com</div>
          <p>Sebush website lokal untuk kebutuhan pencarian tutor, guru atau murid di seluruh indonesia. Pembuatan website ini ditujukan untuk melengkapi tugas project akhir mata kuliah Rekayasa Perangkat Lunak di Fakultas Ilmu Komputer Universitas Brawijaya</p>
          <p>TEAM MKPL ONE<p>



        </div>
        <div class="col-md-2 col-sm-6 paddingtop-bottom">
          <h6 class="heading7">KATEGORI</h6>
          <ul class="footer-ul">
            <li><a href="http://localhost/temanles/iklan/Guru">Iklan Pencarian Guru</a></li>
            <li><a href="http://localhost/temanles/iklan/Murid">Iklan Pencarian Murid</a></li>
          </ul>
        </div>
      </div>
  </footer>

  <div class="copyright">
    <div class="container">
      <div class="col-md-6">
        <p>© 2017 - TEAM MKPL ONE</p>
      </div>
    </div>
  </div>

  </body>

  </html>
