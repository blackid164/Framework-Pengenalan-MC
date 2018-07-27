<div class="container">
      <div class="about">
        <div class="row mar-bot40">
          <div class="col-md-offset-3 col-md-6">
            <div class="title">

                <h2 class="section-heading animated">Data Tabel Blog</h2>

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
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Tanggal Post</th>
                            <th>Author</th>
                            <th>Email Author</th>
                            <th>Notelp</th>
                            <th>Username</th>
                            <th>Password</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($blog as $key): ?>
                        <tr>
                            <td><?php echo $key->judul; ?></td>
                            <td><?php echo $key->cat_name; ?></td>
                            <td><?php echo $key->tanggal_post; ?></td>
                            <td><?php echo $key->author; ?></td>
                            <td><?php echo $key->email_author; ?></td>
                            <td><?php echo $key->no_telp; ?></td>
                            <td><?php echo $key->username; ?></td>
                            <td><?php echo $key->password; ?></td>
                        </tr>
                    <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>