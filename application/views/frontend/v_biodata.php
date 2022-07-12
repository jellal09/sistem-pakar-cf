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

            <div class="card">
              <div class="card-body">
                <h5 class="card-title mb-2">Silahkan Isikan Nama Anda Terlebih Dahulu</h5>
                <form action="<?php echo base_url('user/Main/save_nama') ?> " method="POST">
                  <input type="hidden" name="kd_pengguna" class="form-control" value="<?= $data; ?>">
                  <input type="text" name="nama_pengguna" class="form-control" required>
                  <input type="submit" name="" class="btn btn-info btn-md mt-2" value="Selanjutnya">
                </form>
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