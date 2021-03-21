<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card" style="width: 100%">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Artikel</h3><br>
              </div>
                 <div class="card-body"> 
                    <form method="POST" action="<?php echo base_url('index.php/Data_artikel/tambahDataAksi')?>">
                      
                      <div class="form-group">
                        <label>Judul Artikel</label>
                        <input type="text" name="judul_artikel" class="form-control">
                        <?php echo form_error('judul_artikel','<div class="text-small text-danger"></div>')?>
                      </div>
                      <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" name="gambar" class="form-control">
                        <?php echo form_error('gambar','<div class="text-small text-danger"></div>')?>
                      </div>
                       <div class="form-group">
                        <label>Deskripsi</label>
                        <input type="text" name="deskripsi" class="form-control">
                        <?php echo form_error('deskripsi','<div class="text-small text-danger"></div>')?>
                      </div>
                      <div class="form-group">
                        <label>Tanggal Upload</label>
                        <input type="date" name="tgl_upload" class="form-control">
                        <?php echo form_error('tgl_upload','<div class="text-small text-danger"></div>')?>
                      </div>

                      <button type="submit" class="btn btn-success">Submit</button>
                      <a class="btn btn-danger" href="<?php echo base_url()?>index.php/Data_artikel">Cancel</a>

                    </form> 
                  
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
