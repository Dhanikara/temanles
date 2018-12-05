<div class="container">
  <div class="jumbotron">
    <h1>Log In</h1><br>
      <?php echo form_open('controllerAdmin/loginAdmin'); ?>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input id="email" type="text" class="form-control" name="email" placeholder="Email">
      </div>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
        <input id="password" type="password" class="form-control" name="pass" placeholder="Password">
      </div><br/>
      <input class='btn btn-default' type="submit" value="Login">

      <?php echo form_close(); ?>
      <br>
    </div>
  </div>
