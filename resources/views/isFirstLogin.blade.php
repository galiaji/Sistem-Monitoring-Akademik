<title>Dashboard Operator</title>
<script src="https://cdn.tailwindcss.com"></script>
<link href="/resources/css/style.css" rel="stylesheet">
<body class="container m-auto">
<!--Header Start-->
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
<!--Header End-->

<!-- Hero Section Start -->
<section id="home" class="pt-28">
    <div class="container mx-auto m-auto">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="mb-6 text-xl font-bold">Pengisian Data Pribadi</div>
            <form action="/firstLogin" method="POST" class="needs-validation">
                @csrf
                @method('put')
                <div class="mb-4">
                <label for="jalur_masuk" class="block text-gray-700 text-sm font-bold mb-2">Jalur Masuk</label>
                <select class="form-select @error('jalur_masuk') border-red-500 @enderror border rounded p-2 w-full focus:outline-none focus:ring focus:border-blue-300" name="jalur_masuk">
                    <option value="" selected>--Pilih Jalur Masuk--</option>
                    <option value="SNMPTN" {{ (old('jalur_masuk') == "SNMPTN")?"selected":"" }}>SNMPTN</option>
                    <option value="SBMPTN" {{ (old('jalur_masuk') == "SBMPTN")?"selected":"" }}>SBMPTN</option>
                    <option value="Mandiri" {{ (old('jalur_masuk') == "Mandiri")?"selected":"" }}>Mandiri</option>
                    <option value="Lainnya" {{ (old('jalur_masuk') == "Lainnya")?"selected":"" }}>Lainnya</option>
                </select>
                @error('jalur_masuk')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
                </div>
                <div class="mb-4">
                <label for="no_telp" class="block text-gray-700 text-sm font-bold mb-2">No Telp</label>
                <input type="text" class="form-input @error('no_telp') border-red-500 @enderror border rounded p-2 w-full focus:outline-none focus:ring focus:border-blue-300" id="no_telp" name="no_telp" value="{{ old('no_telp') }}">
                @error('no_telp')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
                </div>
                <div class="mb-4">
                <label for="email_sso" class="block text-gray-700 text-sm font-bold mb-2">Email SSO</label>
                <input type="text" class="form-input @error('email_sso') border-red-500 @enderror border rounded p-2 w-full focus:outline-none focus:ring focus:border-blue-300" id="email_sso" name="email_sso" value="{{ old('email_sso') }}">
                @error('email_sso')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="alamat" class="block text-gray-700 text-sm font-bold mb-2">Alamat</label>
                <input type="text" class="form-input @error('alamat') border-red-500 @enderror border rounded p-2 w-full focus:outline-none focus:ring focus:border-blue-300" id="alamat" name="alamat" value="{{ old('alamat') }}">
                @error('alamat')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="kabupaten_kota" class="block text-gray-700 text-sm font-bold mb-2">Kabupaten/Kota</label>
                <input type="text" class="form-input @error('kabupaten_kota') border-red-500 @enderror border rounded p-2 w-full focus:outline-none focus:ring focus:border-blue-300" id="kabupaten_kota" name="kabupaten_kota" value="{{ old('kabupaten_kota') }}">
                @error('kabupaten_kota')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="provinsi" class="block text-gray-700 text-sm font-bold mb-2">Provinsi</label>
                <input type="text" class="form-input @error('provinsi') border-red-500 @enderror border rounded p-2 w-full focus:outline-none focus:ring focus:border-blue-300" id="provinsi" name="provinsi" value="{{ old('provinsi') }}">
                @error('provinsi')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password Baru</label>
                <input type="password" class="form-input @error('password') border-red-500 @enderror border rounded p-2 w-full focus:outline-none focus:ring focus:border-blue-300" id="password" name="password">
                @error('password')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="konfirmasi_password" class="block text-gray-700 text-sm font-bold mb-2">Konfirmasi Password Baru</label>
                <input type="password" class="form-input @error('konfirmasi_password') border-red-500 @enderror border rounded p-2 w-full focus:outline-none focus:ring focus:border-blue-300" id="konfirmasi_password" name="konfirmasi_password">
                @error('konfirmasi_password')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline-blue focus:border-blue-300 w-full">Submit</button>
            </form>
        </div>
    </div>
</section>

<!-- Menu Operator End -->
</body>