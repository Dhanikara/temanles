<div class="container">
  <ul class='nav nav-tabs'>
    <li><a href='<?php echo site_url('profil'); ?>'>Profil</a></li>
    <li><a href='<?php echo site_url('profil/edit'); ?>'>Edit profil</a></li>
    <li><a href='<?php echo site_url('profil/newAd'); ?>'>Buat Iklan</a></li>
    <li><a href='<?php echo site_url('profil/listAd'); ?>'>Iklan Saya</a></li>
    <li class='active'><a href='<?php echo site_url('profil/pesan'); ?>'>Pesan <span class="label label-danger"><?php echo $notifikasi; ?></span></a></li>
    <li><a href='<?php echo site_url('logout'); ?>'>Logout</a></li>
  </ul>
  <br><br>
  <div class="jumbotron">
    <?php echo form_open(base_url().'pesan/'.$this->session->userdata('id').'/'.$penerima['id']); ?>
    <p>Penerima : <?php echo $penerima['nama']; ?></p>
        <div class="well well-sm">
          <?php
          if(is_array($pesan)){
              foreach ($pesan as $item) {
                if($item['id_pengirim'] === $this->session->userdata('id')){
                ?>
                  <h4 align="right" style="color:blue;">[<?php echo $item['nama']; ?>]</h4>
                  <h6 align="right" style="color:blue;"><?php echo $item['waktu']; ?></h6>
                  <p align="right" style="color:blue;"><font size="1"><?php echo "[".$item['status']."]  " ?></font><?php echo $item['pesan']; ?></p><br>
                <?php
                }else{
                ?>
                  <h4 style="color:red;">[<?php echo $item['nama']; ?>]</h4>
                  <h6 style="color:red;"><?php echo $item['waktu']; ?></h6>
                  <p style="color:red;"><?php echo $item['pesan']; ?></p><br>
                <?php
              }
            }
          }
           ?>
        </div>
      <p>Pesan</p>
      <textarea class="form-control" name="pesan" rows="8" cols="80" id="textareaPesan"></textarea><br>
      <input class='btn btn-default' type="submit" value="Kirim" id="tombolPesan">
      <?php echo form_close(); ?>
    <?php echo validation_errors(); ?>
  </div>
</div>
