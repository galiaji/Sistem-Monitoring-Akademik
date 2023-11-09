    <title>Dashboard Operator</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="/resources/css/style.css" rel="stylesheet">

    <body class="container m-auto">
        <!--Header Start-->
        <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10 shadow-lg">
            <div class="absolute inset-0">
                <img class="object-cover w-full h-full bg-transparent" src="https://cdn.rareblocks.xyz/collection/celebration/images/headers/3/coworking-space.jpg" alt="" />
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
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-secondary span font-inter-italic font-italic text-blue-600 italic hover:text-blue-500 hover:underline">Logout >></button>
                                </form>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--Header End-->

        <!-- Hero Section Start -->
        <section id="home" class="pt-28">
            <div class="container">
                <div class="hero-section bg-white shadow-lg text-white py-12 rounded-md px-1">
                    <div class="container mx-auto flex flex-wrap items-center">
                        <div class="w-16 h-16 bg-gray-500 rounded-full mr-4">
                        </div>
                        <div>
                            <h1 class="text-2xl font-semibold text-black">{{ auth()->user()->name }}</h1>
                            <p class="text-lg text-black"></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Menu Operator Start -->
            <div class="container mx-auto">
                <div class="grid grid-cols-2 gap-4">
                    <!-- Kartu Kiri -->
                    <div class="bg-white text-black border border-gray-200 rounded-lg shadow-sm hover:shadow-lg dark:bg-white mt-6 transition duration-300 ease-in-out">
                        <a href="/register">
                            <img class="rounded-t-lg w-full h-auto max-h-48 object-cover" src="/img/1.jpg" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="/register">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight">Membuat Akun</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Membuat akun mahasiswa baru</p>
                            <a href="/register">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Kartu Kanan -->
                    <div class="bg-white text-black border border-gray-200 rounded-lg shadow-sm hover:shadow-lg dark:bg-white mt-6 transition duration-300 ease-in-out">
                        <a href="#">
                            <img class="rounded-t-lg w-full h-auto max-h-48 object-cover" src="/img/2.jpg" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight">Generate Password</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Menggenerate dan mereset password mahasiswa</p>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <!-- Kartu Kiri -->
                    <div class="bg-white text-black border border-gray-200 rounded-lg shadow-sm hover:shadow-lg dark:bg-white mt-3 transition duration-300 ease-in-out">
                        <a href="/admin/operator/importFormMahasiswa">
                            <img class="rounded-t-lg w-full h-auto max-h-48 object-cover" src="/img/2.jpg" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="/admin/operator/importFormMahasiswa">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight">Import Akun Mahasiswa</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Mengimport data akun mahasiswa dari excel</p>
                            <a href="/admin/operator/importFormMahasiswa">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Menu Operator End -->
    </body>