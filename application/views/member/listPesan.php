<div class="container">
  <ul class='nav nav-tabs'>
    <li><a href='<?php echo site_url('profil'); ?>'>Profil</a></li>
    <li><a href='<?php echo site_url('profil/edit'); ?>'>Edit profil</a></li>
    <li><a href='<?php echo site_url('profil/newAd'); ?>'>Buat Iklan</a></li>
    <li><a href='<?php echo site_url('profil/listAd'); ?>'>Iklan Saya</a></li>
    <li class='active'><a href='<?php echo site_url('profil/pesan'); ?>'>Pesan <span class="label label-danger"><?php echo $JMLnotifikasi; ?></span></a></li>
    <li><a href='<?php echo site_url('logout'); ?>'>Logout</a></li>
  </ul>
  <br><br>
  <div class="jumbotron">
          <?php
          $index = 0;
          if(count($pesan) > 0){?>
            <div class="list-group">
            <?php
              foreach ($pesan as $item) {?>
                  <a class="list-group-item list-group-item-info" href="<?php echo site_url('pesan/'.$this->session->userdata('id').'/'.$item['ID']); ?>"><span class='label label-danger'><?php echo $notifikasi[$index]; ?></span><strong><font size='5'><?php echo '  '.$item['nama']; ?></font></strong></a>
                <?php
                $index++;
              }?>
            </div>
            <?php
          }else{
            ?>
            <div class="alert alert-danger">
              <strong>Anda Belum Memiliki Pesan !</strong>.
            </div>
            <?php
          }
           ?>
    </div>
  </div>
</div>
