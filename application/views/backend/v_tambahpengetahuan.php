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
                <form action="<?= base_url('admin/Pengetahuan/tambahPengetahuanAksi') ?>" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label>Hama atau Penyakit</label>
                    <select name="kd_penyakit" id="kd_penyakit" class="form-control" required>
                      <option value="" class="text-center">Pilih Hama atau Penyakit</option>
                      <?php foreach ($penyakit as $p) { ?>
                        <option value="<?= $p->kd_penyakit ?>"><?= $p->nama_penyakit ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Gejala</label>
                    <select name="kd_gejala" id="kd_gejala" class="form-control" required>
                      <option value="" class="text-center">Pilih Gejala</option>
                      <?php foreach ($gejala as $g) { ?>
                        <option value="<?= $g->kd_gejala ?>"><?= $g->nama_gejala ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>MB</label>
                    <input type="text" name="mb" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label>MD</label>
                    <input type="text" name="md" class="form-control" required>
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