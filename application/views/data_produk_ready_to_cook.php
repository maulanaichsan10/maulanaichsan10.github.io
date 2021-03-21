<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Produk Ready to Cook</h3><br>
                <!-- <button type="button" href="" class="btn btn-success">
                  <i class="fa fa-plus"> Tambah Produk</i>
                  </button> -->
                    <a class="btn btn-success mb-3" href="<?php echo base_url('index.php/Data_p_ready_to_cook/tambahData')?>"><i class="fas fa-plus"></i>Tambah Data</a>
                 <?php echo $this->session->flashdata('pesan') ?>
                  
              </div>

             <!-- /.card-header -->
              <div class="card-body">
                <table id="tbl_produk_ready_to_cook" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Produk Ready to Cook</th>
                    <th>Deskripsi Produk</th>
                    <th>Harga</th>
                    <th>Foto Produk</th>
                    <th>Tanggal Upload</th>
                    <th width="150px">Aksi</th>
                    <!-- <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                    <th>Aksi</th> -->
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no=1; foreach($readycook as $rc) :  ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $rc->nama_p_ready_to_cook ?></td>
                      <td width="400px"><?php echo $rc->deskripsi_p_ready_to_cook ?></td>
                      <td>Rp. <?php echo number_format($rc->harga_p_ready_to_cook,0,',',',') ?></td>
                      <td>
                        <img width="60px" src="<?php echo base_url().'assets/uploads/images/'.$rc->foto_p_ready_to_cook ?>">
                        </td> 
                      </td>
                      <td><?php echo $rc->tanggal_upload ?></td>
                      <td>
                        <a class="btn btn-sm btn-success" href="<?php echo base_url('index.php/Data_p_ready_to_cook/detail/'.$rc->id_p_ready_to_cook) ?>"><i class="fas fa-search-plus"></i></a>
                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('index.php/Data_p_ready_to_cook/updateData/'.$rc->id_p_ready_to_cook) ?>"><i class="fas fa-edit"></i></a>
                          <a onclick="return confirm('Yakin hapus data ini?')" class="btn btn-sm btn-danger" href="<?php echo base_url('index.php/Data_p_ready_to_cook/deleteData/'.$rc->id_p_ready_to_cook) ?>"><i class="fas fa-trash"></i></a>

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
