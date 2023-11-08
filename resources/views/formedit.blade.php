<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
/* Gaya tombol "New Form" */
button[type="submit"] {
    background-color: #007BFF;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

button[type="submit"]:hover {
    background-color: #0056b3;
}

/* Gaya tombol "Edit" dan "Delete" */
button[type="submit"].btn-dark {
    background-color: #343a40;
    color: #fff;
    padding: 5px 10px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

button[type="submit"].btn-dark:hover {
    background-color: #1d2124;
}

/* Gaya untuk judul "Data dari Database" */
h1.text-center {
    text-align: center;
    color: #007BFF;
    font-size: 24px;
    margin-top: 20px;
}

/* Gaya untuk border pada tabel */
table.table {
    border-collapse: collapse;
    width: 100%;
    border: 1px solid #ccc;
}

/* Gaya untuk header tabel */
table.table th {
    background-color: #343a40;
    color: #fff;
    padding: 10px;
    text-align: center;
}

/* Gaya untuk sel tabel dan tombol "Edit" dan "Delete" di dalam sel */
table.table td, table.table th {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: center;
}

/* Gaya untuk baris genap */
table.table tbody tr:nth-child(even) {
    background-color: #f2f2f2;
}

/* Gaya saat menghover baris tabel */
table.table tbody tr:hover {
    background-color: #ddd;
    cursor: pointer;
}
</style>
<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h3 class="text-center">Form Biodata</h3>
                <form action="/form/{{ $form->id }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" class="form-control" name="nama" id="nama" value="{{ $form->nama }}" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat:</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" value="{{ $form->alamat }}" required>
                    </div>
                    <div class="form-group">
                        <label for="telepon">Telepon:</label>
                        <input type="text" class="form-control" name="telepon" id="telepon" value="{{ $form->telepon }}" required>
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender:</label><br>
                        <select class="form-control" name="gender" id="gender" required>
                            <option value="">Pilih Gender</option>
                            <option value="Pria" @if($form->gender=='Pria') {{ "selected" }} @endif >Pria</option>
                            <option value="Wanita" @if($form->gender=='Wanita') {{ "selected" }} @endif >Wanita</option>
                        </select><br>
                    </div>
                    <button type="submit" class="btn btn-dark" name="tambah">Simpan</button>
                    <button type="reset" onclick="return confirm('Apakah yakin ingin menghapus data?')" class="btn btn-danger" name="hapus">Hapus </button>
                    <br><br>
                </form>
            </div>
        </div>
    </div>



