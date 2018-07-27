<div class="container">
      <div class="about">
        <div class="row mar-bot40">
          <div class="col-md-offset-3 col-md-6">
            <div class="title">

                <h2 class="section-heading animated">User</h2>

            </div>
          </div>
        </div>
       </div>
</div>
<div class="container">
	<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <div class="table-responsive">
                <table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th>NAMA USER</th>
                            <th>ALAMAT</th>
                            <th>NO_HP</th>
                            <th>EMAIL</th>
                            <th>AGAMA</th>
                            <th>TYPE USER</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($user as $key): ?>
                        <tr>
                            <td><?php echo $key->nama; ?></td>
                            <td><?php echo $key->alamat; ?></td>
                            <td><?php echo $key->no_hp; ?></td>
                            <td><?php echo $key->email; ?></td>
                            <td><?php echo $key->agama; ?></td>
                            <td><?php echo $key->keterangan; ?></td>
                            <td>
                                <?php
                                    if($key->keterangan != 'admin'){
                                ?>
                                    <a href="<?= base_url() ?>user/update_user/<?php echo $key->id_user ?>" class="btn btn-primary">Edit</a>
                                    <a href="<?= base_url() ?>user/delete_user/<?php echo $key->id_user ?>" class="btn btn-danger">Hapus</a>
                                <?php
                                    }
                                ?>
                            	
							</td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>