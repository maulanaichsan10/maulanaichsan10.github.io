<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Produk Rumahan</h3><br>
                <!-- <button type="button" href="" class="btn btn-success">
                  <i class="fa fa-plus"> Tambah Produk</i>
                  </button> -->
                    <a class="btn btn-success mb-3" href="<?php echo base_url('index.php/Data_p_rumahan/tambahData')?>"><i class="fas fa-plus"></i>Tambah Data</a>
                 <?php echo $this->session->flashdata('pesan') ?>
                  
              </div>

             <!-- /.card-header -->
              <div class="card-body">
                <table id="tbl_produk_rumahan" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Produk Rumahan</th>
                    <th>Deskripsi Produk</th>
                    <th>Harga</th>
                    <th>Foto Produk</th>
                    <th>Tanggal Upload</th>
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
                  <?php $no=1; foreach($rumahan as $r) :  ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $r->nama_p_rumahan ?></td>
                      <td width="400px"><?php echo $r->deskripsi_p_rumahan ?></td>
                      <td>Rp. <?php echo number_format($r->harga_p_rumahan,0,',',',') ?></td>
                      <td>
                        <img width="60px" src="<?php echo base_url().'assets/uploads/images/'.$r->foto_p_rumahan ?>">
                        </td> 
                      </td>
                      <td><?php echo $r->tanggal_upload ?></td>
                      <td>
                        <a class="btn btn-sm btn-success" href="<?php echo base_url('index.php/Data_p_rumahan/detail/'.$r->id_p_rumahan) ?>"><i class="fas fa-search-plus"></i></a>
                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('index.php/Data_p_rumahan/updateData/'.$r->id_p_rumahan) ?>"><i class="fas fa-edit"></i></a>
                          <a onclick="return confirm('Yakin hapus data ini?')" class="btn btn-sm btn-danger" href="<?php echo base_url('index.php/Data_p_rumahan/deleteData/'.$r->id_p_rumahan) ?>"><i class="fas fa-trash"></i></a>

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
