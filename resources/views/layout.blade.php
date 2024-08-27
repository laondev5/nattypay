<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Nattypay</title>
   @vite('resources/css/app.css')
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>
<body class="bg-[#F9F9F9]">

     {{-- <!-- Header Section -->
    <header class="text-center bg-white px-[4rem]">
       <!-- Main navigation container -->
<nav
  class="flex-no-wrap relative flex w-full items-center justify-between   dark:bg-neutral-700 lg:flex-wrap lg:justify-start lg:py-4">
  <div class="flex w-full flex-wrap items-center justify-between px-3">
    <!-- Hamburger button for mobile view -->
    <button
      class="block border-0 bg-transparent px-2 text-black/50 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 dark:text-neutral-200 lg:hidden"
      type="button"
      data-twe-collapse-init
      data-twe-target="#navbarSupportedContent1"
      aria-controls="navbarSupportedContent1"
      aria-expanded="false"
      aria-label="Toggle navigation">
      <!-- Hamburger icon -->
      <span
        class="[&>svg]:w-7 [&>svg]:stroke-black/50 dark:[&>svg]:stroke-neutral-200">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 24 24"
          fill="currentColor">
          <path
            fill-rule="evenodd"
            d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
            clip-rule="evenodd" />
        </svg>
      </span>
    </button>

    <!-- Collapsible navigation container -->
    <div
      class="!visible hidden flex-grow basis-[100%] items-center lg:!flex lg:basis-auto"
      id="navbarSupportedContent1"
      data-twe-collapse-item>
      <!-- Logo -->
      <a
        class=" me-5 ms-2 mt-1 flex items-center text-neutral-900 hover:text-neutral-900 focus:text-neutral-900 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 lg:mb-0 lg:mt-0"
        href="#">
        <img src="{{ asset('image/logo.png') }}" alt="Logo" class="w-[4rem] h-[4rem]" loading="lazy">
      </a>
      <!-- Left navigation links -->
      <ul
        class="list-style-none me-auto flex flex-col ps-0 lg:flex-row"
        data-twe-navbar-nav-ref>
        <li class="mb-4 lg:mb-0 lg:pe-2 hover:bg-gray-100 py-2 px-4 hover:rounded-md" data-twe-nav-item-ref>
          <!-- Dashboard link -->
          <a
            class="text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80 lg:px-2"
            href="#"
            data-twe-nav-link-ref
            >Home</a
          >
        </li>
        <!-- Team link -->
        <li class="mb-4 lg:mb-0 lg:pe-2 hover:bg-gray-100 py-2 px-4 hover:rounded-md" data-twe-nav-item-ref>
          <a
            class="text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80 lg:px-2"
            href="#"
            data-twe-nav-link-ref
            >About</a
          >
        </li>
        <!-- Projects link -->
        <li class="mb-4 lg:mb-0 lg:pe-2 hover:bg-gray-100 py-2 px-4 hover:rounded-md" data-twe-nav-item-ref>
          <a
            class="text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80 lg:px-2"
            href="#"
            data-twe-nav-link-ref
            >FAQs</a
          >
        </li>
         <li class="mb-4 lg:mb-0 lg:pe-2 hover:bg-gray-100 py-2 px-4 hover:rounded-md" data-twe-nav-item-ref>
          <a
            class="text-black/60 transition duration-200 hover:text-black/80 hover:ease-in-out focus:text-black/80 active:text-black/80 motion-reduce:transition-none dark:text-white/60 dark:hover:text-white/80 dark:focus:text-white/80 dark:active:text-white/80 lg:px-2"
            href="#"
            data-twe-nav-link-ref
            >Contact Us</a
          >
        </li>
      </ul>
      <!-- Left links -->
    </div>

    <!-- Right elements -->
    <div class="relative flex items-center">
      <!-- Icon -->
      <a class="me-4 text-neutral-600 dark:text-white" href="#">
        <button
  type="button"
  class="inline-block rounded-full bg-warning px-6 py-3 text-xs font-medium uppercase leading-normal text-white shadow-warning-3 transition duration-150 ease-in-out hover:bg-warning-accent-300 hover:shadow-warning-2 focus:bg-warning-accent-300 focus:shadow-warning-2 focus:outline-none focus:ring-0 active:bg-warning-600 active:shadow-warning-2 motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong">
 Download App
</button>
      </a>

 
    </div>
    <!-- Right elements -->
  </div>
</nav>
    </header> --}}

    <nav class="bg-white shadow-md p-4">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Logo -->
            <div class="flex items-center">
                 <img src="{{ asset('image/logo.png') }}" alt="Logo" class="w-[4rem] h-[4rem]" loading="lazy"><!-- Replace with actual path to logo image -->
               
            </div>
            <!-- Navigation Links -->
            <div class="hidden md:flex space-x-8">
                <a href="#" class="text-gray-600 hover:text-yellow-500">Home</a>
                <a href="#" class="text-yellow-500 border-b-2 border-yellow-500">About</a> <!-- Active Link Style -->
                <a href="#" class="text-gray-600 hover:text-yellow-500">FAQs</a>
                <a href="#" class="text-gray-600 hover:text-yellow-500">Contact Us</a>
            </div>
            <!-- Download Button -->
            {{-- <button class="flex items-center px-6 py-2 border rounded text-yellow-500 border-yellow-500 hover:bg-yellow-500 hover:text-white transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a1 1 0 01-1-1V5.414L5.707 9.707a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0l5 5a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 01-1 1z" clip-rule="evenodd" />
                </svg>
                Download App
            </button> --}}
            <button
  type="button"
  class="inline-block rounded-full bg-warning px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-warning-3 transition duration-150 ease-in-out hover:bg-warning-accent-300 hover:shadow-warning-2 focus:bg-warning-accent-300 focus:shadow-warning-2 focus:outline-none focus:ring-0 active:bg-warning-600 active:shadow-warning-2 motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong">
  Download App
