<div class="container">
			<ul class='nav nav-tabs'>
				<li><a href='<?php echo site_url('profil'); ?>'>Profil</a></li>
				<li class='active'><a href='<?php echo site_url('profil/edit'); ?>'>Edit profil</a></li>
				<li><a href='<?php echo site_url('profil/newAd'); ?>'>Buat Iklan</a></li>
				<li><a href='<?php echo site_url('profil/listAd'); ?>'>Iklan Saya</a></li>
				<li><a href='<?php echo site_url('profil/pesan'); ?>'>Pesan <span class="label label-danger"><?php echo $notifikasi; ?></span></a></li>
				<li><a href='<?php echo site_url('logout'); ?>'>Logout</a></li>
			</ul>
			<br><br>
		<div class='jumbotron'>
      <?php echo validation_errors(); ?>

      <?php echo form_open_multipart('controllerMember/editProfil'); ?>
        <p>Nama</p>
        <input class="form-control" type="text" name="nama" value="<?php echo $dataProfil['nama']; ?>"><br>
        <p>Email</p>
        <input class="form-control" type="text" name="email" value="<?php echo $dataProfil['email']; ?>"><br>
        <p>Password</p>
        <input class="form-control" type="password" name="pass"><br>
        <p>No Telepon</p>
        <input class="form-control" type="text" name="telp" value="<?php echo $dataProfil['noTelp']; ?>"><br>
        <p>Alamat</p>
        <textarea class="form-control" name="alamat" rows="8" cols="80"><?php echo $dataProfil['alamat']; ?></textarea><br>
        <p>Deskripsi</p>
        <textarea class="form-control" name="deskripsi" rows="8" cols="80"><?php echo $dataProfil['deskripsi']; ?></textarea><br>
        <label class="btn btn-default btn-file">
        Browse <input type="file" name="foto" style="display: none;">
        </label><br><br>
        <input class="btn btn-info" type="submit" name="submit" value="SIMPAN" style="width: 100%;">
      <?php echo form_close(); ?>


  </div>
</div>
