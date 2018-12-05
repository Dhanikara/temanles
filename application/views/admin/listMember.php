<div class="container">
			<ul class='nav nav-tabs'>
				<li><a href='<?php echo site_url('admin/kelolaSistem'); ?>'>Profil</a></li>
				<li class='active'><a href='<?php echo site_url('admin/kelolaSistem/member'); ?>'>Daftar Member</a></li>
				<li><a href='<?php echo site_url('admin/kelolaSistem/iklan'); ?>'>Daftar Iklan</a></li><li><a href='<?php echo site_url('admin/logout'); ?>'>Logout</a></li>
			</ul>
			<br><br>
		<div class='jumbotron'>
      <?php
      if(is_array($dataMember)){
        foreach ($dataMember as $member_item) {?>
          <img src='<?php echo base_url().$member_item['foto']; ?>' class='img-thumbnail' alt='Foto Kosong' align='right' width='180px' height='120px'/>
          <p>Nama  : <?php echo $member_item['nama']; ?></p>
          <p>Email : <?php echo $member_item['email']; ?></p>

          <a class='btn btn-info' href='<?php echo site_url('profil/'.$member_item['id']); ?>'>Lihat Member</a>
  				<a class='btn btn-danger' href="<?php echo site_url('admin/kelolaSistem/member/hapusMember/'.$member_item['id']); ?>">Hapus Member</a><br/><br/><br/>


      <?php
      }
      }else{
        echo "Data Kosong";
      }
       ?>
	</div>
</div>
