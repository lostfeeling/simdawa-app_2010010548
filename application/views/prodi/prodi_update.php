<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Perbaharui Data Jenis Prodi </h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('home') ?>" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url('prodi') ?>" class="breadcrumb-link">Jenis Prodi</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Perbaharui Data</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">
                        Perbaharui Data Jenis Prodi
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group row">
                                <input type="hidden" name="id" value="<?= $prodi->id ?>">
                                <label for="nama_prodi" class="col-md-2">Nama Jenis Prodi</label>
                                <div class="col-md-10">
                                    <input type="text" name="nama_prodi" required placeholder="Nama Jenis Prodi" value="<?= $prodi->nama_prodi ?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="keterangan" class="col-md-2">Keterangan</label>
                                <div class="col-md-10">
                                    <input type="text" name="keterangan" required placeholder="Keterangan" value="<?= $prodi->keterangan ?>" class="form-control">
                                </div>
                            </div>
                            <a href="<?= base_url('prodi') ?>" class="btn btn-sm btn-danger float-right">Batal</a>
                            <button type="submit" name="update" class="btn btn-sm btn-info float-right mr-1">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>