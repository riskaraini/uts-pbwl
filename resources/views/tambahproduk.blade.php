<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Produk</title>
</head>
<body>
    <div class="col-sm-6">
        <h4>Form Mahasiswa</h4>
        <form action="" method="GET">
        <div class="row">
            <div class="col-sm-6">
                <div class="label">NPM</div>
                <input type="number" name="npm" class="form-control" placeholder="Input NPM">
            </div>
            <div class="col-sm-6">
            <div class="label">Nama Mahasiswa</div>
            <input type="text" name="nama_mahasiswa"  class="form-control" placeholder="Input Nama Mahasiswa">
        </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="label">Tanggal Lahir</div>
                <input type="date" name="tgl_lahir" class="form-control">
            </div>
            <div class="col-sm-6">
                <label for="">Prodi</label>
                <select name="prodi" class="form-control">
                    <option value="">Sistem Informasi</option>
                    <option value="">Teknik Informatika</option>
                    <option value="">Data Sains</option>
                </select>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-sm-12">
            <div class="form-group">
                 <button class="btn btn-primary" style="width: 100%" type="submit">Simpan</button>
            </div>
            </div>
        </div>
</form>
</div>
</div>
</body>
</html>