</button>
        </div>
    </nav>
<div class="w-full">
 @yield('content')
</div>
  

    <!-- Footer Section -->
    <footer class="bg-black text-white p-10">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-4 lg:grid-cols-4 gap-4">
            {{-- <div >
                
            </div> --}}
             <div >
                  <img src="{{ asset('image/logo.png') }}" alt="Logo" class="w-[4rem] h-[4rem]" loading="lazy"/>
               
                <p class="text-gray-400">Natty is more than just a financial service provider; we are a community dedicated to improving financial well-being. Join thousands of satisfied users who trust Natty for their financial needs. Download the Natty app today and experience the future of finance in Nigeria.</p>
            </div>
            <div>
                <h5 class="text-xl font-bold mb-3">Company</h5>
                <ul class="text-gray-400">
                    <li><a href="#" class="hover:underline">About Us</a></li>
                    <li><a href="#" class="hover:underline">Join Our Team</a></li>
                    <li><a href="#" class="hover:underline">Blog</a></li>
                    <li><a href="#" class="hover:underline">Contact Us</a></li>
                </ul>
            </div>
            <div>
                <h5 class="text-xl font-bold mb-3">Resources</h5>
                <ul class="text-gray-400">
                    <li><a href="#" class="hover:underline">Terms of Use</a></li>
                    <li><a href="#" class="hover:underline">Privacy Policy</a></li>
                    <li><a href="#" class="hover:underline">Documentation</a></li>
                </ul>
            </div>
            <div>
                <h5 class="text-xl font-bold mb-3">Info</h5>
                <ul class="text-gray-400">
                    <li>Head office: C3 & C4 Suite second floor, Eijson plaza new market road Main market Onitsha Anambra state</li>
                    <li>Phone: +2398134146906</li>
                    <li>Email: <a href="mailto:nattypay349@gmail.com" class="hover:underline">nattypay349@gmail.com</a></li>
                </ul>
            </div>
        </div>
        <div class="text-center text-gray-400 mt-10">
            © 2024 Natty. All rights reserved.
        </div>
    </footer>
    @vite('resources/js/app.js')
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>  
</body>
</html>
