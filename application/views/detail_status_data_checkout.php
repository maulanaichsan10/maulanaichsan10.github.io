<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Detail Data Transaksi</h3><br>
              </div>

              <div class="card-body"> 
                    <form> 
                    <div class="form-group">
                        <label>Id Checkout : </label>
                        <?php echo $detail->id_checkout ?>
                      </div>
                      <div class="form-group">
                        <label>No Pembayaran : </label>
                        <?php echo $detail->no_pembayaran ?>
                      </div>
                       <div class="form-group">
                        <label>Id Kostumer : </label>
                        <?php echo $detail->id_kostumer ?>
                      </div>
                      <div class="form-group">
                        <label>Id Menu : </label>
                        <?php echo $detail->id_menu ?>
                      </div>
                      <div class="form-group">
                        <label>Alamat Tujuan : </label>
                        <?php echo $detail->alamat_tujuan ?>
                      </div>
                      <div class="form-group">
                        <label>Tanggal Order : </label>
                        <?php echo $detail->tanggal_order ?>
                      </div>
                      <div class="form-group">
                        <label>Total : </label>
                        <?php echo $detail->total ?>
                      </div>
                      <div class="form-group">
                        <label>Status : </label>
                        <?php echo $detail->status ?>
                      </div>

                      <a class="btn btn-danger" href="<?php echo base_url()?>index.php/Data_checkout">Cancel</a>

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
  
