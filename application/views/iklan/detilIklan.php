<div class="container">
<div class='well well-sm'><div class='page-header'><h1><center><?php echo $iklan['judul']; ?></center></h1></div></div>
<div class='row'>
<div class='col-md-9'>
<div class='jumbotron'>

<strong>Kategori Pencarian</strong>
<h2>Cari <?php echo $iklan['statusPencarian'] ?></h2><br/><br/>
<strong>Jenjang</strong>
<h2><?php echo $iklan['jenjang'] ?></h2><br/><br/>
<strong>Deskripsi</strong>
<h2><?php echo $iklan['deskripsi'] ?></h2><br/><br/><br/><br/>

<?php echo form_open('controllerIklan/buatKomentar'); ?>
  <p>Tulis Komentar</p>
  <textarea class="form-control" name="komentar" rows="8" cols="80"></textarea>
  <input type="hidden" name="id_iklan" value="<?php echo $iklan['id_iklan']; ?>">
  <input type="hidden" name="id_pembuatIklan" value="<?php echo $iklan['id_pembuatIklan']; ?>">
  <?php
  if($this->session->userdata('status') != "login" || $this->session->userdata('nama') == "ADMIN"){
    echo "<input class='btn btn-info' type='submit' name='submit' value='Kirim' style='width: 100%;' disabled>";
  }else{
    echo "<input class='btn btn-info' type='submit' name='submit' value='Kirim' style='width: 100%;'>";
  }
   ?>
<?php echo form_close();
?>
<?php echo validation_errors(); ?>
</div>
</div>

<div class='col-md-3'>
  <font size='5'><strong>Pembuat Iklan </strong></font><a href='<?php echo site_url('profil/'.$member['id']); ?>' class='btn btn-info btn-lg'><?php echo $member['nama']; ?></a><br/><br/>
  <img class='img-rounded' src='<?php echo base_url().$member['foto']; ?>' style='height:200; width:260px'><br/><br/>
</div>
</div>
</div>



<?php
if(is_array($komentar)){
    foreach ($komentar as $komen) {?>
      <div class='container'>
        <div class='row'>
        <div class='col-sm-1'>
        <div class='thumbnail'>
        <img class='img-responsive user-photo' src='<?php echo base_url().$komen['foto'];?>'>
        </div>
        </div>
        <div class='col-sm-8'>
        <div class='panel panel-default'>
        <div class='panel-heading'>
        <strong><a href="<?php echo site_url('profil/'.$komen['id_pengirim']); ?>"><h3><?php echo $komen['nama']; ?></h3></a> </strong>
        <font size='2'><?php echo $komen['waktu']; ?></font>
				</div>
        <div class='panel-body'>
				<?php echo $komen['komentar']; ?>
				</div>
				</div>
				</div>
        </div>
        </div>
  <?php
  }
}
 ?>
