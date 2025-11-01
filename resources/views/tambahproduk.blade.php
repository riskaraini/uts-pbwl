<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary mb-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">UTS Laravel</a>
  </div>
</nav>

<div class="container">
    <h3>Form Tambah Produk</h3>
    <form action="" method="GET" class="mt-3">

        <div class="row mb-3">
            <div class="col-sm-4">
                <label class="form-label">Kode Produk</label>
                <input type="text" name="kode" class="form-control" placeholder="Input Kode Produk">
            </div>
            <div class="col-sm-4">
                <label class="form-label">Nama Produk</label>
                <input type="text" name="nama" class="form-control" placeholder="Input Nama Produk">
            </div>
            <div class="col-sm-4">
                <label class="form-label">Jenis Produk</label>
                <select name="jenis" class="form-control">
                </select>
            </div>
        </div>

        <div class="row mb-3">
    <div class="col-sm-6">
        <label class="form-label">Harga</label>
        <input type="number" name="harga" class="form-control" placeholder="Input Harga">
    </div>
    <div class="col-sm-6 d-flex align-items-end">
        <button type="submit" class="btn btn-success w-100">Simpan</button>
    </div>
</div>

    </form>
</div>

</body>
</html>
