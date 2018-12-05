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


