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

<div class="container mt-3">
        <h1 class="text-center">Data dari Database</h1>
        <div class="table-responsive">
        <a href="{{ route('form.create') }}" class="btn btn-sm btn-primary">
              Baru
            </a>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>  
                        <th>Telepon</th>
                        <th>Gender</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($data as $form)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $form->nama }}</td>
                <td>{{ $form->alamat }}</td>
                <td>{{ $form->telepon }}</td>
                <td>{{ $form->gender }}</td>
                <td>
                    <form action="/form/{{ $form->id }}/edit" method="get">
                        <button type="submit" class="btn btn-dark">Edit</button>
                    </form>
                    <form action="/form/{{ $form->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-dark">Delete</button>
                    </form>
                
                </td>
            </tr>
        @endforeach
            </table>
        </div>
    </div>