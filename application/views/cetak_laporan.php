<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 style="text-align: center"> Laporan Transaksi Web Kulzein</h3>
                <table>
               <tr>
                  <td>Dari Tanggal</td>
                  <td>:</td>
                  <td><?php echo date('d-m-Y',strtotime($_GET['dari'])); ?></td>
               </tr>
                <tr>
                    <td>Sampai Tanggal</td>
                    <td>:</td>
                    <td><?php echo date('d-m-Y',strtotime($_GET['sampai'])); ?></td>
               </tr>
            </table>
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
                        <a class="btn btn-sm btn-success" href="<?php echo base_url('index.php/Data_transaksi/detail/'.$l->id_transaksi) ?>"><i class="fas fa-search-plus"></i></a>
                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('index.php/Data_transaksi/updateData/'.$l->id_transaksi) ?>"><i class="fas fa-edit"></i></a>

                      </td> -->
                     
                    </tr>
                  <?php endforeach; ?>
                  </tbody>
                </table><!-- <hr>
                 <td>
                        <a class = "btn btn-sm btn-danger" href="<?=base_url()?>index.php/laporan"><i class="fas fa-arrow-left">Kembali</i></a>
                  </td> -->
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

  <script type="text/javascript">
  window.print();
</script>

  
