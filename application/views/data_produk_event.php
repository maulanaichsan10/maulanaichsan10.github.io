<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Produk Event</h3><br>
                <!-- <button type="button" href="" class="btn btn-success">
                  <i class="fa fa-plus"> Tambah Produk</i>
                  </button> -->
                 <a class="btn btn-success mb-3" href="<?php echo base_url('index.php/Data_p_event/tambahData')?>"><i class="fas fa-plus"></i>Tambah Data</a>
                 <?php echo $this->session->flashdata('pesan') ?>
              </div>
             <!-- /.card-header -->
              <div class="card-body">
                <table id="tbl_produk_event" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th width="200px">Nama Produk Event</th>
                    <th>Deskripsi Produk</th>
                    <th>Harga</th>
                    <th width="150px">Foto Produk</th>
                    <th width="150px">Tanggal Upload</th>
                    <th width="200px">Aksi</th>
                    <!-- <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                    <th>Aksi</th> -->
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                    $no=1; foreach((array)$event as $e) :  ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $e->nama_p_event ?></td>
                      <td width="400px"><?php echo $e->deskripsi_p_event ?></td>
                      <td width="100px">Rp. <?php echo number_format($e->harga_p_event,0,',',',') ?></td>
                      <td>
                        <img width="60px" src="<?php echo base_url().'assets/uploads/images/'
                        .$e->foto_p_event ?>">
                        </td> 
                      </td>
                      <td><?php echo $e->tanggal_upload ?></td>
                      <td>
                        <a class="btn btn-sm btn-success" href="<?php echo base_url('index.php/Data_p_event/detail/'.$e->id_p_event) ?>"><i class="fas fa-search-plus"></i></a>
                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('index.php/Data_p_event/updateData/'.$e->id_p_event) ?>"><i class="fas fa-edit"></i></a>
                          <a onclick="return confirm('Yakin hapus data ini?')" class="btn btn-sm btn-danger" href="<?php echo base_url('index.php/Data_p_event/deleteData/'.$e->id_p_event) ?>"><i class="fas fa-trash"></i></a>


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
  
