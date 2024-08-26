<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Nattypay</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">

    <!-- Header Section -->
    <header class="text-center py-8">
        <h1 class="text-4xl font-bold">Get In Touch With Us</h1>
        <p class="mt-4 text-lg">For any inquiries or assistance, do not hesitate to reach out to Nattypay, your satisfaction is our priority.</p>
    </header>

    <!-- Contact Form Section -->
    <section class="max-w-md mx-auto p-8 bg-white rounded shadow-md">
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Your Name</label>
            <input type="text" id="name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md">
        </div>
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Your Email</label>
            <input type="email" id="email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md">
        </div>
        <div class="mb-4">
            <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
            <input type="text" id="phone" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md">
        </div>
        <div class="mb-4">
            <label for="message" class="block text-sm font-medium text-gray-700">Type your message</label>
            <textarea id="message" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md"></textarea>
        </div>
        <button class="w-full bg-yellow-500 text-white py-2 rounded-md hover:bg-yellow-600">Send Message</button>
    </section>

    <!-- Office Address Section -->
    <section class="max-w-3xl mx-auto mt-16 text-center">
        <h2 class="text-2xl font-bold">Office Address</h2>
        <p class="mt-4">C3 & C4 Suite second floor Epson place new market road front Main market Onitsha Anambra state</p>
        <div class="mt-8">
            <img src="{{ asset('images/map.png') }}" alt="Map" class="w-full h-64 object-cover rounded-md shadow-md">
        </div>
    </section>

    <!-- Download App Section -->
    <section class="max-w-3xl mx-auto mt-16 text-center">
        <h2 class="text-2xl font-bold">Try Nattypay On Your Mobile Phone for Free</h2>
        <div class="mt-8 flex justify-center">
            <img src="{{ asset('images/appstore.png') }}" alt="App Store" class="w-32 mx-4">
            <img src="{{ asset('images/googleplay.png') }}" alt="Google Play" class="w-32 mx-4">
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="mt-16 bg-gray-800 text-white py-8 text-center">
        <p>&copy; 2024 Nattypay. All rights reserved.</p>
    </footer>

</body>
</html>
