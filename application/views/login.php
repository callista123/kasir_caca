<!DOCTYPE html>
<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
<style>
  .authentication-inner .card {
    width: 450px;
    margin: auto;
  }

  .form-control {
    font-size: 14px;
    padding: 8px;
  }

  .btn {
    font-size: 14px;
    padding: 10px;
  }

  h4 {
    font-size: 18px;
    margin-top: 20px;
    margin-bottom: 20px;
  }

  .app-brand {
    margin-bottom: 20px;
  }
</style>

  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title><?= $judul_halaman; ?></title>
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/sneat') ?>/assets/img/favicon/favicon.ico" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="<?= base_url('assets/sneat') ?>/assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="<?= base_url('assets/sneat') ?>/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?= base_url('assets/sneat') ?>/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?= base_url('assets/sneat') ?>/assets/css/demo.css" />
    <link rel="stylesheet" href="<?= base_url('assets/sneat') ?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <script src="<?= base_url('assets/sneat') ?>/assets/vendor/js/helpers.js"></script>
    <script src="<?= base_url('assets/sneat') ?>/assets/js/config.js"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="container-xl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a class="app-brand-link gap-2">
                  <span class="app-brand-text demo text-body fw-bolder">app kasircaa</span>
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-4">Silahkan login terlebih dahulu yaa 👋</h4>
              <form class="mb-3" action="<?= base_url('auth/login') ?>" method="POST">
                <div class="mb-3">
                  <label for="email" class="form-label">Email or Username</label>
                  <input
                    type="text"
                    class="form-control"
                    name="username"
                    placeholder="Username"
                    required
                  />
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Password</label>
                  </div>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      class="form-control"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      required
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="submit">Login</button>
                </div>
              </form>

              <p class="text-center">
                <?= $this->session->flashdata('notifikasi'); ?>
              </p>
            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>
    <!-- / Content -->
    <script src="<?= base_url('assets/sneat') ?>/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="<?= base_url('assets/sneat') ?>/assets/vendor/libs/popper/popper.js"></script>
    <script src="<?= base_url('assets/sneat') ?>/assets/vendor/js/bootstrap.js"></script>
    <script src="<?= base_url('assets/sneat') ?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?= base_url('assets/sneat') ?>/assets/vendor/js/menu.js"></script>
    <script src="<?= base_url('assets/sneat') ?>/assets/js/main.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
