<div>
	<h4 class="text-primary text-center">Registration</h4>
</div>
<div class="container">
	<?php echo validation_errors(); ?>
	<?php echo form_open_multipart('registrasi/insert', array('class' => 'needs-validation', 'novalidate' => '')); ?>
	<table class="table table-responsive">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" class="form-control" name="nama" style="width: 500px;" value="<?php echo set_value('nama'); ?>"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><textarea name="alamat" style="height: 100px; width: 500px;"><?php echo set_value('alamat'); ?></textarea></td>
		</tr>
		<tr>
			<td>Agama</td>
			<td>:</td>
			<td>
				<select name="agama" class="" required>
					<option value="islam">islam</option>
					<option value="hindu">hindu</option>
					<option value="katolik">katolik</option>
					<option value="kristen">kristen</option>
					<option value="budha">budha</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><input type="text" name="email" style="width: 500px;" value="<?php echo set_value('email'); ?>"></td>
		</tr>
		<tr>
			<td>No Telp</td>
			<td>:</td>
			<td><input type="text" name="no_telp" style="width: 500px;" value="<?php echo set_value('no_telp'); ?>"></td>
		</tr>
		<tr>
			<td>Tipe user</td>
			<td>:</td>
			<td>
				<input type="radio" name="typeuser" value="2">Non Premium
				<input type="radio" name="typeuser" value="3">Premium
			</td>
		</tr>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td><input type="text" name="username" style="width: 500px;" value="<?php echo set_value('username'); ?>"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="password" name="password" style="width: 500px;" value="<?php echo set_value('password'); ?>"></td>
		</tr>
		<tr>
			<td>Password Konfirmasi</td>
			<td>:</td>
			<td><input type="password" name="passconf" style="width: 500px;" value=""></td>
		</tr>
		<tr class="text-center">
			<td colspan="3"><input type="submit" name="submit" value="Register" class="btn btn-primary"></td>
		</tr>
	</table>
</div>
<div class="container text-center">
	<p>
		<a href="login">Kembali Ke Halaman Login</a>
	</p>
</div>