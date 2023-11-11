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
                @csrf
                <div class="mb-4">
                    <label class="block text-sm font-semibold mb-2" for="nim">NIM</label>
                    <input class="w-full px-3 py-2 border" type="text" name="nim" value="{{ $nim }}" readonly>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-semibold mb-2" for="semester">Semester</label>
                    <select class="w-full px-3 py-2 border" id="semester_aktif" name="semester_aktif" required>
                        <option value="">Pilih Semester_aktif</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-semibold mb-2" for="semester">Semester</label>
                    <select class="w-full px-3 py-2 border" id="semester" name="semester" required>
                        <option value="">Pilih Semester</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-semibold mb-2" for="IP">IP </label>
                    <input class="w-full px-3 py-2 border" type="text" id="IP" name="IP" placeholder="Masukkan IP" required>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-semibold mb-2" for="SKS">SKS </label>
                    <input class="w-full px-3 py-2 border" type="text" id="SKS" name="SKS" placeholder="Masukkan SKS" required>
                </div>
                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600" type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>