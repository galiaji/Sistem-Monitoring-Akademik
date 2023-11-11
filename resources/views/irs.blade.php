<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Daftar Entry IRS</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mx-auto mt-8">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h1 class="text-2xl font-semibold mb-4">Daftar Entry IRS</h1>

            <!-- Form for Semester, IP, SKS -->
            <form method="POST" action="{{ route('irs.store') }}">
                @csrf <!-- Add CSRF protection token -->
                <div class="mb-4">
                    <label class="block text-sm font-semibold mb-2" for="semester">Semester</label>
                    <select class="w-full px-3 py-2 border" id="semester" name="semester" required>
                        <option value="">Pilih Semester</option>
                        @foreach($uniqueSemesters as $semester)
                        <option value="{{ $semester }}">{{ $semester }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-semibold mb-2" for="ip">IP </label>
                    <input class="w-full px-3 py-2 border" type="text" id="ip" name="ip" placeholder="Masukkan IP" required>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-semibold mb-2" for="sks">SKS </label>
                    <input class="w-full px-3 py-2 border" type="text" id="sks" name="sks" placeholder="Masukkan SKS" required>
                </div>
                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600" type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>