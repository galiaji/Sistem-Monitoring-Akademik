<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="/resources/css/style.css" rel="stylesheet">
</head>

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
                        <p class="text-lg text-black">24060121140094 | S1 Informatika</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Status Akademik Start -->
        <div class="container">
            <div class="flex">
                <div class="w-auto md:w-3/4 text-center bg-white shadow-lg text-white py-16 rounded-md px-6 mr-6 mt-6 ">
                    <h2 class="text-2xl font-semibold text-black">Status Akademik</h2>
                    <p class="text-black">Informasi selengkapnya mengenai status akademik silakan menghubungi akademik fakultas masing-masing</p><br>
                    <p class="text-black justify-center"><strong>Dosen wali:</strong> Dr. Prof. Dosen, S.Kom., M.Kom.</p>
                    <p class="text-black justify-center mb-10"><strong>NIP:</strong> 24060123456345</p>
                    <div class="flex items-center justify-center grid-cols-3 space-x-10 gap-4 mt-4 text-black">
                        <div>
                            <p><strong>Semester Akademik Sekarang:</strong><br>2023/2024</p>
                        </div>
                        <div>
                            <p><strong>Semester Studi:</strong><br>5</p>
                        </div>
                        <div>
                            <p><strong>Status Akademik:</strong></p>
                            <button class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 hover:shadow-lg">Aktif</button>
                        </div>
                    </div>
                </div>
                <!-- Status Akademik End -->

                <!-- Status Prestasi Akademik Start -->
                <div class="w-24 md:w-1/4 text-center mt-6 bg-white shadow-lg text-white py-12 rounded-md px-6">
                    <div class="p-4 max-w-md text-black mx-auto bg-white rounded-lg shadow-md">
                        <h1 class="text-2xl text-black font-semibold mb-4">Prestasi Akademik</h1>
                        <div class="flex items-center">
                            <div class="w-1/2 border-b border-gray-300 mr-4">
                                IPK
                            </div>
                            <div class="w-1/2 border-b border-gray-300">
                                SKSk
                            </div>
                        </div>
                        <div class="flex items-center mt-2">
                            <div class="w-1/2">
                                3.5
                            </div>
                            <div class="w-1/2">
                                84
                            </div>
                        </div>
                    </div>
                    <div class="w-full mt-6 mx-auto">
                        <a href="#" class="flex items-center bg-white shadow-lg rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:bg-white dark:hover:bg-white-700">
                            <div class="w-1/2">
                                <img class="w-full h-48 object-cover rounded-t-lg md:h-32 md:w-full md:rounded-none md:rounded-l-lg" src="/img/4.jpg" alt="">
                            </div>
                            <div class="w-1/2 p-4">
                                <h5 class="items-center mb-2 text-2xl font-bold tracking-tight text-black dark:text-black">Profile</h5>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"></p>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- Status Prestasi Akademik End -->

            </div>
            <div class="flex flex-wrap mb-6">
                <!-- Jadwal Dosen Start -->
                <div class="w-1/3 mt-6 mx-auto">
                    <a href="/internship" class="flex items-center bg-white shadow-lg rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:bg-white dark:hover:bg-white-700">
                        <div class="w-1/2">
                            <img class="w-full h-48 object-cover rounded-t-lg md:h-32 md:w-full md:rounded-none md:rounded-l-lg" src="/img/1.jpg" alt="">
                        </div>
                        <div class="w-1/2 p-4">
                            <h5 class="items-center mb-2 text-2xl font-bold tracking-tight text-black dark:text-black pl-6">PKL</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"></p>
                        </div>
                    </a>
                </div>
                <!-- Jadwal Dosen End -->

                <!-- Jadwal Kuliah Start -->
                <div class="w-1/3 mt-6 mx-auto px-6">
                    <a href="/khs" class="flex items-center bg-white shadow-lg rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:bg-white dark:hover:bg-white-700">
                        <div class="w-1/2">
                            <img class="w-full h-48 object-cover rounded-t-lg md:h-32 md:w-full md:rounded-none md:rounded-l-lg" src="/img/2.jpg" alt="">
                        </div>
                        <div class="w-1/2 p-4">
                            <h5 class="items-center mb-2 text-2xl font-bold tracking-tight text-black dark:text-black pl-6">KHS</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"></p>
                        </div>
                    </a>
                </div>
                <!-- Jadwal Kuliah End -->

                <!-- Akademik Start -->
                <div class="w-1/3 mt-6 mx-auto">
                    <a href="/irs" class="flex items-center bg-white shadow-lg rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:bg-white dark:hover:bg-white-700">
                        <div class="w-1/2">
                            <img class="w-full h-48 object-cover rounded-t-lg md:h-32 md:w-full md:rounded-none md:rounded-l-lg" src="/img/3.jpg" alt="">
                        </div>
                        <div class="w-1/2 p-4">
                            <h5 class="items-center mb-2 text-2xl font-bold tracking-tight text-black dark:text-black pl-6">IRS</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"></p>
                        </div>
                    </a>
                </div>
                <!-- Akademik End -->
            </div>
            <!-- Akademik End -->
        </div>
        </div>
    </section>
    <!-- Hero Section End -->
</body>

</html>