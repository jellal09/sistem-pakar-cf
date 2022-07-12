<?php $this->load->view('frontend/template/meta'); ?>
<div class="wrapper">

  <?php $this->load->view('frontend/template/navbar'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <!-- /.col-md-6 -->
          <div class="col-md-12">


            <div class="text-center">
              <img src="<?= base_url('./assets/gambar/penyakit/' . $detail->gambar) ?>" class="rounded" height="300" width="300">
            </div>
            <div class="card card-primary card-outline col-lg-12 mt-3">
              <div class="card-header">
                <h5 class="card-title m-0">Informasi Hama & Penyakit</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title mb-2"><?= $detail->detail_penyakit; ?></h6>
              </div>
            </div>
            <div>
              <div class="card card-primary card-outline col-lg-12">
                <div class="card-header">
                  <h5 class="card-title m-0">Saran Pengendalilan</h5>
                </div>
                <div class="card-body">
                  <h6 class="card-title mb-2"><?= $detail->penanganan_penyakit; ?></h6>
                </div>
              </div>
            </div>

          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <?php $this->load->view('frontend/template/footer'); ?>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<?php $this->load->view('frontend/template/js'); ?>
</body>

</html>