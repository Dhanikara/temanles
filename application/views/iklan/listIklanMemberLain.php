<div class="container">
			<ul class='nav nav-tabs'>
        <li><a href='<?php echo site_url('profil/'.$dataMember['id']); ?>'>Profil</a></li>
				<li class='active'><a href='<?php echo site_url('profil/listAd/'.$dataMember['id']); ?>'>List Iklan</a></li>
				<?php
					if($this->session->userdata('nama') != "ADMIN"){
						$website = site_url('pesan/'.$this->session->userdata('id').'/'.$dataMember['id']);
						echo "<li><a href='$website'>Pesan</a></li>";
					}
				 ?>
			<br><br>
		<div class='jumbotron'>
      <?php
			if(count($iklan) > 0){
        foreach ($iklan as $iklan_item) {?>
          <div class="panel-group">
          <div class="panel panel-info">
            <div class="panel-heading"><div class="panel-heading"><a href="<?php echo site_url('iklan/'.$iklan_item['statusPencarian'].'/'.$iklan_item['id_iklan']); ?>">  <h3><?php echo $iklan_item['judul']; ?></h3></a></div></div>
            <div class="panel-body">
              <font size='2'>Kategori : Pencarian <?php echo $iklan_item['statusPencarian']; ?></font><br>
              <font size='2'>Jenjang : <?php echo $iklan_item['jenjang']; ?></font>
            </div>
          </div>

          <br>
      <?php
      }
		}else{?>
			<div class="alert alert-danger">
			  <strong>Iklan Tidak Ditemukan !</strong> Member ini belum memiliki iklan aktif.
			</div>
			<?php
		}
       ?>

     </div>
   </div>
   </div>
   </div>
   </div>
