<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
  <div id="content">
    <div class="container">
    <?php echo validation_errors(); ?>
      <form class="form-login form-wrapper form-narrow" action="/auth/register" method="post">
        <h3 class="title-divider">
          <span>Register</span>
        </h3>
        <div class="form-group">
          <label class="sr-only">ID</label>
          <input type="text" id="userid" class="form-control email" name="userid" placeholder="ID">
        </div>
        <div class="form-group">
            <label class="sr-only">Name</label>
            <input type="text" id="username" class="form-control" name="username" placeholder="Username">
        </div>
        <div class="form-group">
          <label class="sr-only">Password</label>
          <input type="password" id="password" class="form-control password" name="password" placeholder="Password">
        </div>
        <input type="submit" class="btn btn-primary" value="회원가입"/>
      </form>
    </div>
  </div>
