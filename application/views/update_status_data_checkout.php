<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card" style="width: 100%">
              <div class="card-header">
                <h3 class="card-title">Update Status Data Transaksi</h3><br>
              </div>
                 <div class="card-body"> 
                  <?php foreach ($checkout as $c) : ?>
                    <form method="POST" 
                    action="<?php echo base_url('index.php/Data_checkout/updateDataAksi') ?>">
                      
                      <div class="form-group">
                        <label>No Pembayaran</label>
                        <input type="hidden" name="id_checkout" class="form-control" value="<?php echo $c->id_checkout ?>" >
                        <input type="text" name="no_pembayaran" class="form-control" value="<?php echo $c->no_pembayaran ?>" >
                      </div>
                      <div class="form-group">
                        <label>Id Kostumer</label>
                        <input type="text" name="id_kostumer" class="form-control" value="<?php echo $c->id_kostumer ?>" >
                      </div>
                      <div class="form-group">
                        <label>Id Menu</label>
                        <input type="text" name="id_menu" class="form-control" value="<?php echo $c->id_menu ?>" >
                      </div>
                       <div class="form-group">
                        <label>Alamat Tujuan</label>
                        <input type="text" name="alamat_tujuan" class="form-control" value="<?php echo $c->alamat_tujuan ?>" >
                      </div>
                      <div class="form-group">
                        <label>Tanggal Order</label>
                        <input type="date" name="tanggal_order" class="form-control" value="<?php echo $c->tanggal_order ?>" >
                      </div>
                      <div class="form-group">
                        <label>Total</label>
                        <input type="number" name="total" class="form-control" value="<?php echo $c->total ?>" >
                      </div>
                      <div class="form-group">
                        <label>Status</label>
                        <label for="status">Pilih status:</label>
                        <select name="status" class="form-control">
                            <option <?php if($c->status == "Menunggu Pembayaran"){echo "
                                selected='selected'";}
                                echo $c->status; ?> value="Menunggu Pembayaran">Menunggu Pembayaran
                            </option>
                            <option <?php if($c->status == "Pesanan Diproses"){echo "
                                selected='selected'";}
                                echo $c->status; ?> value="Pesanan Diproses">Pesanan Diproses
                            </option>
                            <option <?php if($c->status == "Pesanan Dikirim"){echo "
                                selected='selected'";}
                                echo $c->status; ?> value="Pesanan Dikirim">Pesanan Dikirim
                            </option>
                            <option <?php if($c->status == "Selesai"){echo "
                                selected='selected'";}
                                echo $c->status; ?> value="Selesai">Selesai
                            </option>
                        </select>
                      </div>

                      <button type="submit" class="btn btn-success">Update</button>
                      <a class="btn btn-danger" href="<?php echo base_url()?>index.php/Data_checkout">Cancel</a>

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
