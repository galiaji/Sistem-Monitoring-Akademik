<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Daftar Entry KHS</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
    <div class="container mx-auto mt-8">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h1 class="text-2xl font-semibold mb-4">Input KHS Data</h1>

            <form method="POST" action="{{ route('khs.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label class="block text-sm font-semibold mb-2" for="nim">NIM</label>
                    <input class="w-full px-3 py-2 border" type="text" name="nim" value="{{ $nim }}" readonly>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-semibold mb-2" for="semester">Semester</label>
                    <select class="w-full px-3 py-2 border" name="semester" required>
                        <option value="">Pilih Semester</option>
                        @for($i = 1; $i <= 14; $i++) <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-semibold mb-2" for="ip">IP</label>
                    <select class="w-full px-3 py-2 border" name="ip" required>
                        @for($i = 1; $i <= 4; $i +=0.01) <option value="{{ number_format($i, 2) }}">{{ number_format($i, 2) }}</option>
                            @endfor
                    </select>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-semibold mb-2" for="ipk">IPK</label>
                    <select class="w-full px-3 py-2 border" name="ipk" required>
                        @for($i = 1; $i <= 4; $i +=0.01) <option value="{{ number_format($i, 2) }}">{{ number_format($i, 2) }}</option>
                            @endfor
                    </select>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-semibold mb-2" for="sks">SKS</label>
                    <select class="w-full px-3 py-2 border" name="sks" required>
                        @for($i = 1; $i <= 24; $i++) <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                    </select>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-semibold mb-2" for="sksk">SKSK</label>
                    <input class="w-full px-3 py-2 border" type="text" name="sksk" placeholder="Masukkan SKSK" required>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-semibold mb-2" for="pdf_file">PDF File</label>
                    <input type="file" name="pdf_file" accept=".pdf" required>
                </div>
                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600" type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>