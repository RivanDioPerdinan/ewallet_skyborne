<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Skyborne</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .card {
            box-shadow: 0px 0px 20px rgba(56, 170, 255, 0.8);
            border: 2px solid #38AAFF;
            animation: glow 1.5s infinite alternate;
        }
    </style>
</head>
<body class="bg-white">

    @include('livewire.partials.navbar')

    <!-- Hero Section -->
    <section class="bg-gray-900 text-white py-20 px-6 md:px-20 text-center">
        <img src="/assets/images/skybornelogowhite.png" alt="Logo Skyborne" class="rounded-full w-32 mx-auto">
        <h1 class="text-4xl md:text-5xl font-bold">About Skyborne</h1>
        <p class="mt-4 text-lg">Empowering Businesses with Cutting-Edge Digital Solutions</p>
    </section>

    <!-- Our Mission & Vision -->
    <section class="py-20 px-6 md:px-20 text-center bg-cover bg-center" style="background-image: url('/assets/images/bgsky.jpeg');">
        <h2 class="text-3xl font-bold text-gray-800">Our Vision & Mission</h2>
        <div class="mt-6 flex flex-col md:flex-row justify-center md:space-x-10">
            <div class="card bg-gray-900 shadow-lg rounded-lg p-6 w-80 text-center">
                <h3 class="text-xl font-semibold text-white">Our Vision</h3>
                <p class="mt-3 text-white">To revolutionize digital transactions and financial technology by providing seamless, efficient, and secure solutions for businesses and individuals.</p>
            </div>
            <div class="card bg-gray-900 shadow-lg rounded-lg p-6 w-80 text-center">
                <h3 class="text-xl font-semibold text-white">Our Mission</h3>
                <p class="mt-3 text-white">We are committed to innovation, reliability, and customer-centricity to simplify financial transactions and drive digital transformation.</p>
            </div>
        </div>
    </section>

    <!-- Our Core Values -->
    <section class="bg-gray-100 py-20 px-6 md:px-20 text-center">
        <h2 class="text-3xl font-bold text-gray-800">Our Core Values</h2>
        <div class="mt-10 flex flex-col md:flex-row justify-center space-y-6 md:space-y-0 md:space-x-10">
            <div class="w-60 text-center">
                <h3 class="text-xl font-semibold">Innovation</h3>
                <p class="text-gray-600">We embrace new technologies to create cutting-edge solutions.</p>
            </div>
            <div class="w-60 text-center">
                <h3 class="text-xl font-semibold">Integrity</h3>
                <p class="text-gray-600">Transparency and trust are at the core of our operations.</p>
            </div>
            <div class="w-60 text-center">
                <h3 class="text-xl font-semibold">Customer-Centric</h3>
                <p class="text-gray-600">We prioritize our customers’ needs and experiences.</p>
            </div>
        </div>
    </section>

    <!-- Meet Our Team -->
    <section class="py-20 px-6 md:px-20 text-center">
        <h2 class="text-3xl font-bold text-gray-800">Meet Our Team</h2>
        <p class="mt-4 text-gray-600">The talented individuals driving innovation at Skyborne.</p>
        <div class="mt-10 flex flex-col md:flex-row justify-center space-y-6 md:space-y-0 md:space-x-10">
            <div class="w-60 text-center">
                <img src="/assets/images/team_ceo.jpg" alt="CEO" class="rounded-full w-32 mx-auto">
                <h3 class="mt-4 text-xl font-semibold">John Doe</h3>
                <p class="text-gray-600">CEO & Founder</p>
            </div>
            <div class="w-60 text-center">
                <img src="/assets/images/team_cto.jpg" alt="CTO" class="rounded-full w-32 mx-auto">
                <h3 class="mt-4 text-xl font-semibold">Jane Smith</h3>
                <p class="text-gray-600">Chief Technology Officer</p>
            </div>
            <div class="w-60 text-center">
                <img src="/assets/images/team_marketing.jpg" alt="Marketing Head" class="rounded-full w-32 mx-auto">
                <h3 class="mt-4 text-xl font-semibold">Mike Johnson</h3>
                <p class="text-gray-600">Head of Marketing</p>
            </div>
        </div>
    </section>

    <!-- Why Choose Us? (Marketing Section) -->
    <section class="bg-gray-100 py-20 px-6 md:px-20 text-center">
        <h2 class="text-3xl font-bold text-gray-800">Why Choose Skyborne?</h2>
        <p class="mt-4 text-gray-600">We provide the best digital solutions to boost your business and simplify your transactions.</p>
        <div class="mt-10 flex flex-col md:flex-row justify-center space-y-6 md:space-y-0 md:space-x-10">
            <div class="bg-white shadow-lg rounded-lg p-6 w-60 text-center">
                <h3 class="text-xl font-semibold">Seamless Transactions</h3>
                <p class="text-gray-600">Our technology ensures fast, secure, and smooth digital payments.</p>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-6 w-60 text-center">
                <h3 class="text-xl font-semibold">Cost Efficiency</h3>
                <p class="text-gray-600">We help businesses optimize costs while maintaining quality services.</p>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-6 w-60 text-center">
                <h3 class="text-xl font-semibold">Business Growth</h3>
                <p class="text-gray-600">We empower businesses with digital transformation strategies.</p>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 px-6 md:px-20 text-center">
        <h2 class="text-3xl font-bold text-gray-800">Get in Touch</h2>
        <p class="mt-4 text-gray-600">Partner with us and take your business to new heights.</p>
        <button class="mt-6 px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-gray-200 transition duration-300">
            Contact Us
        </button>
    </section>

    @include('livewire.partials.footer')

</body>
</html>

