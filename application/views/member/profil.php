<div class="container">
			<ul class='nav nav-tabs'>
				<li class='active'><a href='<?php echo site_url('profil'); ?>'>Profil</a></li>
				<li><a href='<?php echo site_url('profil/edit'); ?>'>Edit profil</a></li>
				<li><a href='<?php echo site_url('profil/newAd'); ?>'>Buat Iklan</a></li>
				<li><a href='<?php echo site_url('profil/listAd'); ?>'>Iklan Saya</a></li>
				<li><a href='<?php echo site_url('profil/pesan'); ?>'>Pesan <span class="label label-danger"><?php echo $notifikasi; ?></span></a></li>
				<li><a href='<?php echo site_url('logout'); ?>'>Logout</a></li>
			</ul>
			<br><br>
		<div class='jumbotron'>
				<img src='<?php echo $this->session->userdata("foto"); ?>' class='img-thumbnail' alt='Cinque Terre' width='304' height='236' style='float:right'><br/><br/>
				<strong>Nama</strong>
				<h2><?php echo $this->session->userdata("nama"); ?></h2><br/><br/>
				<strong>No Telepon</strong>
				<h2><?php echo $this->session->userdata("telp"); ?></h2><br/><br/>
				<strong>Email</strong>
				<h2><?php echo $this->session->userdata("email"); ?></h2><br/><br/>
				<strong>Alamat</strong>
				<h2><?php echo $this->session->userdata("alamat"); ?></h2><br/><br/>
				<strong>Deskripsi</strong>
				<h2><?php echo $this->session->userdata("deskripsi"); ?></h2><br/><br/>
	</div>
</div>
