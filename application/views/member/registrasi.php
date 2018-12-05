<div class="container">
  <div class="jumbotron">
    <h1>Registrasi</h1><br>
    <?php echo validation_errors(); ?>
    <?php echo form_open_multipart('controllerMember/registrasi'); ?>
      <p>Nama</p>
      <input class="form-control" type="text" name="nama"><br>
      <p>Email</p>
      <input class="form-control" type="text" name="email"><br>
      <p>Password</p>
      <input class="form-control" type="password" name="pass"><br>
      <p>No Telepon</p>
      <input class="form-control" type="text" name="telp"><br>
      <p>Alamat</p>
      <textarea class="form-control" name="alamat" rows="8" cols="80"></textarea><br>
      <p>Deskripsi</p>
      <textarea class="form-control" name="deskripsi" rows="8" cols="80"></textarea><br>
      <label class="btn btn-default btn-file">
      Browse <input type="file" name="foto" style="display: none;">
      </label><br><br>

      <input class="btn btn-info" type="submit" name="submit" value="Daftar" style="width: 100%;">

    <?php echo form_close(); ?>

    <?php echo "</div></div></div>" ?>
  </div>
</div>
