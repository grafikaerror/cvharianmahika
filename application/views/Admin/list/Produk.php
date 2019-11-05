<div class="container col-md-12">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">List Produk</h6>
        </div>
        <div class="col-md-12 mx-auto mt-3 mb-3">
            <table id="table" class="table table-bordered table-hover">
                <thead>
                    <th>Foto Produk</th>
                    <th>Nama Produk</th>
                    <th>Kategori Produk</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    <?php foreach ($produk as $prdk) : ?>
                        <tr>
                            <td><img width="150" src="<?= base_url('upload/produk/') . $prdk['img_produk'] ?>" alt=""></td>
                            <td><?= $prdk['nama_produk'] ?></td>
                            <td><?= $prdk['nama_kategori'] ?></td>
                            <td>
                                <a class="btn btn-success" href="<?= base_url('admin/editProduk/') . $prdk['id_produk'] ?>">Edit</a>
                                <a class="btn btn-primary" href="<?= base_url('admin/deleteProduk/') . $prdk['id_produk'] ?>">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>