<div class="container-fluid">
    <div class="row mt-3 mb-3">
        <div class="card mx-auto" style="width: 700px;">
            <div class="card-header">
                <?php foreach ($tampilanhome as $home) : ?>
                    Edit Tampilan <?= $home['nama_tampilan']; ?>
                <?php endforeach; ?>
            </div>
            <div class="col-md-10 mx-auto mt-3 mb-3">
                <?php foreach ($tampilanhome as $home) : ?>
                    <form action="<?= base_url('admin/editTampilanHome/') ?><?= $home['id_tampilan'] ?>" method="post">
                    <?php endforeach; ?>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama Perumahan</label>
                        <?php foreach ($tampilanhome as $home) : ?>
                            <input value="<?= $home['isi_tampilan']; ?>" type="text" class="form-control" id="isi" name="isi">
                        <?php endforeach; ?>
                        <?= form_error('isi', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                            <input value="<?= $user['id_admin']; ?>" type="hidden" class="form-control" id="isi" name="id_admin">
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-danger btn-user btn-block">
                        Simpan
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>