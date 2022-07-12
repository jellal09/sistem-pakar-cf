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
          <div class="col-lg-12">
            <form action="<?php echo base_url('user/Main/hasil') ?> " method="POST">
              <div class="card card-primary card-outline">
                <div class="card-body">

                  <?= $this->session->flashdata('message'); ?>
                  <table class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <td width=50>No. </td>
                        <td>Gejala</td>
                        <td width=160>Kondisi</td>
                      </tr>
                    </thead>

                    <?php $no = 1;
                    foreach ($data as $dt) { ?>
                      <!-- <input type="text" class="text" name="kd_gejala[]" value="<?= $dt->kd_gejala; ?>"> -->
                      <tbody>
                        <tr>
                          <td><?= $no++ ?></td>
                          <td><?= $dt->nama_gejala ?></td>

                          <td>
                            <select class="form-control text-center" name="kondisi[]">
                              <option value="">Pilih Kondisi</option>
                              <option value="<?= $dt->kd_gejala . '_' . 1; ?>">Sangat Yakin</option>
                              <option value="<?= $dt->kd_gejala . '_' . 2; ?>">Cukup Yakin</option>
                              <option value="<?= $dt->kd_gejala . '_' . 3; ?>">Yakin</option>
                              <option value="<?= $dt->kd_gejala . '_' . 4; ?>">Kurang Yakin</option>
                              <option value="<?= $dt->kd_gejala . '_' . 5; ?>">Tidak Yakin</option>
                            </select>
                          </td>
                        </tr>
                      </tbody>
                    <?php } ?>
                  </table>
                  <div>
                    <button type="submit" class="btn btn-primary btn-sm float-right mt-3">Selanjutnya</button>
                  </div>
                </div>
              </div>
            </form>
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