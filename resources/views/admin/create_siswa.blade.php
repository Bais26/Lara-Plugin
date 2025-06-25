<!DOCTYPE html>
<html>
<head>
    <title>Tambah Siswa</title>
    @vite('resources/css/app.css')
</head>
<body>
    <h1>Tambah Siswa</h1>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf
        <label>Nama:</label>
        <input type="text" name="name"><br>

        <label>Email:</label>
        <input type="email" name="email"><br>

        <label>Alamat:</label>
        <input type="text" name="alamat"><br>

        <label>Nama Pacar:</label>
        <input type="text" name="nama_pacar"><br>

        <button type="submit">Simpan</button>
    </form>

    <a href="{{ route('siswa.index') }}">Kembali</a>
</body>
</html>
