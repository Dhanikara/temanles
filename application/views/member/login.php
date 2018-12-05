<div class="container">
  <div class="jumbotron">
    <h1>Log In</h1><br>
    <?php echo form_open('controllerMember/login'); ?>

      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input id="email" type="text" class="form-control" name="nama" placeholder="Username">
      </div>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
        <input id="password" type="password" class="form-control" name="pass" placeholder="Password">
      </div><br/>
      <input class='btn btn-default' type="submit" value="login">
      <a class='btn btn-info' href='http://localhost/temanles/registrasi'>Belum Punya Akun ?</a><br><br>
      <?php echo form_close(); ?> 
    <div id="infoMessage"><?php echo $this->session->flashdata('message');?></div>
    <?php echo validation_errors(); ?>




  </div>
</div>
