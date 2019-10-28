<div class="container-fluid">
  <?php if ($this->session->flashdata('pesan_hapusperum')) : ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Berhasil</strong> menghapus perumahan.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php endif; ?>

  <?= $this->session->flashdata('pesan_edit'); ?>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">List Tampilan Home</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Kategori</th>
              <th>Isi</th>
              <th>Editor</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($tampilanhome as $home): ?>
              <tr>
                <td><?= $home['nama_tampilan'] ?></td>
                <td><?= $home['isi_tampilan'] ?></td>
                <td><?= $home['nama_admin'] ?></td>
                <td>
                  <a href="<?= base_url('admin/editTampilanHome/') ?><?= $home['id_tampilan'] ?>" class="btn btn-info" title="Edit"><i class="fas fa-pen"></i></a>
                </td>

              </tr>
<?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>

  </div>

</div>
</div>