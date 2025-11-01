<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">UTS Laravel</a>
  </div>
</nav>

<div class="container mt-3">

    <div class="d-flex justify-content-between align-items-center">
        <h3>Halaman Produk</h3>
        <a href="tambahproduk" class="btn btn-primary">Tambah Produk</a>

    </div>

    <table class="table table-primary table-sm table-hover table-striped table-bordered mt-3">
        <thead>
            <tr>
                <th>Kode Produk</th>
                <th>Nama Produk</th>
                <th>Jenis Produk</th>
                <th>Harga</th>
            </tr>
        </thead>

        <tbody>
            @foreach($kode as $i => $k)
            <tr>
                <td>{{ $k }}</td>
                <td>{{ $nama[$i] }}</td>
                <td>Alat tulis</td>
                <td>{{ $harga[$i] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
