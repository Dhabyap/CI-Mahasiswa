<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Ubah Data Mahasiswa
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="nama" name="nama" class="form-control" id="nama" value="<?= $mahasiswa['nama']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nrp">nrp</label>
                            <input type="text" name="nrp" class="form-control" value="<?= $mahasiswa['nrp']; ?>" id="nrp">
                            <small class="form-text text-danger"><?= form_error('nrp'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">email</label>
                            <input type="text" name="email" value="<?= $mahasiswa['email']; ?>" class="form-control" id="email">
                            <small class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">jurusan</label>
                            <select class="form-control" name="jurusan" id="jurusan">
                                <?php foreach( $jurusan as $j): ?>
                                    <?php if( $j == $mahasiswa['jurusan']): ?>
                                        <option value="<?= $j; ?>" selected><?=$j; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $j; ?>"><?=$j; ?></option>
                                    <?php endif ; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>