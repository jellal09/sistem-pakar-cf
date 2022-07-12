<!-- Navbar -->
<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
  <div class="container">
    <a href="<?= base_url('user/Home') ?>" class="navbar-brand">
      <span class="brand-text font-weight-light"><b>Home</b></span>
    </a>

    <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse order-3" id="navbarCollapse">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="<?= base_url('user/Main') ?>" class="nav-link"><b>Diagnosis</b></a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('user/Informasi') ?>" class="nav-link"><b>Informasi</b></a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('user/Bantuan') ?>" class="nav-link"><b>Bantuan</b></a>
        </li>
      </ul>
    </div>
  </div>
  <div class="">
    <a href="<?= base_url('user/Auth/login') ?>">Login</a>
  </div>
</nav>
<!-- /.navbar -->