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
                <form action="<?= base_url('admin/Gejala/tambahGejalaAksi') ?>" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label>Kode</label>
                    <input type="text" name="kode" class="form-control" value="<?= $cekkodeGejala ?>" disabled>
                  </div>
                  <div class="form-group">
                    <label>Gejala</label>
                    <input type="text" name="nama_gejala" class="form-control">
                    <?= form_error('nama_gejala', '<div class="text-small text-danger">', '</div>'); ?>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
  function gambar1(val) {
    $("#preview").attr('src', URL.createObjectURL(event.target.files[0]));
  }
</script>

</body>

</html>