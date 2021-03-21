<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card" style="width: 100%">
              <div class="card-header">
                <h3 class="card-title">Update Data Produk Event</h3><br>
              </div>
                 <div class="card-body"> 
                  <?php foreach ($event as $e) : ?>
                    <form method="POST" 
                    action="<?php echo base_url('index.php/Data_p_event/updateDataAksi') ?>">
                      
                      <div class="form-group">
                        <label>Nama Produk event</label>
                        <input type="hidden" name="id_p_event" class="form-control" value="<?php echo $e->id_p_event ?>">
                        <input type="text" name="nama_p_event" class="form-control" value="<?php echo $e->nama_p_event ?>" >
                        <?php echo form_error('nama_p_event','<div class="text-small text-danger"></div>')?>
                      </div>
                      <div class="form-group">
                        <label>Deskripsi Produk event</label>
                        <input type="text" name="deskripsi_p_event" class="form-control" value="<?php echo $e->deskripsi_p_event ?>">
                        <?php echo form_error('deskripsi_p_event','<div class="text-small text-danger"></div>')?>
                      </div>
                       <div class="form-group">
                        <label>Harga Produk</label>
                        <input type="number" name="harga_p_event" class="form-control" value="<?php echo $e->harga_p_event ?>">
                        <?php echo form_error('deskripsi','<div class="text-small text-danger"></div>')?>
                      </div>
                      <div class="form-group">
                        <label>Foto Produk</label>
                        <input type="file" name="foto_p_event" class="form-control" value="<?php echo $e->foto_p_event ?>">
                        <?php echo form_error('foto_p_event','<div class="text-small text-danger"></div>')?>
                      </div>
                      <div class="form-group">
                        <label>Tanggal Upload</label>
                        <input type="date" name="tanggal_upload" class="form-control" value="<?php echo $e->tanggal_upload ?>">
                        <?php echo form_error('tanggal_upload','<div class="text-small text-danger"></div>')?>
                      </div>

                      <button type="submit" class="btn btn-success">Update</button>
                      <a class="btn btn-danger" href="<?php echo base_url()?>index.php/Data_p_event">Cancel</a>

                    </form> 
                  <?php endforeach ; ?>
                
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
