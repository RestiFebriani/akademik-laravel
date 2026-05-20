<!DOCTYPE html>
<html>

<head>
    <title>Edit Mahasiswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">

        <div class="card">
            <div class="card-header bg-warning">
                <h3>Edit Data Mahasiswa</h3>
            </div>

            <div class="card-body">

                <form action="/mahasiswa/update/{{ $mahasiswa->id }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label>NIM</label>

                        <input type="text" name="nim" class="form-control" value="{{ $mahasiswa->nim }}" readonly>
                    </div>

                    <div class="mb-3">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" value="{{ $mahasiswa->nama }}">
                    </div>

                    <div class="mb-3">
                        <label>Prodi</label>
                        <input type="text" name="prodi" class="form-control" value="{{ $mahasiswa->prodi }}">
                    </div>

                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" value="{{ $mahasiswa->email }}">
                    </div>

                    <div class="mb-3">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control"
                            value="{{ $mahasiswa->tanggal_lahir }}">
                    </div>

                    <div class="mb-3">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control">{{ $mahasiswa->alamat }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        Update
                    </button>

                    <a href="/mahasiswa" class="btn btn-secondary">
                        Kembali
                    </a>

                </form>

            </div>
        </div>

    </div>

</body>

</html>
