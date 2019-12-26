<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <!-- start jumlah pesanan -->
  <div class="row">
    <!-- card pesanan bulan ini -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pesanan bulan ini</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">4</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end card bulan ini -->
    <!-- start pesanan pending -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pesanan pending</div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                </div>
                <div class="col">
                  <div class="progress progress-sm mr-2">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end pesanan pending -->
  </div>

  <!-- tambah produk -->
  <div class="row ml-1">
    <a href="#" class="btn btn-primary btn-icon-split" data-toggle="modal" data-target="#exampleModal" data-title="Tambah Produk">
      <span class="icon text-white-10">
        <i class="fas fa-plus-square  mt-1"></i>
      </span>
      <span class="text">Tambah Produk</span>
    </a>
  </div>

  <!-- end tambah produk -->
  <!-- end jumlah pesanan -->

  <!-- start daftar produk -->
  <div class="card shadow mb-4 mt-1 col-lg-12">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>#</th>
              <th>Nama Produk</th>
              <th>Kategori</th>
              <th>deskripsi</th>
              <th>harga</th>
              <th>gambar</th>
              <th>aksi</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th width=5%>#</th>
              <th width=20%>Nama Produk</th>
              <th>Kategori</th>
              <th width=25%>deskripsi</th>
              <th>harga</th>
              <th>gambar</th>
              <th>aksi</th>
            </tr>
          </tfoot>
          <tbody>
            <?php $no = 1; ?>
            <?php foreach ($product_index as $pindex) : ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?= $pindex['nama'] ?></td>
                <td><?= $pindex['kategori'] ?></td>
                <td><?= $pindex['deskripsi'] ?></td>
                <td><?= $pindex['harga'] ?></td>
                <td>
                  <img src="<?= base_url('assets/img/product/') . $pindex['gambar']; ?>" alt="" style="width: 100px;height: 100px;">
                </td>
                <td class="py-5">
                  <a href="#" class="btn btn-primary btn-circle btn-sm mb-1">
                    <i class="fas fa-edit"></i>
                  </a>
                  <a href="#" class="btn btn-danger btn-circle btn-sm">
                    <i class="fas fa-trash"></i>
                  </a>
                </td>

              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- end datar produk -->



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- start modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" enctype="multipart/form-data" action="<?= base_url() ?>admin/tambah">
          <div class="form-group">
            <label for="nama" class="col-form-label"></label>
            <input type="text" class="form-control" id="nama" placeholder="Nama Produk" name="nama" required>
          </div>
          <div class="input-group">
            <div class="input-group-prepend">
              <label class="col-form-label" for="kategori"></label>
            </div>
            <select class="form-control" id="kategori" name="kategori" onclick="validasi()">
              <option selected>kategori</option>
              <option value="1">fullbike</option>
              <option value="2">sparepart</option>
              <option value="3">aksesoris</option>
            </select>
          </div>
          <div id="inputKategori" class="text-danger ml-1 mt-1" style="display : none">Pilih kategori !</div>
          <div class="input-group">
            <textarea class="form-control mt-2" required name="deskripsi" placeholder="deskripsi"></textarea>
          </div>
          <div class="input-group mt-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Rp</span>
            </div>
            <input type="text" class="form-control" placeholder="harga" name="harga" id="harga" onkeyup="validasi()">
          </div>
          <div id="inputHarga" class="text-danger ml-5 mt-1" style="display : none">inputan bukan angka </div>

          <div class="input-group mb-3 mt-3">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="image" name="image">
              <label class="custom-file-label" for="image">Choose file</label>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary" disabled id="btnSave">Tambah Produk</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- end modal -->



</div>
<!-- /.container-fluid -->

<!-- End of Main Content -->