<!-- META -->
<?php $this->load->view('backend/template/meta'); ?>
<div class="wrapper">

  <!-- Sidebar -->
  <?php $this->load->view('backend/template/sidebar'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?= $page_title ?></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                  <div class="inner">
                    <h3><?= $hama->total ?></h3>
                    <p>Hama</p>
                  </div>
                  <div class="icon">
                    <i class="nav-icon fas fa-bug"></i>
                  </div>
                  <a href="<?= base_url('admin/Penyakit') ?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                  <div class="inner">
                    <h3><?= $penyakit->total ?></h3>
                    <p>Penyakit</p>
                  </div>
                  <div class="icon">
                    <i class="nav-icon fas fa-skull-crossbones"></i>
                  </div>
                  <a href="<?= base_url('admin/Penyakit') ?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                  <div class="inner">
                    <h3><?= $gejala->total ?></h3>
                    <p>Gejala</p>
                  </div>
                  <div class="icon">
                    <i class=" nav-icon fas fa-book"></i>
                  </div>
                  <a href="<?= base_url('admin/Gejala') ?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                  <div class="inner">
                    <h3><?= $pengetahuan->total ?></h3>
                    <p>Basis Pengetahuan</p>
                  </div>
                  <div class="icon">
                    <i class=" nav-icon fas fa-book"></i>
                  </div>
                  <a href="<?= base_url('admin/Pengetahuan') ?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- FOOTER -->
  <?php $this->load->view('backend/template/footer'); ?>

</div>

<!-- JS -->
<?php $this->load->view('backend/template/js'); ?>

</body>

</html>