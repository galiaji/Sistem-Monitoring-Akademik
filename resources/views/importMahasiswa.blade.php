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
                <h1 class="text-xl font-semibold m-auto">Import Data Mahasiswa</h1>
            </div>
            <section class="p-4">
        <div class="bg-white shadow-lg p-6 rounded-lg">
            
            <form method="POST" action="{{ route('importMahasiswa') }}" class="space-y-4" enctype="multipart/form-data">
                @csrf
                <input type="file" class="form-control" name="file"></input>
                <button type="submit">Import</button>
            </form>
        </div>
        </div>
    </section>
</main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/dashboard.js"></script>
</body>

</html>