<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Kelompok 2">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Dashboard SIAP</title>
</head>

<body>
    <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10 shadow-lg">
        <div class="absolute inset-0">
            <img class="object-cover w-full h-full bg-transparent" src="https://cdn.rareblocks.xyz/collection/celebration/images/headers/3/coworking-space.jpg" alt=""/>
        </div>
        <div class="container m-auto">
            <div class="flex items-center justify-between relative">
                <div class="px-4">
                    <a href="#home" class="font-semibold text-3xl text-white block py-6">ASIAP Undip</a>
                </div>
                <div class="flex items-center px-4">
                    <div class="items-center px-6 py-3 text-base frame flex items-center gap-24 relative min-w-full min-h-81">
                        <div class="rectangle w-81 h-81 bg-yellow-300 rounded-65"></div>
                        <div class="muhammad-akmal-wrapper inline-flex items-center justify-end gap-10 flex-0">
                            <p class="muhammad-akmal relative inline font-inter font-normal text-transparent text-18 leading-normal">
                                <span class="text-wrapper text-white">Hello, Welcome {{ auth()->user()->name }}</span><br>
                                <a href="/logout"> 
                                    <span class="span font-inter-italic font-italic text-blue-600 italic hover:text-blue-500 hover:underline">Logout</span>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="col-span-2">
        <div class="container m-auto">
            <div class="flex justify-between items-center py-3 border-b pt-28">
                <h1 class="text-xl font-semibold m-auto">Registrasi Mahasiswa</h1>
            </div>
            <section class="p-4">
        <div class="bg-white shadow-lg p-6 rounded-lg">
            <form method="POST" action="/register" class="space-y-4">
                @csrf
                <div>
                    <label for="nama_lengkap" class="block text-sm font-medium text-gray-600">Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" id="nama_lengkap" value="{{ old('nama_lengkap') }}" class="w-full px-3 py-2 border rounded-md" required>
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" class="w-full px-3 py-2 border rounded-md" required>
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
                    <input type="password" name="password" id="password" value="{{ old('password') }}" class="w-full px-3 py-2 border rounded-md" required>
                </div>
                <div>
                    <label for="NIK" class="block text-sm font-medium text-gray-600">NIK</label>
                    <input type="text" name="NIK" id="NIK" value="{{ old('NIK') }}" class="w-full px-3 py-2 border rounded-md" required>
                </div>
                <button type="submit" class="w-full bg-blue-500 text-white font-medium py-2 rounded-md hover:bg-blue-600">Register</button>
                <a href="/admin/operator">
                <button type="button" class="w-full bg-red-500 text-white font-medium py-2 mt-4 rounded-md hover:bg-red-600">Back</button>
                </a>
            </form>
        </div>
        </div>
    </section>
</main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/dashboard.js"></script>
</body>

</html>