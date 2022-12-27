<?= $this->section('content'); ?>

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <a href="<?= base_url('U/Admin/new') ?>" class="btn btn-block btn-primary btn-flat">Tambah
          Admin</a>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-hover" id="table">
          <thead>
            <tr>
              <th>~</th>
              <th>Nama Lengkap</th>
              <th>Username</th>
              <th>Login Terakhir</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <!-- data goes here -->
            <?php foreach ($data as $row) : ?>
            <tr>
              <td><?= $row['id_admin'] ?></td>
              <td><?= $row['fullname'] ?></td>
              <td><?= $row['username'] ?></td>
              <td><?= $lastlog = ($row['last_login'] == null) ? 'Belum Pernah' : $row['last_login']; ?>
              </td>
              <td>
                <div class="btn-group d-flex justify-content-center"><a
                    href="<?= base_url('U/Admin/' . $item['id_admin'] . '/edit'); ?>"
                    class="btn btn-flat btn-outline-info">Edit</a><button
                    onclick="deleteData('<?= $item['id_admin']; ?>')"
                    class="btn btn-flat btn-outline-danger">Delete</button></div>
              </td>
            </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('script'); ?>

<script>
function deleteData(a) {
  swal({
      title: "Apa kamu yakin?",
      text: "Data akan terhapus",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        $.ajax({
          method: "DELETE",
          url: "Admin/" + a,
          success: function(response) {
            swal("Data Telah Terhapus", {
              icon: "success",
            }).then(() => {
              window.location.reload()
            })
          },
          error: function(response) {
            swal("Terjadi kesalahan pada AJAX", {
              icon: "error",
            })
          }
        });
      }
    });
}
</script>

<?= $this->endSection(); ?>