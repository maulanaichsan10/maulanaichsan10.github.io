
<!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Beranda</h1>
      </div>
    </div>
          <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $checkout ?></h3>

                <p>Transaksi</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?=base_url()?>index.php/Data_checkout" class="small-box-footer">Info Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>0</h3>

                <p>Pesanan</p>
              </div>
              <div class="icon">
                <i class="fa fa-book"></i>
              </div>
              <a href="" class="small-box-footer">Info Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3><?php echo $kostumer ?></h3>

                <p>Kostumer Mendaftar</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
              <a href="<?=base_url()?>index.php/Data_kostumer" class="small-box-footer">Info Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $artikel?></h3>

                <p>Artikel</p>
              </div>
              <div class="icon">
                <i class="fa fa-newspaper"></i>
              </div>
              <a href="<?=base_url()?>index.php/Data_artikel" class="small-box-footer">Info Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
         <!--grafik-->
        <div class="row">
          <!-- /.col-md-6 -->
          <div class="col-12">

     <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
             <!-- BAR CHART -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Grafik Checkout Per Dua Bulan</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <!-- <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button> -->
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->  
          </div>
        </div>
        <!-- /.row -->

      <!-- Pie CHART -->
    <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Grafik Menu Paling Suka per 2 Bulan</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <!-- <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button> -->
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="menupalingsuka" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

        <!-- Pie CHART -->
    <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Grafik Kostumer Mendaftar berdasarkan Jenis Kelamin</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <!-- <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button> -->
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <a class="btn btn-success" href="<?php echo base_url()?>index.php/dashboard/print_grafik"><i class="fa fa-print"></i> Cetak</a>
                  <canvas id="kostumer" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

    <!-- /.content -->        
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

    


      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->