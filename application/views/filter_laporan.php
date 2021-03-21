<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Filter Laporan</h3><br>
              </div>
               <div class="card-body"> 
                <form method="POST" action="<?php echo base_url('index.php/laporan')?>">
                  <div class="form-group">
                    <label>Dari Tanggal</label>
                    <input type="date" name="dari" class="form-control">
                    <?php echo form_error('dari','<span class="text-small text-danger">','</span>')?>
                  </div>
                  <div class="form-group">
                    <label>Sampai Tanggal</label>
                    <input type="date" name="sampai" class="form-control">
                    <?php echo form_error('sampai','<span class="text-small text-danger">','</span>')?>
                  </div>
                    <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i>Tampilkan Data</button>
                </form>
                   
              </div>
          </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </section>

  
