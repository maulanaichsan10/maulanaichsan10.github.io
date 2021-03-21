<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Kostumer Mendaftar</h3><br>
                <a class="btn btn-success mb-3 float-right" href="<?php echo base_url('index.php/Dashboard')?>"><i class="fas fa-home"></i>Kembali</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="tbl_kostumer" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Jenis Kelamin</th>
                    <th>Email</th>
                    <!-- <th>Kata Sandi</th> -->
                    <th>No.Telepon</th>
                    <th>Foto</th>
                    <th>Alamat</th>
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
                  <?php $no=1; foreach($kostumer as $k) :  ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $k->nama_lengkap ?></td>
                      <td><?php echo $k->jenis_kelamin ?></td>
                      <td><?php echo $k->email ?></td>
                      <!-- <td><?php echo $k->kata_sandi ?></td> -->
                      <td><?php echo $k->nomor_telepon ?></td>
                     <td>
                        <img width="60px" src="<?php echo base_url().'assets/uploads/images/'.$k->foto_kostumer ?>">
                      </td> 
                      <td><?php echo $k->alamat ?></td>
                      <td>
                        <a class="btn btn-sm btn-success" href="<?php echo base_url('index.php/Data_kostumer/detail/'.$k->id_kostumer) ?>"><i class="fas fa-search-plus"></i></a>
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
  
