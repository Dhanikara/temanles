<div class="container">
			<ul class='nav nav-tabs'>
				<li><a href='<?php echo site_url('admin/kelolaSistem'); ?>'>Profil</a></li>
				<li><a href='<?php echo site_url('admin/kelolaSistem/member'); ?>'>Daftar Member</a></li>
				<li class='active'><a href='<?php echo site_url('admin/kelolaSistem/iklan'); ?>'>Daftar Iklan</a></li><li><a href='<?php echo site_url('admin/logout'); ?>'>Logout</a></li>
			</ul>
			<br><br>
		<div class='jumbotron'>
      <?php
      if(is_array($dataIklan)){
        foreach ($dataIklan as $iklan_item) {?>
          <div class="panel-group">
          <div class="panel panel-info">
            <div class="panel-heading"><a href="<?php echo site_url('iklan/'.$iklan_item['statusPencarian'].'/'.$iklan_item['id_iklan']); ?>">  <font size='4'><?php echo $iklan_item['judul']."  "; ?></font></a>
            <a class='btn btn-danger'href="<?php echo site_url('admin/kelolaSistem/iklan/hapusIklan/'.$iklan_item['id_iklan']); ?>"><span class='glyphicon glyphicon-trash'></span></a>
            </div>
            <div class="panel-body">
              <font size='2'>Oleh : <a href="<?php echo site_url('profil/'.$iklan_item['id_pembuatIklan']); ?>"><?php echo $iklan_item['nama'] ?></a></font><br>
              <font size='2'>Kategori : Pencarian <?php echo $iklan_item['statusPencarian']; ?></font><br>
              <font size='2'>Jenjang : <?php echo $iklan_item['jenjang']; ?></font>
            </div>
          </div>
          <br>

      <?php
      }
      }else{
        echo "Data Kosong";
      }
       ?>

	</div>
</div>
</div>
</div>
</div>
</div>
