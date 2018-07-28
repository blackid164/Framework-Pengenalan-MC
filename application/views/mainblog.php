<section id="viewblog">
  <div class="container">
    <div class="blog">
      <div class="row mar-bot40">
        
          <div class="title">
            <div class="container">
              <?php foreach($query as $data_row)
                { ?>
                  <div class="col-lg-4 col-sm-6 portfolio-item">
                    <input type="hidden" class="form-control" placeholder="Group ID" name="id_blog">
                      <div class="card h-100">
                        <a href="#"><img style='width:350px;height:250px' class="card-img-top" src="<?php echo base_url().'assets/img/'?><?php echo $data_row->images; ?>" alt=""></a>
                          <div class="card-body">
                            <h3 class="card-title">
                              <?php echo $data_row->judul;?>
                            </h3>
                              <p class="text-justify"><b>Posted on</b> <?php echo $data_row->tgl_posting; ?></p>
                              <p class="card-text">
                              <?php echo $data_row->konten;?>
                              </p>
                          </div>
                      </div>
                  </div>
                <?php 
              } ?>
            </div>
          </div>

      </div>
    </div>
  </div>
</section>