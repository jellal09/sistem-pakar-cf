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
                <a href="<?= base_url('admin/Pengetahuan/tambahPengetahuan') ?> " class="btn btn-primary btn-sm mb-2">Tambah</a>
                <table class="table table-bordered table-hover">
                  <!-- Tabel head -->
                  <thead>
                    <tr>
                      <th class="text-center">No.</th>
                      <th class="text-center">Hama & Penyakit</th>
                      <th class="text-center">Gejala</th>
                      <th class="text-center" width=50>MB</th>
                      <th class="text-center" width=50>MD</th>
                      <th class="text-center" width=90>CF Pakar</th>
                      <th class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <!-- Tabel Body -->
                  <?php $no = 1;
                  foreach ($pengetahuan as $pt) { ?>

                    <tbody>
                      <tr>
                        <td width=50><?= $no++ ?></td>
                        <td><?= $pt->nama_penyakit ?></td>
                        <td><?= $pt->nama_gejala ?></td>
                        <td><?= $pt->mb ?></td>
                        <td><?= $pt->md ?></td>
                        <td><?= $pt->cf_pakar ?></td>
                        <td width=130>
                          <a href="<?= base_url('admin/Pengetahuan/editPengetahuan/' . $pt->kd_pengetahuan) ?>" class="btn btn-warning btn-sm">Edit</a>
                          <a href="<?= base_url('admin/Pengetahuan/hapusPengetahuan/' . $pt->kd_pengetahuan) ?>" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                      </tr>
                    </tbody>
                  <?php } ?>
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