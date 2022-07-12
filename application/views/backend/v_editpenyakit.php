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
                <form action="<?= base_url('admin/Penyakit/editPenyakitAksi/' . $edit->kd_penyakit) ?>" method="POST" enctype="multipart/form-data">
                  <!-- <div class="form-group">
                    <label>Kode</label>
                    <input type="text" name="kode" class="form-control" value="<?= $cekkode ?>" disabled>
                  </div> -->
                  <div class="form-group">
                    <label>Nama Penyakit</label>
                    <input type="text" name="nama_penyakit" class="form-control" value="<?= $edit->nama_penyakit ?>">
                    <?= form_error('nama_penyakit', '<div class="text-small text-danger">', '</div>'); ?>
                  </div>
                  <div class="form-group">
                    <label>Detail Penyakit</label>
                    <textarea type="text" name="detail_penyakit" class="form-control"><?= $edit->detail_penyakit ?></textarea>
                    <?= form_error('detail_penyakit', '<div class="text-small text-danger">', '</div>'); ?>
                  </div>
                  <div class="form-group">
                    <label>Penanganan</label>
                    <textarea type="text" name="penanganan_penyakit" class="form-control"><?= $edit->penanganan_penyakit ?></textarea>
                    <?= form_error('penanganan_penyakit', '<div class="text-small text-danger">', '</div>'); ?>
                  </div>
                  <div class="form-group">
                    <label for="enum">Pilih Kategori</label>
                    <select name="kategori" id="kategori" required>
                      <option value="Hama" <?php if ($edit->kategori == 'Hama') echo 'selected' ?>>Hama</option>
                      <option value="Penyakit" <?php if ($edit->kategori == 'Penyakit') echo 'selected' ?>>Penyakit</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Foto</label> Upload gambar Max. 1 MB<input type="file" accept="image/png, .jpg, .jpeg" name="gambar" id="gambar" onchange="gambar1(this.value)">
                    <img src="holder.jpg" name="preview" id="preview" width="100px">
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