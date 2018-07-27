<div>
	<h3 class="text-primary text-center">Login</h3>
</div>
<br>
<div class="container ">
	<?php echo validation_errors(); ?>
	<?php echo form_open_multipart('login/login', array('class' => 'needs-validation', 'novalidate' => '')); ?>
	<table class="table table-responsive text-center">
		<tr>
			<td>
				<p>Username</p>
				<input type="text" name="username" style="width: 300px;" value="<?php echo set_value('username'); ?>">
			</td>
		</tr>
		<tr>
			<td>
				<p>Password</p>
				<input type="password" name="password" style="width: 300px;" value="<?php echo set_value('password'); ?>">
			</td>
		</tr>
		<tr class="text-center">
			<td colspan="3"><input type="submit" name="submit" value="Sign In" class="btn btn-primary"></td>
		</tr>
	</table>
</div>
<div class="container text-center">
	<p>
		Anyar bro?
		<a href="registrasi">Daftar sek kene!</a>
	</p>
</div>