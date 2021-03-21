<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Artikel</h3><br>
                <!-- <button type="button" href="" class="btn btn-success">
                  <i class="fa fa-plus"> Tambah Produk</i>
                  </button> -->
                  <a class="btn btn-success mb-3 float-right" href="<?php echo base_url('index.php/Dashboard')?>"><i class="fas fa-home"></i>Kembali</a>
                  <a class="btn btn-success mb-3" href="<?php echo base_url('index.php/Data_artikel/tambahData')?>"><i class="fas fa-plus"></i>Tambah Data</a>
                 <!-- <a class="btn btn-success mb-3" href="<?php echo base_url('index.php/Data_artikel/tambahData')?>"><i class="fas fa-plus"></i>Tambah Data</a> -->
                 <?php echo $this->session->flashdata('pesan') ?>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <!-- <button type="button">Tambah</button> <br> -->
                <table id="tbl_artikel" class="table table-bordered table-striped">
                    <thead>
                  <tr>
                    <th>No</th>
                    <th>Judul Artikel</th>
                    <th>Gambar</th>
                    <th>Deskripsi</th>
                    <th>Tanggal Upload</th>
                    <th>Aksi</th>
                    <!-- <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                    <th>Aksi</th> -->
                  </tr>
                   </thead>
                   <tbody>
                  <?php $no=1; foreach($artikel as $a) :  ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td width="200px"><?php echo $a->judul_artikel ?></td>
                      <td>
                        <img width="70px" src="<?php echo base_url().'assets/uploads/images/'.$a->gambar?>">
                        </td> 
                      <td width="500px"><?php echo $a->deskripsi ?></td>
                      <td><?php echo $a->tgl_upload ?></td>
                      <td width="150px">
                           <a class="btn btn-sm btn-success" href="<?php echo base_url('index.php/Data_artikel/detail/'.$a->id_artikel) ?>"><i class="fas fa-search-plus"></i></a>
                   
                     
                          <a class="btn btn-sm btn-primary" href="<?php echo base_url('index.php/Data_artikel/updateData/'.$a->id_artikel) ?>"><i class="fas fa-edit"></i></a>
                      
                          <a onclick="return confirm('Yakin hapus data ini?')" class="btn btn-sm btn-danger" href="<?php echo base_url('index.php/Data_artikel/deleteData/'.$a->id_artikel) ?>"><i class="fas fa-trash"></i></a>
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
  
