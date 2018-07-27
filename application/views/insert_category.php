<div class="container">
      <div class="about">
        <div class="row mar-bot40">
          <div class="col-md-offset-3 col-md-6">
            <div class="title">

                <h2 class="section-heading animated">Tambah Kategori</h2>

            </div>
          </div>
        </div>
       </div>
</div>
<div class="container">
	<?php echo validation_errors(); ?>
	<?php echo form_open_multipart('category/tambah', array('class' => 'needs-validation', 'novalidate' => '')); ?>
	<table class="table table-responsive">
		<tr>
			<td>Nama Category</td>
			<td>:</td>
			<td><input type="text" class="form-control" name="nama" style="width: 500px;" value="<?php echo set_value('nama'); ?>"></td>
		</tr>
		<tr>
			<td>Deskripsi</td>
			<td>:</td>
			<td><textarea name="deskripsi" style="height: 300px; width: 800px;"><?php echo set_value('deskripsi'); ?></textarea></td>
		</tr>
		<tr class="text-center">
			<td colspan="3"><input type="submit" name="simpan" value="simpan" class="btn btn-primary"></td>
		</tr>
	</table>
</div>