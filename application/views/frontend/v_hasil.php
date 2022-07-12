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
            <div class="card card-primary card-outline">
              <div class="card-body">

                <div class="row">
                  <div class="col-lg-8">
                    <table class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <td width=10>No.</td>
                          <td>Gejala Yang Dipilih</td>
                          <!-- <td width=160>Kondisi Yang Dipilih</td> -->
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no = 1;
                        $ig = 0;
                        foreach ($gejala as $key) {
                          $query = $this->db->where('kd_gejala', $key)->get('tb_gejala')->row();
                        ?>
                          <tr>
                            <td class="text-center"><?= $no++ ?></td>
                            <!-- <td class="text-center"><?= $key ?></td> -->
                            <td><?= $query->nama_gejala; ?></td>
                          </tr>
                        <?php $ig++;
                        } ?>
                      </tbody>
                    </table>
                  </div>

                  <div class="col-lg-4">
                    <table class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <td>Kondisi Terpilih</td>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        foreach ($kondisi as $key => $value) {
                          $query = $this->db->query("SELECT * FROM tb_kondisi where kd_kondisi = $value");
                          $row = $query->result_array();
                          foreach ($row as $k => $v) {
                            echo ' <tr>
                          <td class="text-center">' . $v['kondisi'] . '</td>
                          </tr>';
                          }
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>

                </div>

                <div class="row">
                  <div class=" col-sm-8">
                    <div class="card">
                      <div class="card-body">
                        <?php
                        $query = $this->db->where('kd_penyakit', $penyakit_terpilih)->get('tb_penyakit');
                        foreach ($query->result() as $p) { ?>

                          <h5 class="card-title mb-2">Hasil Diagnosis:</h5>
                          <h4 class="card-text"><?= $p->nama_penyakit; ?></h4>
                          <h5>Nilai CF: </h5>
                          <h5><?= $hasil ?></h5>
                          <h5>Persentase: </h5>
                          <h5><?= $persentasi ?>%</h5>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="card">
                      <div class="card-body" style="width: 18rem;">
                        <img class="ard-img-top img-bordered-sm" src="<?= base_url() ?>assets/gambar/penyakit/<?= $p->gambar; ?>" width="100%" height="205">
                      </div>
                    </div>
                  </div>
                </div>

                <div>
                  <div class="card card-primary card-outline col-lg-12">
                    <div class="card-header">
                      <h5 class="card-title m-0">Informasi Hama Penyakit</h5>
                    </div>
                    <div class="card-body">
                      <h6 class="card-title mb-2"><?= $p->detail_penyakit; ?></h6>
                    </div>
                  </div>
                  <div>
                    <div class="card card-primary card-outline col-lg-12">
                      <div class="card-header">
                        <h5 class="card-title m-0">Saran Pengendalilan</h5>
                      </div>
                      <div class="card-body">
                        <h6 class="card-title mb-2"><?= $p->penanganan_penyakit; ?></h6>
                      </div>
                    </div>
                  </div>
                  <div>
                    <div class="card card-primary card-outline col-lg-12">
                      <div class="card-header">
                        <h5 class="card-title m-0">Kemungkinan Lain</h5>
                      </div>
                      <div class="card-body">
                        <table class="table table-bordere mt-5">
                          <thead>
                            <tr>
                              <th width="130" class="text-center">Kode</th>
                              <th class="text-center">Kemungkinan Lain</th>
                              <th class="text-center">Nilai CF</th>
                              <th class="text-center">Persentase</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            // print_r($strategi_lain);
                            $num = 1;
                            foreach ($penyakit_lain as $key => $value) :
                              $kemungkinan = $this->db->where('kd_penyakit', $key)->get('tb_penyakit')->row();
                              if ($num == 1) {
                              } else {
                            ?>

                                <tr>
                                  <td class="text-center"><?= $kemungkinan->kd_penyakit; ?></td>
                                  <td class="text-left"><?= $kemungkinan->nama_penyakit; ?></td>
                                  <td class="text-center"><?= $value; ?></td>
                                  <td class="text-center"><?= round($value * 100); ?>%</td>
                                </tr>

                            <?php }
                              $num++;
                            endforeach; ?>

                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              <?php } ?>

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