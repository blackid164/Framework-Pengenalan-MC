<div class="container">
      <div class="about">
        <div class="row mar-bot40">
          <div class="col-md-offset-3 col-md-6">
            <div class="title">

                <h2 class="section-heading animated">Ganti Password</h2>

            </div>
          </div>
        </div>
       </div>
</div>
<div class="container">
	<?php echo form_open_multipart('user/ganti_pass', array('class' => 'needs-validation', 'novalidate' => '')); ?>
	<table class="table table-responsive text-center">
		<tr>
			<td>
				<p>Username</p>
				<input type="text" readonly disabled name="username" style="width: 300px;" value="<?php echo $this->session->userdata('username'); ?>">
			</td>
		</tr>
		<tr>
			<td>
				<p>Password</p>
				<input type="password" required name="password" style="width: 300px;" value="<?php echo set_value('password'); ?>">
			</td>
		</tr>
		<tr class="text-center">
			<td colspan="3"><input type="submit" name="submit" value="Ganti password" class="btn btn-primary"></td>
		</tr>
	</table>
</div>