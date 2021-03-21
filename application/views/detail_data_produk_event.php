<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Detail Data Produk Event</h3><br>
              </div>
               <div class="card-body"> 
                    <form> 
                      <div class="form-group">
                        <label>Nama Produk Event : </label>
                        <?php echo $detail->nama_p_event ?>
                      </div>
                      <div class="form-group">
                        <label>Deskripsi : </label>
                        <?php echo $detail->deskripsi_p_event ?>
                      </div>
                       <div class="form-group">
                        <label>Harga : </label>
                        <?php echo $detail->harga_p_event ?>
                      </div>
                      <div class="form-group">
                        <label>Foto Produk Event : </label>
                        <img width="200px" src="<?php echo base_url().'assets/uploads/images/'.$detail->foto_p_event ?>">
                      </div>
                      <div class="form-group">
                        <label>Tanggal Upload : </label>
                        <?php echo $detail->tanggal_upload ?>
                      </div>

                      <a class="btn btn-danger" href="<?php echo base_url()?>index.php/Data_p_event">Cancel</a>

                    </form>  
              </div>
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
  
