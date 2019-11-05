<div class="container col-md-9">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">Tambah Kategori</h6>
        </div>
        <div class="col-md-10 mx-auto mt-3 mb-3">
            <form enctype="multipart/form-data" method="post" action="<?= base_url('Admin/addKategori') ?>">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nama Kategori :</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Kategori">
                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <input type="hidden" value="<?= $user['id_admin'] ?>" name="admin" class="form-control">
                </div>
                <button class="btn btn-danger" type="submit" name="submit">Tambah</button>
            </form>
        </div>
    </div>
</div>