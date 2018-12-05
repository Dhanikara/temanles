<div class="container">
			<ul class='nav nav-tabs'>
				<li><a href='<?php echo site_url('profil'); ?>'>Profil</a></li>
				<li><a href='<?php echo site_url('profil/edit'); ?>'>Edit profil</a></li>
				<li><a href='<?php echo site_url('profil/newAd'); ?>'>Buat Iklan</a></li>
				<li class='active'><a href='<?php echo site_url('profil/listAd'); ?>'>Iklan Saya</a></li>
				<li><a href='<?php echo site_url('profil/pesan'); ?>'>Pesan <span class="label label-danger"><?php echo $notifikasi; ?></span></a></li>
				<li><a href='<?php echo site_url('logout'); ?>'>Logout</a></li>
			</ul>
			<br><br>
		<div class='jumbotron'>
      <?php
			if(count($iklan) > 0){
        foreach ($iklan as $iklan_item) {?>
          <div class="panel-group">
          <div class="panel panel-info">
            <div class="panel-heading"><a href="<?php echo site_url('iklan/'.$iklan_item['statusPencarian'].'/'.$iklan_item['id_iklan']); ?>">  <h3><?php echo $iklan_item['judul']; ?><font size='3'><?php echo '  ['.$iklan_item['jenjang'].']';?></font></h3></a>
							<font size='2'>Kategori : Pencarian <?php echo $iklan_item['statusPencarian']; ?></font>
						</div>
            <div class="panel-body">
              <a href="<?php echo site_url('profil/editAd/'.$iklan_item['id_iklan']); ?>">Edit</a><br>
              <a href="<?php echo site_url('profil/hapusAd/'.$iklan_item['id_iklan']); ?>">Hapus</a>
            </div>
          </div>

          <br>
      <?php
      }
		}else{?>
			<div class="alert alert-danger">
			  <strong>Anda Belum Memiliki Iklan !</strong> Silahkan membuat iklan di menu Buat Iklan.
			</div>
			<?php
		}
       ?>

     </div>
   </div>
   </div>
   </div>
   </div>
