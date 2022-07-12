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
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">

                <form action="<?= base_url('admin/Gejala/editGejalaAksi/' . $edit->kd_gejala) ?>" method="POST" enctype="multipart/form-data">

                  <input type="hidden" name="kd_gejala" value="<?= $edit->kd_gejala ?>">
                  <div class="form-group">
                    <label>Nama Gejala</label>
                    <input type="text" name="nama_gejala" class="form-control" value="<?= $edit->nama_gejala ?>">
                  </div>

                  <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                </form>

              </div>
              <!-- /.card-body -->
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