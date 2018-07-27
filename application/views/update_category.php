<div class="container">
      <div class="about">
        <div class="row mar-bot40">
          <div class="col-md-offset-3 col-md-6">
            <div class="title">

                <h2 class="section-heading animated">Update Kategori</h2>

            </div>
          </div>
        </div>
       </div>
</div>
<div class="container">
	<?php foreach ($detail as $key): ?>
	<?php echo validation_errors(); ?>
	<?php echo form_open_multipart('category/update_category/'.$key->id, array('class' => 'needs-validation', 'novalidate' => '')); ?>
	<table class="table table-responsive">
		<tr>
			<td>Nama Category</td>
			<td>:</td>
			<td><input type="text" class="form-control" name="nama" style="width: 500px;" value="<?php echo $key->cat_name; ?>"></td>
		</tr>
		<tr>
			<td>Deskripsi</td>
			<td>:</td>
			<td><textarea name="deskripsi" style="height: 300px; width: 800px;"><?php echo $key->cat_description; ?></textarea></td>
		</tr>
		<tr class="text-center">
			<td colspan="3"><input type="submit" name="update" value="edit" class="btn btn-primary"></td>
		</tr>
	</table>

<?php endforeach ?>
</div>