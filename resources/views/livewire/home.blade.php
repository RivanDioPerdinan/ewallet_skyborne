<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Digital World</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .glow {
            text-shadow: 0 0 10px rgba(4, 34, 122, 0.9);
            color: rgba(4, 34, 122);
        }
        #app {
            margin: 0;
            width: 100%;
            height: 100%;
        }

        body canvas {
            display: block;
            position: fixed;
            z-index: 9999; /* Ubah dari -1 ke 9999 supaya efeknya terlihat */
            top: 0;
            left: 0;
            pointer-events: none; /* Supaya tidak mengganggu interaksi lain */
        }
    </style>
</head>
<body class="bg-white">

    @include('livewire.partials.navbar')

    <!-- Header Section -->
    <header class=" text-white py-20 px-6 md:px-20 flex flex-col md:flex-row items-center justify-between">
        <div class="md:w-1/2 text-center md:text-left">
            <h1 class="text-4xl md:text-5xl font-bold leading-tight text-black">
                Simplifying <span class="glow">Payments</span>, Saving <span class="glow">Time</span>, and <span class="glow">Money</span>
            </h1>
            <p class="mt-4 text-lg md:text-xl text-black">
                Discover innovative solutions for effortless bill splitting, seamless transactions, and smart savings. 
                Our user-friendly platform empowers you to manage your finances with ease and confidence.
            </p>
            <button class="mt-6 px-6 py-3 bg-white text-blue-600 font-semibold rounded-lg shadow-md hover:bg-gray-200 transition duration-300">
                Get Started
            </button>
            <button class="mt-6 px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-gray-200 transition duration-300">
                Learn More
            </button>
        </div>

        <!-- Gambar dipindah ke kanan -->
        <div class="md:w-1/2 mt-6 md:mt-0 flex justify-end">
            <img src="/assets/images/illustration_herosection.png" alt="Wallet Image" class="w-64 md:w-80">
        </div>
    </header>

    <!-- Features Section -->
    <section class="text-center py-20 px-6 md:px-20">
        <h2 class="text-3xl font-bold text-gray-800">Revolutionizing Digital Payments with Skyborne's Best Features!</h2>
        <p class="text-gray-600 mt-4">
            Skyborne empowers businesses by providing premium digital solutions tailored to enhance brand positioning, 
            drive revenue growth, and ensure long-term scalability. With cutting-edge creativity and strategic innovation, 
            Skyborne delivers high-quality products that strengthen market presence, optimize business potential, 
            and offer cost-effective, future-proof solutions. By collaborating with Skyborne, clients gain access 
            to expertise that elevates their brand, maximizes efficiency, and unlocks limitless possibilities.
        </p>
        <div class="mt-10 flex flex-col md:flex-row justify-center space-y-6 md:space-y-0 md:space-x-10">
            <div class="bg-white shadow-lg rounded-lg p-6 w-60">
                <img src="/assets/images/skysplit.jpeg" alt="SkySplit" class="rounded-lg">
                <h3 class="mt-4 text-xl font-semibold">SkySplit</h3>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-6 w-60">
                <img src="/assets/images/skyflash.jpeg" alt="SkyFlash" class="rounded-lg">
                <h3 class="mt-4 text-xl font-semibold">SkyFlash</h3>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-6 w-60">
                <img src="/assets/images/skytimecapsule.jpeg" alt="SkyTimeCapsule" class="rounded-lg">
                <h3 class="mt-4 text-xl font-semibold">SkyTimeCapsule</h3>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('livewire.partials.footer')

    <!-- Neon Cursor Script -->
    <script>
        // Memuat script eksternal untuk efek kursor partikel
        const script = document.createElement('script');
        script.src = 'https://cdn.jsdelivr.net/npm/threejs-toys@0.0.8/build/threejs-toys.module.cdn.min.js';
        script.onload = function() {
            const pc = particlesCursor({
                el: document.body,
                gpgpuSize: 512,
                colors: [0x00ff00, 0x0000ff],
                color: 0xff0000,
                coordScale: 0.5,
                noiseIntensity: 0.001,
                noiseTimeCoef: 0.0001,
                pointSize: 5,
                pointDecay: 0.0025,
                sleepRadiusX: 250,
                sleepRadiusY: 250,
                sleepTimeCoefX: 0.001,
                sleepTimeCoefY: 0.002
            });

            document.body.addEventListener('click', () => {
                pc.uniforms.uColor.value.set(Math.random() * 0xffffff);
                pc.uniforms.uCoordScale.value = 0.001 + Math.random() * 2;
                pc.uniforms.uNoiseIntensity.value = 0.0001 + Math.random() * 0.001;
                pc.uniforms.uPointSize.value = 1 + Math.random() * 10;
            });
        };
        document.body.appendChild(script);
    </script>

</body>
</html>
