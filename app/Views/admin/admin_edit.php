<?= $this->section('content'); ?>

<div class="row">
  <div class="col-lg-6">
    <div class="card card-primary card-outline">
      <div class="card-body">
        <a class="btn btn-block btn-primary btn-flat" onclick="history.back()">
          <i class="fas fa-arrow-left"></i>
          Kembali
        </a>

        <form action="<?= base_url('U/Admin/' . $data['id_admin']) ?>" method="post">
          <input type="hidden" name="_method" value="PUT">
          <div class="row">
            <div class="col-md-8">
              <div class="card card-blue">
                <div class="card-header">
                  <h3 class="card-title">Form Input Data Admin</h3>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="fullname">Fullname</label>
                    <input type="text" name="fullname" id="fullname" class="form-control"
                      value="<?= $admin['fullname']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control"
                      value="<?= $admin['username']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="password">Password Baru</label>
                    <input type="password" name="password" id="password" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="confirm">Konfirmasi Password Baru</label>
                    <input type="password" name="konfirmasiPassword" id="konfirmasiPassword" class="form-control">
                  </div>
                </div>
                <div class="card-footer">
                  <div class="row">
                    <div class="col-12"><button class="btn btn-block btn-primary btn-flat" type="submit">Simpan</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- /.col-md-6 -->
</div>

<?= $this->endSection(); ?>