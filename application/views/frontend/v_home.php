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

            <img src="<?= base_url('assets/gambar/banner/banner.jpg') ?>" class="img-fluid" alt="">
            <div class="row mt-5">
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Ingin melakukan diagnosis?</h5>
                    <p class="card-text"></p>
                    <a href="<?= base_url('User/main') ?>" class="btn btn-primary">Pergi <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Ingin melihat informasi hama dan penyakit?</h5>
                    <p class="card-text"></p>
                    <a href="<?= base_url('User/informasi') ?>" class="btn btn-primary">Pergi <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
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