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


            <div class="row">
              <?php foreach ($data as $d) { ?>
                <div class="col-sm-4">
                  <div class="card">
                    <img src="<?= base_url('./assets/gambar/penyakit/' . $d->gambar); ?>" class="card-img-top" height="200px">
                    <div class="card-body">
                      <h5 class="card-title"><?= $d->nama_penyakit ?></h5>
                      <p class="card-text"></p>
                      <a href="<?= base_url('user/Informasi/detail/' . $d->kd_penyakit) ?>" class="btn btn-primary">Detail</a>
                    </div>
                  </div>
                </div>
              <?php } ?>
            </div>

          </div>
          <!-- /.col-md-12 -->
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