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
                <?= $this->session->flashdata('pesan'); ?>

                <table class="table table-bordered table-hover">
                  <!-- Tabel head -->
                  <thead class="text-center">
                    <tr>
                      <th>No.</th>
                      <th>Nama Pengguna</th>
                      <th>Hama dan Penyakit</th>
                      <th>CF Hasil</th>
                    </tr>
                  </thead>
                  <!-- Tabel Body -->
                  <?php $no = 1;
                  foreach ($data as $dt) : ?>

                    <tbody>
                      <tr>
                        <td width=50><?= $no++ ?></td>
                        <td><?= $dt->nama_pengguna ?></td>
                        <td><?= $dt->nama_penyakit ?></td>
                        <td><?= $dt->cf_hasil ?></td>
                      </tr>
                    </tbody>
                  <?php endforeach ?>
                </table>
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