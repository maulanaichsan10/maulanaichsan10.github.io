<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Detail Data Artikel</h3><br>
              </div>

              <div class="card-body"> 
                    <form> 
                    <div class="form-group">
                        <label>Id Artikel : </label>
                        <?php echo $detail->id_artikel ?>
                      </div>
                      <div class="form-group">
                        <label>Judul Artikel : </label>
                        <?php echo $detail->judul_artikel ?>
                      </div>
                      <div class="form-group">
                        <label>Gambar : </label>
                        <img width="200px" src="<?php echo base_url().'assets/uploads/images/'.$detail->gambar ?>">
                      </div>
                       <div class="form-group">
                        <label>Deskripsi : </label>
                        <?php echo $detail->deskripsi ?>
                      </div>
                      <div class="form-group">
                        <label>Tanggal Upload</label>
                        <?php echo $detail->tgl_upload ?>
                      </div>

                      <a class="btn btn-danger" href="<?php echo base_url()?>index.php/Data_artikel">Cancel</a>

                    </form> 
                  
                
              </div>
            <!-- /.card -->
          </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  
