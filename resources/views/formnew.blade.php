<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data dari Database</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
/* Gaya tombol "New Form" */
button[type="submit"] {
    background-color: #007BFF;
    color: #fff;
    border: none;
    padding: 5px 10px;
    border-radius: 5px;
    cursor: pointer;
}

/* Gaya tombol "Edit" dan "Delete" */
button[type="submit"].btn-dark {
    background-color: #343a40;
}

/* Gaya teks pada header */
h1.text-center {
    text-align: center;
    color: #007BFF;
}

/* Gaya garis tepi tabel */
table.table {
    border: 2px solid #ccc;
}

/* Gaya teks di sel tabel */
table.table th,
table.table td {
    padding: 10px;
    text-align: center;
    font-size: 16px;
}

/* Gaya tombol "Edit" dan "Delete" */
button[type="submit"].btn-dark {
    background-color: #343a40;
    color: #fff;
    padding: 5px 10px;
    border-radius: 5px;
    cursor: pointer;
}

/* Gaya baris tabel yang dihover */
table.table tbody tr:hover {
    background-color: #f2f2f2;
    cursor: pointer;
}
</style>

<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h3 class="text-center">Form Biodata</h3>
                <form action="/form" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" class="form-control" name="nama" id="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat:</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" required>
                    </div>
                    <div class="form-group">
                        <label for="telepon">Telepon:</label>
                        <input type="text" class="form-control" name="telepon" id="telepon" required>
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender:</label><br>
                        <select class="form-control" name="gender" id="gender" required>
                            <option value="">Pilih Gender</option>
                            <option value="pria">Pria</option>
                            <option value="wanita">Wanita</option>
                        </select><br>
                    </div>
                    <button type="submit" class="btn btn-dark" name="tambah">Simpan</button>
                    <button type="reset" onclick="return confirm('Apakah yakin ingin menghapus data?')" class="btn btn-danger" name="hapus">Hapus </button>
                    <br><br>
                </form>
            </div>
        </div>
    </div>