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
                </form><hr>

                <div class="btn-group">
                  <a class="btn btn-sm btn-success" target="_blank" href="<?php echo base_url().'index.php/laporan/print_laporan/?dari='.set_value('dari').'&sampai='.set_value('sampai') ?>"><i class="fas fa-print"></i> Cetak</a>
                  
                </div>

                           <!-- /.card-header -->
              <div class="card-body">
                <table id="tbl_laporan_transaksi" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>No Pembayaran</th>
                    <th>Id Kostumer</th>
                    <th>Id Menu</th>
                    <th>Alamat Tujuan</th>
                    <th>Tanggal Order</th>
                    <th>Total</th>
                    <th>Status</th>
                    <!-- <th width="100px">Aksi</th> -->
                    <!-- <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                    <th>Aksi</th> -->
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no=1; foreach($laporan as $l) :  ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $l->no_pembayaran ?></td>
                      <td width="100px"><?php echo $l->id_kostumer ?></td>
                      <td><?php echo $l->id_menu ?></td> 
                      <td><?php echo $l->alamat_tujuan ?></td>
                      <td><?php echo $l->tanggal_order ?></td>
                      <td><?php echo $l->total ?></td>
                      <td><?php echo $l->status ?></td>
                      <!-- <td>
                        <a class="btn btn-sm btn-success" href="<?php echo base_url('index.php/Data_transaksi/detail/'.$l->id_checkout) ?>"><i class="fas fa-search-plus"></i></a>
                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('index.php/Data_transaksi/updateData/'.$l->id_checkout) ?>"><i class="fas fa-edit"></i></a>

                      </td> -->
                    </tr>
                  <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
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

  
