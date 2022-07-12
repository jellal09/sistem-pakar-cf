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
              <h3>-- Bantuan Penggunaan --</h3>
            </div>

            <div class="card card-primary card-outline col-lg-12 mt-3">
              <div class="card-header">
                <h5 class="card-title m-0">Cara melakukan diagnosis</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title mb-2"></h6>
                <p>1. Pilih menu diagnosis</p>
                <img src="<?= base_url('assets/gambar/bantuan/diagnosis.png') ?>" class="rounded" height="300" width="600">
                <p>2. Masukkan nama anda</p>
                <p>3. Pilih gejala yang dialami tanaman beserta tingkat keyakinan anda</p>
                <img src="<?= base_url('assets/gambar/bantuan/diagnosis2.png') ?>" class="rounded" height="300" width="600">
                <p>4. Pilih tombol "selanjutnya"</p>
              </div>
            </div>
            <div class="card card-primary card-outline col-lg-12 mt-3">
              <div class="card-header">
                <h5 class="card-title m-0">Cara melihat informasi hama dan penyakit tanaman jeruk</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title mb-2"></h6>
                <p>1. Pilih menu informasi</p>
                <img src="<?= base_url('assets/gambar/bantuan/informasi.png') ?>" class="rounded" height="300" width="600">
                <p>2. Klik tombol "Detail" pada hama atau penyakit yang ingin dilihat</p>
                <img src="<?= base_url('assets/gambar/bantuan/informasi2.png') ?>" class="rounded" height="300" width="600">
                <p>3. Selanjutnya akan tampil informasi mengenai hama dan penyakit yang dipilih</p>
                <img src="<?= base_url('assets/gambar/bantuan/informasi3.png') ?>" class="rounded" height="300" width="600">
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