<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Transaksi</h3><br>
                <!-- <button type="button" href="" class="btn btn-success">
                  <i class="fa fa-plus"> Tambah Produk</i>
                  </button> -->
                  <a class="btn btn-success mb-3 float-right" href="<?php echo base_url('index.php/Dashboard')?>"><i class="fas fa-home"></i>Kembali</a>
                  
              </div>

             <!-- /.card-header -->
              <div class="card-body">
                <table id="tbl_checkout" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>No Pembayaran</th>
                    <th>Id Kostumer</th>
                    <th>Id Menu</th>
                    <th>Alamat Tujuan</th>
                    <th>Tanggal Order</th>
                    <th>Batas Pembayaran</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th width="100px">Aksi</th>
                    
                    <!-- <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                    <th>Aksi</th> -->
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no=1; foreach($checkout as $c) :  ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $c->no_pembayaran ?></td>
                      <td width="100px"><?php echo $c->id_kostumer ?></td>
                      <td><?php echo $c->id_menu ?></td>
                      <td><?php echo $c->alamat_tujuan ?></td>
                      <td><?php echo $c->tanggal_order ?></td>
                      <td><?php echo $c->batas_bayar ?></td>
                      <td><?php echo $c->total ?></td>
                      <td>
                      <?php
                      if ($c->status =="Menunggu Pembayaran"){
                        echo "<span class='badge badge-warning'>Menunggu Pembayaran</span>"
                      ;}
                      if($c->status =="Pesanan Diproses"){
                        echo "<span class='badge badge-primary'>Pesanan Diproses</span>"
                      ;}
                      if($c->status =="Pesanan Dikirim"){
                        echo "<span class='badge badge-secondary'>Pesanan Dikirim</span>"
                      ;}
                      if($c->status =="Selesai"){
                        echo "<span class='badge badge-success'>Selesai</span>"
                      ;}
                      ?>
                    </td>
                      <td>
                        <a class="btn btn-sm btn-success" href="<?php echo base_url('index.php/Data_checkout/detail/'.$c->id_checkout) ?>"><i class="fas fa-search-plus"></i></a>
                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('index.php/Data_checkout/updateData/'.$c->id_checkout) ?>"><i class="fas fa-edit"></i></a>

                      </td>
                      
                    </tr>
                  <?php endforeach; ?>
                  </tbody>
                </table>
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
