<?= $this->extend('Layouts/v_wrapper')?>
<?= $this->section('content')?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Ruangan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('dashboard')?>">Home</a></li>
              <li class="breadcrumb-item active">Ruangan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">

    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Ruangan</h3>
              </div>

              <div class= col-sm-6>
                <button class="btn btn-primary id="btn-tambah" data-toggle="modal" data-target="#ruanganModal">Tambah</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama Ruangan</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
            <tbody>
            <?php foreach ($ruangan as $r): ?>
              <tr>
                <td><?= $r['id'] ?></td>
                <td><?= $r['kd_ruangan'] ?></td>
                <td><?= $r['nm_ruangan'] ?></td>
            <td>
                <button class="btn btn-warning btn-edit">Edit</button>
                <a class="btn btn-danger btn-hapus" href="<?= base_url('ruangan/delete/'.$r['id'])?>"onclick="return confirm('Apakah anda yakin ingin menghapus ruangan ini?')">Hapus</a>
            </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
    
                </table>
              </div>
              <!-- /.card-body -->
            </div>

      <!-- Modal Tambah/Edit Ruangan -->
      <div class="modal fade" id="ruanganModal" tabindex="-1" role="dialog" aria-labelledby="ruanganModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="<?= base_url('ruangan/save') ?>" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ruanganModalLabel">Tambah Ruangan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" name="id" id="id">
                            <div class="form-group">
                                <label for="kd_ruangan">Kode Ruangan</label>
                                <input type="text" class="form-control" name="kd_ruangan" id="kd_ruangan" required>
                            </div>
                            <div class="form-group">
                                <label for="nm_ruangan">Nama Ruangan</label>
                                <input type="text" class="form-control" name="nm_ruangan" id="nm_ruangan" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>

<?= $this->endSection() ?>