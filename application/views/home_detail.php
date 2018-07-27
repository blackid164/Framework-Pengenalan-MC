<div class="container">
      <div class="about">
        <div class="row mar-bot40">
          <div class="col-md-offset-3 col-md-6">
            <div class="title">

                <h2 class="section-heading animated">Detail Blog</h2>

            </div>
          </div>
        </div>
       </div>
</div>
<?php foreach ($detail as $key): ?>
<div class="container">
  <h4>Kategori : <?php echo $key->cat_name; ?></h4>
  <table>
    <tr class="text-right">
      <td> Diposting pada tanggal <?php echo $key->tanggal_post; ?></td>
    </tr>
    <tr class="text-center">
      <td>
        <h3><b><?php echo $key->judul; ?></b><h3>
        </td>
    </tr>
    <tr>
      <td class="text-center">
        <img src="../../upload/<?php echo $key->image;?>" alt="Image" width="500" height="400">
      </td>
    </tr>
    <tr>
      <td class="text-justify">
        <?php echo $key->content; ?>
      </td>
    </tr>
  </table>
</div>
<?php endforeach ?>