<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>PPL | Biodata</title>
    <style>
        body {
            background: url("/images/images.jpg") no-repeat center center fixed;
            background-size: cover;
            background-attachment: fixed;
            font-family: sans-serif;
        }

        .card {
            background-color: rgba(255, 255, 255, 0.8);
            width: 800px;
            border-radius: 10px;
            margin: 0 auto;
            margin-top: 50px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .card-title {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="card">
                    <h2 class='text-center mb-4'>Data Pengguna</h2>
                    @if(session('success'))
                    <div class="alert alert-success col-6 text-center mx-auto">
                        {{ session('success') }}
                    </div>
                    @endif
                    <div class="card-body">
                        <form method="POST" action="/updatebiodata" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="nama_lengkap" class="form-label">Nama Lengkap :</label>
                                <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value="{{ $mahasiswa->nama_lengkap ?? '' }}" readonly>
                                @error('nama_lengkap')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" name="email" id="email" class="form-control" value="{{ $user->email ?? auth()->user()->email }}" readonly>
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password Baru :</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            @if (session('level') == 4)
                            <div class="mb-3">
                                <label for="dosen_wali" class="form-label">Dosen Wali :</label>
                                <input type="text" name="dosen_wali" id="dosen_wali" class="form-control" readonly>
                            </div>
                            @endif

                            <div class="mb-3">
                                <label for="nomor_hp" class="form-label">No. Handphone :</label>
                                <input type="text" name="nomor_hp" id="nomor_hp" class="form-control @error('nomor_hp') is-invalid @enderror">
                                @error('nomor_hp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="tempat_lahir" class="form-label">Tempat Lahir :</label>
                                <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control @error('tempat_lahir') is-invalid @enderror" value="{{ old('tempat_lahir') }}">
                                @error('tempat_lahir')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="tanggal_lahir" class="form-label">Tanggal Lahir :</label>
                                <input type="text" name="tanggal_lahir" id="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror" value="{{ old('tanggal_lahir') }}">
                                @error('tanggal_lahir')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat :</label>
                                <input type="text" name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat') }}">
                                @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            @if (session('level') == 4)
                            <div class="mb-3">
                                <label for="angkatan" class="form-label">Angkatan :</label>
                                <input type="text" name="angkatan" id="angkatan" class="form-control @error('angkatan') is-invalid @enderror" readonly>
                            </div>
                            @endif
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="btn btn-danger mb-3">Cancel</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>