<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Detail Data Kostumer</h3><br>
              </div>
               <div class="card-body"> 
                    <form> 
                      <div class="form-group">
                        <label>Nama Lengkap : </label>
                        <?php echo $detail->nama_lengkap ?>
                      </div>
                      <div class="form-group">
                        <label>Jenis Kelamin : </label>
                        <?php echo $detail->jenis_kelamin ?>
                      </div>
                      <div class="form-group">
                        <label>Email : </label>
                        <?php echo $detail->email ?>
                      </div>
                       <div class="form-group">
                        <label>Kata Sandi : </label>
                        <?php echo $detail->kata_sandi ?>
                      </div>
                      <div class="form-group">
                        <label>Nomor Telepon : </label>
                        <?php echo $detail->nomor_telepon ?>
                      </div>
                      <div class="form-group">
                        <label>Foto Kostumer : </label>
                        <img width="60px" src="<?php echo base_url().'assets/uploads/images/'.$detail->foto_kostumer ?>">
                      </div>
                      <div class="form-group">
                        <label>Alamat : </label>
                        <?php echo $detail->alamat ?>
                      </div>

                      <a class="btn btn-danger" href="<?php echo base_url()?>index.php/Data_kostumer">Cancel</a>

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
  
