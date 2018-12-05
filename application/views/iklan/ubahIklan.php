<div class="container">
  <ul class='nav nav-tabs'>
    <li><a href='<?php echo site_url('profil'); ?>'>Profil</a></li>
    <li><a href='<?php echo site_url('profil/edit'); ?>'>Edit profil</a></li>
    <li><a href='<?php echo site_url('profil/newAd'); ?>'>Buat Iklan</a></li>
    <li class='active'><a href='<?php echo site_url('profil/listAd'); ?>'>Iklan Saya</a></li>
    <li><a href='<?php echo site_url('profil/pesan'); ?>'>Pesan <span class="label label-danger"><?php echo $notifikasi; ?></span></a></li>
    <li><a href='<?php echo site_url('profil/logout'); ?>'>Logout</a></li>
  </ul>
  <br><br>
  <div class="jumbotron">
    <h1>Edit Iklan</h1>

    <?php echo form_open('controllerIklan/ubahIklan/'.$item_iklan['id_iklan']); ?>
    <?php echo validation_errors(); ?>
      <p>Judul</p>
      <input class="form-control" type="text" name="judul" value = '<?php echo $item_iklan['judul']; ?>'><br>
      <p>Pencarian</p>
      <select class='form-control' name="pencarian">
        <option value="Guru">Guru</option>
        <option value="Murid">Murid</option>
      </select><br/>
      <p>Jenjang</p>
      <select class='form-control' name="jenjang">
        <option value="SD">SD</option>
        <option value="SMP">SMP</option>
        <option value="SMA">SMA</option>
        <option value="Mahasiswa">MAHASISWA</option>
        <option value="Umum">UMUM</option>
      </select><br/>
      <p>Deskripsi</p>
      <textarea class="form-control" name="deskripsi" rows="8" cols="80"><?php echo $item_iklan['deskripsi']; ?></textarea><br>
      <input class="btn btn-info" type="submit" name="submit" value="SIMPAN" style="width: 100%;">
    <?php echo form_close(); ?>

</div>
</div>
