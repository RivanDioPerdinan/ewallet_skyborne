<!-- Navbar dengan Alpine.js -->
<nav x-data="{ openLogin: false, openRegister: false }" class="navbar bg-gray-900 text-white rounded-full px-6 py-3 flex items-center justify-between shadow-lg w-full max-w-5xl mx-auto mt-5">
    <!-- Logo -->
    <div class="flex items-center space-x-2">
        <img src="/assets/images/logoskyborne.png" alt="Logo" class="h-6 w-6">
        <span class="text-lg font-semibold">Skyborne</span>
    </div>

    <!-- Menu -->
    <div class="flex space-x-6">
        <a href="/" class="text-[#38AAFF] hover:text-white px-4 py-2 rounded-lg transition duration-300 hover:bg-[#38AAFF]">Home</a>
        <a href="/about" class="text-[#38AAFF] hover:text-white px-4 py-2 rounded-lg transition duration-300 hover:bg-[#38AAFF]">About</a>
        <a href="#" class="text-[#38AAFF] hover:text-white px-4 py-2 rounded-lg transition duration-300 hover:bg-[#38AAFF]">SkySplit</a>
        <a href="#" class="text-[#38AAFF] hover:text-white px-4 py-2 rounded-lg transition duration-300 hover:bg-[#38AAFF]">SkyTimeCapsule</a>
    </div>

    <!-- Login Button -->
    <button @click="openLogin = true" class="border border-[#38AAFF] px-4 py-2 rounded-full text-[#38AAFF] hover:text-white hover:bg-[#38AAFF] transition duration-300">
        Login
    </button>

    <!-- Modal Login -->
    <div x-show="openLogin" x-cloak class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
        <div class="modal bg-white rounded-lg shadow-lg w-[600px] flex relative">
            
            <!-- Bagian Kiri (Form Login) -->
            <div class="w-1/2 p-6">
                <!-- Close Button -->
                <button @click="openLogin = false" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 text-2xl">
                    &times;
                </button>
                <h2 class="text-2xl font-bold text-gray-800 text-center">SkyPay</h2>
                <p class="text-gray-500 text-center mb-4 text-sm">Let's Take Off, & Make Some Adventure!</p>

                <input type="text" placeholder="Username" class="w-full p-2 mb-3 border rounded-md text-blue-600">
                <input type="password" placeholder="Password" class="w-full p-2 mb-3 border rounded-md text-blue-600">
                <button class="w-full bg-blue-700 text-white py-2 rounded-md">LOGIN</button>

                <div class="text-center mt-3 text-gray-600">Login with Others</div>
                <button class="w-full border py-2 mt-2 flex items-center justify-center space-x-2 rounded-md">
                    <img src="/assets/images/google_logo.png" alt="Google" class="h-5">
                    <span class="text-black">Login with Google</span>
                </button>

                <!-- Tombol Register yang membuka modal Register -->
                <button @click="openLogin = false; openRegister = true" class="w-full mt-3 bg-blue-700 text-white py-2 rounded-md">
                    REGISTER
                </button>
            </div>

            <!-- Bagian Kanan (Gambar) -->
            <div class="w-1/2 bg-gray-100 flex items-center justify-center">
                <img src="/assets/images/skybornelogo.png" alt="Skyborne Logo" class="w-3/4">
            </div>
        </div>
    </div>

    <!-- Modal Register -->
    <div x-show="openRegister" x-cloak class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
        <div class="modal bg-white rounded-lg shadow-lg w-[600px] flex relative">
            
            <!-- Bagian Kiri (Form Register) -->
            <div class="w-1/2 p-6">
                <!-- Close Button -->
                <button @click="openRegister = false" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 text-2xl">
                    &times;
                </button>
                <h2 class="text-2xl font-bold text-gray-800 text-center">Create an Account</h2>
                <p class="text-gray-500 text-center mb-4">Join us and start your adventure!</p>

                <input type="text" placeholder="Full Name" class="w-full p-2 mb-3 border rounded-md text-blue-600">
                <input type="email" placeholder="Email" class="w-full p-2 mb-3 border rounded-md text-blue-600">
                <input type="tel" placeholder="Mobile Number" class="w-full p-2 mb-3 border rounded-md text-blue-600">
                <input type="password" placeholder="Password" class="w-full p-2 mb-3 border rounded-md text-blue-600">
                <input type="password" placeholder="Repeat Password" class="w-full p-2 mb-3 border rounded-md text-blue-600">
                <button class="w-full bg-green-600 text-white py-2 rounded-md">REGISTER</button>

                <div class="text-center mt-3 text-gray-600">Or register with</div>
                <button class="w-full border py-2 mt-2 flex items-center justify-center space-x-2 rounded-md">
                    <img src="/assets/images/google_logo.png" alt="Google" class="h-5">
                    <span class="text-black">Register with Google</span>
                </button>

                <!-- Tombol kembali ke Login -->
                <button @click="openRegister = false; openLogin = true" class="w-full mt-3 bg-gray-500 text-white py-2 rounded-md">
                    BACK TO LOGIN
                </button>
            </div>

            <!-- Bagian Kanan (Gambar) -->
            <div class="w-1/2 bg-gray-100 flex items-center justify-center">
                <img src="/assets/images/skybornelogo.png" alt="Skyborne Logo" class="w-3/4">
            </div>
        </div>
    </div>

    <!-- Tambahkan CSS untuk x-cloak -->
    <style>
        [x-cloak] {
            display: none !important;
        }
        .modal, .navbar {
            box-shadow: 0px 0px 20px rgba(56, 170, 255, 0.8);
            border: 2px solid #38AAFF;
            animation: glow 1.5s infinite alternate;
        }

        @keyframes glow {
            from {
                box-shadow: 0px 0px 15px rgba(56, 170, 255, 0.6);
            }
            to {
                box-shadow: 0px 0px 25px rgba(56, 170, 255, 1);
            }
        }
    </style>
    

</nav>

<!-- Include Alpine.js -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x/dist/cdn.min.js" defer></script>
