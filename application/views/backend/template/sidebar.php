<aside class="main-sidebar sidebar-dark-primary elevation-4">

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3">
      <!-- <p class="text-white"> Halaman Pakar</p> -->
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-user text-white mb-3">&nbsp;&nbsp;&nbsp;Halaman Pakar</i>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu-open">
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('admin/dashboard') ?>" class="nav-link <?php if ($this->uri->segment(2) == 'dashboard') {
                                                                              echo "active";
                                                                            } ?>">
                <i class="nav-icon fas fa-archive"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/penyakit') ?>" class="nav-link <?php if ($this->uri->segment(2) == 'penyakit') {
                                                                            echo "active";
                                                                          } ?>">
                <i class="nav-icon fas fa-bug"></i>
                <p>Hama dan Penyakit</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/gejala') ?>" class="nav-link <?php if ($this->uri->segment(2) == 'gejala') {
                                                                          echo "active";
                                                                        } ?>">
                <i class="nav-icon fas fa-book"></i>
                <p>Gejala</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/pengetahuan') ?>" class="nav-link <?php if ($this->uri->segment(2) == 'pengetahuan') {
                                                                                echo "active";
                                                                              } ?>">
                <i class="nav-icon fas fa-book"></i>
                <p>Basis Pengetahuan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('admin/riwayat') ?>" class="nav-link <?php if ($this->uri->segment(2) == 'riwayat') {
                                                                            echo "active";
                                                                          } ?>">
                <i class="nav-icon fas fa-book"></i>
                <p>Riwayat</p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>Admin
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?= base_url('user/Auth/logout') ?>" onclick="return confirm('Yakin akan keluar?');" class="nav-link">
                    <i class="nav-icon"></i>
                    <P>Log Out</P>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>