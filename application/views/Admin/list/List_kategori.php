<div class="container col-md-12">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">List Produk</h6>
        </div>
        <div class="col-md-12 mx-auto mt-3 mb-3">
            <table id="table" class="table table-bordered table-hover">
                <thead>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($kategori as $ktgr) :
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $ktgr['nama_kategori'] ?></td>
                            <td>
                                <a class="btn btn-success" href="<?= base_url('Admin/editKategori/') . $ktgr['id_kategori'] ?>">Edit</a>
                                <a class="btn btn-primary" href="#">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>