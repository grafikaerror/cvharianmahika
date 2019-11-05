<div class="container col-md-9">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">Tambah Produk</h6>
        </div>
        <div class="col-md-10 mx-auto mt-3 mb-3">
            <form enctype="multipart/form-data" method="post" action="<?= base_url('Admin/addProduk') ?>">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nama Produk :</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Harga Produk :</label>
                    <input type="text" class="form-control" id="nama" name="harga" placeholder="contoh: 100000 (Seratus Ribu)">
                    <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Deskripsi Produk :</label>
                    <textarea name="desc" class="form-control" id="descproduk" rows="10"></textarea>
                    <?= form_error('desc', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Gambar Produk :</label>
                    <input type="file" name="img" class="form-control-file">
                    <?= form_error('img', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Kategori Produk :</label>
                    <select name="kategori" class="form-control">
                        <?php foreach ($kategori as $ktgr) : ?>
                            <option value="<?= $ktgr['id_kategori'] ?>"><?= $ktgr['nama_kategori'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <input type="hidden" value="<?= $user['id_admin'] ?>" name="admin" class="form-control">
                </div>
                <button class="btn btn-danger" type="submit" name="submit">Tambah</button>
            </form>
        </div>
    </div>
</div>