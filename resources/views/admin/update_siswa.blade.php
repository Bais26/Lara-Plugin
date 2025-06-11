<!DOCTYPE html>
<html>
<head>
    <title>Edit Siswa</title>
</head>
<body>
    <h1>Edit Siswa</h1>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nama:</label>
        <input type="text" name="name" value="{{ $siswa->name }}"><br>

        <label>Email:</label>
        <input type="email" name="email" value="{{ $siswa->email }}"><br>

        <label>Alamat:</label>
        <input type="text" name="alamat" value="{{ $siswa->alamat }}"><br>

        <label>Nama Pacar:</label>
        <input type="text" name="nama_pacar" value="{{ $siswa->nama_pacar }}"><br>

        <button type="submit">Update</button>
    </form>

    <a href="{{ route('siswa.index') }}">Kembali</a>
</body>
</html>
