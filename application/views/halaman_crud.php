<section id="viewcrud">
  <div class="container">
    <div class="crud">
      <div class="row mar-bot40">

          <div class="title">
            <div class="container">
              <h3><span class="fa fa-star"></span>  Data Artikel <span class="fa fa-star"></span></h3>          
              <a style=" margin-bottom:20px" href="crud/tambah" class="btn btn-info col-md-2 test"><span class="fa fa-plus"> Tambah Artikel</span></a>    
              <br/>
              <br/>
            </div>
          </div>

      </div> 
      
        <table class="table table-hover" >
          <tr align="justify">
            <th class="col-md-0">Nomor</th>
            <th class="col-md-0">Id Artikel</th>
            <th class="col-md-0">Judul</th>
            <th class="col-md-0">Konten/Deskripsi</th>
            <th class="col-md-0">Gambar</th>
            <th class="col-md-0">Tanggal Posting</th>
            <th class="col-md-0">Pilihan</th>
          </tr>
          <?php 
            $no=1;
            foreach($query as $b)
            {
          ?>
          <tr align="justify">
            <td><?php echo $no++ ?></td>
            <td><?php echo $b->id_blog; ?></td>
            <td><?php echo $b->judul; ?></td>
            <td><?php echo substr($b->konten, 0, 20) . '...'; ?></td>
            <td><img style='width:100px;height:150px' src="<?php echo base_url().'assets/image/'?><?php echo $b->images; ?>"></td>
            <td><?php echo $b->tgl_posting; ?></td>
            <td>
            <a href="crud/edit/<?php echo $b->id_blog; ?>"  class="btn btn-primary">
              <span class="fa fa-edit">  Edit</span>
            </a>
            <a href="<?php echo base_url()."index.php/crud/hapus/".$b->id_blog ?> " onClick="return confirm('Apakah anda yakin ingin menghapus konten ini?')"  class="btn btn-danger">
              <span class="fa fa-trash">  Hapus</span>
            </a>
            </td>
          </tr>   
          <?php 
            }
          ?>
        </table>
    </div>
  </div>
</section>