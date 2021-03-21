<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card" style="width: 100%">
              <div class="card-header">
                <h3 class="card-title">Update Data Artikel</h3><br>
              </div>
                 <div class="card-body"> 
                  <?php foreach ($artikel as $a) : ?>
                    <form method="POST" 
                    action="<?php echo base_url('index.php/Data_artikel/updateDataAksi') ?>">
                      
                      <div class="form-group">
                        <label>Id Artikel</label>
                        <input type="hidden" name="id_artikel" class="form-control" value="<?php echo $a->id_artikel ?>">
                        <input type="text" name="id_artikel" class="form-control" value="<?php echo $a->id_artikel ?> " disabled>
                        <?php echo form_error('id_artikel','<div class="text-small text-danger"></div>')?>
                      </div>
                      <div class="form-group">
                        <label>Judul Artikel</label>
                        <input type="hidden" name="id_artikel" class="form-control" value="<?php echo $a->id_artikel ?>">
                        <input type="text" name="judul_artikel" class="form-control" value="<?php echo $a->judul_artikel ?>">
                        <?php echo form_error('judul_artikel','<div class="text-small text-danger"></div>')?>
                      </div>
                      <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" name="gambar" class="form-control-file"><br>
                        <img width="200px" src="<?php echo base_url().'assets/uploads/images/'.$a->gambar ?>">
                        <?php echo form_error('gambar','<div class="text-small text-danger"></div>')?>
                      </div>
                       <div class="form-group">
                        <label>Deskripsi</label>
                        <input type="text" name="deskripsi" class="form-control" value="<?php echo $a->deskripsi ?>">
                        <?php echo form_error('deskripsi','<div class="text-small text-danger"></div>')?>
                      </div>
                      <div class="form-group">
                        <label>Tanggal Upload</label>
                        <input type="date" name="tgl_upload" class="form-control" value="<?php echo $a->tgl_upload ?>">
                        <?php echo form_error('tgl_upload','<div class="text-small text-danger"></div>')?>
                      </div>

                      <button type="submit" class="btn btn-success">Update</button>
                      <a class="btn btn-danger" href="<?php echo base_url()?>index.php/Data_artikel">Cancel</a>

                    </form> 
                  <?php endforeach; ?>
                
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
