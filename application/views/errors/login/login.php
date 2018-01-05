<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="page-loader" data-toggle="page-loader"></div>
<div id="#container" style="font-family: open sans serif;">
  <form class="form-login form-wrapper form-narrow mt-3" style="border: none;" action="/auth/authentication" method="post">
    <h3 class="title-divider">
    <span>Login</span>
    </h3>
    <div class="form-group">
      <label class="sr-only">ID</label>
        <input type="text" id="userid" class="form-control email" name="userid" placeholder="ID">
    </div>
    <div class="form-group">
      <label class="sr-only">Password</label>
      <input type="password" id="password" class="form-control password" name="password" placeholder="Password">
    </div>
      <input type="submit" class="btn btn-primary" value="Login"/>
  </form>
</div>
<?php echo validation_errors(); ?>
