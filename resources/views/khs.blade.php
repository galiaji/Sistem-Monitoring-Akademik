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

            <form method="POST" action="{{ route('khs.store') }}">
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

                <div id="courses">
                    <div class="course mb-4">
                        <label class="block text-sm font-semibold mb-2" for="course">Mata Kuliah</label>
                        <select class="w-full px-3 py-2 border course-select" name="courses[0]" required>
                            <option value="">Pilih Mata Kuliah</option>
                            <option value="Matkul1">Matkul1</option>
                            <option value="Matkul2">Matkul2</option>
                            <option value="Matkul3">Matkul3</option>
                            <option value="Matkul4">Matkul4</option>
                            <!-- Add options for available courses -->
                        </select>

                        <div class="additionalFields" style="display: none;">
                            <label class="block text-sm font-semibold mb-2" for="grade">Nilai</label>
                            <select class="w-full px-3 py-2 border" name="grades[0]">
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                            </select>

                            <label class="block text-sm font-semibold mb-2" for="sks">SKS</label>
                            <select class="w-full px-3 py-2 border" name="sks[0]" required>
                                <option value="">Pilih SKS</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                    </div>
                </div>

                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600" type="button" onclick="addCourse()">Tambah Mata Kuliah</button>
                <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600" type="submit">Submit</button>
            </form>
        </div>
    </div>

    <script>
        let index = 1; // Indeks baru untuk setiap elemen 'course'

        function addCourse() {
            const course = document.querySelector('.course');
            const clonedCourse = course.cloneNode(true);
            const courseSelect = clonedCourse.querySelector('.course-select');
            const additionalFields = clonedCourse.querySelector('.additionalFields');
            additionalFields.style.display = 'none';

            // Mendapatkan daftar semua elemen select dari mata kuliah yang telah dipilih
            const selectedCourses = Array.from(document.querySelectorAll('.course-select')).map(course => course.value);

            // Mendapatkan semua opsi mata kuliah
            const options = Array.from(courseSelect.options).map(option => option.value);

            // Filter opsi mata kuliah yang belum dipilih
            const nonSelectedCourses = options.filter(course => !selectedCourses.includes(course));

            // Mengubah opsi di select untuk membatasi mata kuliah yang belum dipilih
            for (const option of courseSelect.options) {
                if (nonSelectedCourses.includes(option.value)) {
                    option.disabled = false;
                } else {
                    option.disabled = true;
                }
            }

            // Mengatur nama dengan indeks baru
            courseSelect.setAttribute('name', `courses[${index}]`);
            additionalFields.querySelector('select[name="grades[0]"]').setAttribute('name', `grades[${index}]`);
            additionalFields.querySelector('select[name="sks[0]"]').setAttribute('name', `sks[${index}]`);

            const courses = document.getElementById('courses');
            courses.appendChild(clonedCourse);

            index++;
        }

        document.getElementById('courses').addEventListener('change', function(e) {
            if (e.target.classList.contains('course-select')) {
                const additionalFields = e.target.nextElementSibling;
                if (e.target.value === 'Matkul1' || e.target.value === 'Matkul2') {
                    additionalFields.style.display = 'block';
                } else {
                    additionalFields.style.display = 'none';
                }
            }
        });
    </script>

</body>