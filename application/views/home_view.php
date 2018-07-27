<div class="container">
      <div class="about">
        <div class="row mar-bot40">
          <div class="col-md-offset-3 col-md-6">
            <div class="title">

                <h2 class="section-heading animated">Cuplikan Blog</h2>

            </div>
          </div>
        </div>
       </div>
</div>
<div class="container">
	<?php if ($level): ?>
		<a href="<?php echo base_url() ?>blog/tambah" class="btn btn-primary">Tambah</a>
		<a href="<?php echo base_url() ?>category" class="btn btn-primary">Kategori</a>
		<a href="<?php echo base_url() ?>blog/blog_kolom" class="btn btn-primary">Data Blog</a>
		<a href="<?php echo base_url() ?>user" class="btn btn-primary">User</a>
	<?php endif ?>
</div>
<br>
<div class="container text-center">
	<?php foreach ($artikel as $key): ?>
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
			<table style="margin-bottom: 30px;">
				<tr>
					<td>
						<a href="<?php echo base_url() ?>blog/detail/<?php echo $key->id ?>" style="color: black;">
							<img src="<?php echo base_url() ?>upload/<?php echo $key->image;?>" alt="Image" width="300" height="200">
							<br>
							<?php echo $key->judul ?>
						</a>
						<br>
						<?php if ($level): ?>
							<a href="<?php echo base_url() ?>blog/update/<?php echo $key->id ?>" class="btn btn-primary">Edit</a>
							<a href="<?php echo base_url() ?>blog/delete/<?php echo $key->id ?>" class="btn btn-danger">Hapus</a>
						<?php endif ?>
					</td>
				</tr>
			</table>
		</div>
	<?php endforeach ?>
</div>
<div class="text-center">
	<?php
	if (isset($links)) {
		echo $links;
	}
?>
</div>