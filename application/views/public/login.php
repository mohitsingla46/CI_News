<?php include('public_header.php'); ?>

<div class="container">
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">
			<?= form_open('login/check_login',['class'=>'form-horizontal']); ?>
  			<fieldset>
    			<legend>Login</legend>
    			<div class="form-group">
      				<label for="inputEmail" class="col-lg-2 control-label">Email</label>
      				<div class="col-lg-10">
        				<?= form_input(['name'=>'email','class'=>'form-control','placeholder'=>'Email','value'=>set_value('email')]); ?>
        				<?= form_error('email'); ?>
      				</div>
    			</div>
    			<div class="form-group">
      				<label for="inputPassword" class="col-lg-2 control-label">Password</label>
      				<div class="col-lg-10">
        				<?= form_password(['name'=>'password','class'=>'form-control','placeholder'=>'Password']); ?>
        				<?= form_error('password'); ?>
      				</div>
    			</div>
    			<div class="form-group">
      				<div class="col-lg-10 col-lg-offset-2">
        				<?= form_submit('submitbtn','Login',['class'=>'btn btn-primary']); ?>
      				</div>
    			</div>
  			</fieldset>
			<?= form_close(); ?>
		</div>
		<div class="col-md-2">
		</div>
	</div>
</div>

<?php include('public_footer.php'); ?>