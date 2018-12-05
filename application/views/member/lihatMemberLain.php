<div class="container">
			<ul class='nav nav-tabs'>
				<li class='active'><a href='<?php echo site_url('profil/'.$dataMember['id']); ?>'>Profil</a></li>
				<li><a href='<?php echo site_url('profil/listAd/'.$dataMember['id']); ?>'>List Iklan</a></li>
				<?php
					if($this->session->userdata('nama') != "ADMIN"){
						$website = site_url('pesan/'.$this->session->userdata('id').'/'.$dataMember['id']);
						echo "<li><a href='$website'>Pesan</a></li>";
					}
				 ?>
			</ul>
			<br><br>
		<div class='jumbotron'>
				<img src='<?php echo base_url().$dataMember['foto']; ?>' class='img-thumbnail' alt='Cinque Terre' width='304' height='236' style='float:right'><br/><br/>
				<strong>Nama</strong>
				<h2><?php echo  $dataMember['nama']; ?></h2><br/><br/>
				<strong>No Telepon</strong>
				<h2><?php echo  $dataMember['noTelp']; ?></h2><br/><br/>
				<strong>Email</strong>
				<h2><?php echo  $dataMember['email']; ?></h2><br/><br/>
				<strong>Alamat</strong>
				<h2><?php echo  $dataMember['alamat']; ?></h2><br/><br/>
				<strong>Deskripsi</strong>
				<h2><?php echo  $dataMember['deskripsi']; ?></h2><br/><br/>
	</div>
</div>
