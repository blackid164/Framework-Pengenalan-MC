<div class="container">
      <div class="about">
        <div class="row mar-bot40">
          <div class="col-md-offset-3 col-md-6">
            <div class="title">

                <h2 class="section-heading animated">Tambah Blog</h2>

            </div>
          </div>
        </div>
       </div>
</div>

<div class="container">
	<?php echo validation_errors(); ?>
	<?php echo form_open_multipart('blog/tambah', array('class' => 'needs-validation', 'novalidate' => '')); ?>
	<table class="table table-responsive">
		<tr>
			<td>Judul</td>
			<td>:</td>
			<td><input type="text" class="form-control" name="input_judul" style="width: 500px;" value="<?php echo set_value('input_judul'); ?>"></td>
		</tr>
		<tr>
			<td>Content</td>
			<td>:</td>
			<td><textarea name="input_content" style="height: 300px; width: 800px;"><?php echo set_value('input_content'); ?></textarea></td>
		</tr>
		<tr>
			<label>Kategori</label>
				<select name="cat_id" class="form-control" required>
					<option value="">Pilih Kategori</option>
					<?php foreach($categories as $category): ?>
					<option value="<?php echo $category->id; ?>"><?php echo $category->cat_name; ?></option>
					<?php endforeach; ?>
				</select>
		</tr>
		<tr>
			<td>Author</td>
			<td>:</td>
			<td><input type="text" name="input_author" style="width: 500px;" value="<?php echo set_value('input_author'); ?>"></td>
		</tr>
		<tr>
			<td>Email Author</td>
			<td>:</td>
			<td><input type="text" name="input_email" style="width: 500px;" value="<?php echo set_value('input_email'); ?>"></td>
		</tr>
		<tr>
			<td>No Telp Author</td>
			<td>:</td>
			<td><input type="text" name="input_notelp" style="width: 500px;" value="<?php echo set_value('input_notelp'); ?>"></td>
		</tr>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td><input type="text" name="input_username" style="width: 500px;" value="<?php echo set_value('input_username'); ?>"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="password" name="input_password" style="width: 500px;" value="<?php echo set_value('input_password'); ?>"></td>
		</tr>
		<tr>
			<td>Password Konfirmasi</td>
			<td>:</td>
			<td><input type="password" name="input_passconf" style="width: 500px;" value=""></td>
		</tr>
		<tr>
			<td>Gambar</td>
			<td>:</td>
			<td><input type="file" name="input_gambar"></td>
		</tr>
		<tr class="text-center">
			<td colspan="3"><input type="submit" name="submit" value="simpan" class="btn btn-primary"></td>
		</tr>
	</table>
</div>