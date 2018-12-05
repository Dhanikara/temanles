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
        <li><a href="http://localhost/temanles/iklan/Guru">Daftar Bimbingan Mata Pelajaran</a></li>
        <li><a href="http://localhost/temanles/iklan/Murid"></a></li>

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
