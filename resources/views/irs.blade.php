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
                    <label class="block text-sm font-semibold mb-2" for="semester_aktif">Semester Aktif</label>
                    <select class="w-full px-3 py-2 border" id="semester_aktif" name="semester_aktif" required>
                        <option value="" selected disabled>Pilih Semester Aktif</option>
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
                        <option value="" selected disabled>Pilih Semester</option>
                        <!-- Di Isi pakai Java Script di bawah -->
                    </select>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-semibold mb-2" for="IP">IP </label>
                    <select class="w-full px-3 py-2 border" id="IP" name="IP" required>
                        <option value="" selected disabled>Pilih IP Semester</option>
                        <!-- menggunakan kenaikan 0.01 dari 1.00 hingga 4.00 -->
                        <?php
                        $startValue = 1.00;
                        $endValue = 4.00;
                        $step = 0.01;

                        for ($value = $startValue; $value <= $endValue; $value += $step) {
                            echo '<option value="' . number_format($value, 2) . '">' . number_format($value, 2) . '</option>';
                        }
                        ?>
                    </select>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-semibold mb-2" for="SKS">SKS </label>
                    <select class="w-full px-3 py-2 border" id="SKS" name="SKS" required>
                        <option value="" selected disabled>Pilih SKS</option>
                        <!-- menggunakan kenaikan 0.01 dari 1.00 hingga 4.00 -->
                        <?php
                        $startValue = 1;
                        $endValue = 24;
                        $step = 1;

                        for ($value = $startValue; $value <= $endValue; $value += $step) {
                            echo '<option value="' . number_format($value, 2) . '">' . number_format($value, 2) . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        // Ambil elemen-elemen select
                        var semesterAktifSelect = document.getElementById('semester_aktif');
                        var semesterSelect = document.getElementById('semester');

                        // Tambahkan event listener untuk perubahan nilai pada semesterAktifSelect
                        semesterAktifSelect.addEventListener('change', function() {
                            // Hapus opsi-opsi sebelumnya pada semesterSelect
                            semesterSelect.innerHTML = '';

                            // Ambil nilai semester aktif
                            var semesterAktif = parseInt(semesterAktifSelect.value);

                            // Tambahkan opsi-opsi baru pada semesterSelect
                            for (var i = 1; i < semesterAktif; i++) {
                                var option = document.createElement('option');
                                option.value = i;
                                option.text = i;
                                semesterSelect.add(option);
                            }
                        });
                    });
                </script>
                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600" type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>