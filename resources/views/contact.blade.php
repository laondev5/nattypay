@extends('layout')

@section('content')
 <!-- Hero Section -->
    <section class=" py-12 container mx-auto">
        <div class="flex flex-col lg:flex-row items-center">
            <div class=" flex-1 w-[80%] ">
                <h1 class="text-7xl font-extrabold mb-4">Get In Touch</h1>
                <p class="text-gray-600 mb-8 w-[80%]">For any inquiries or assistance, do not hesitate to reach out to us at Natty. Your satisfaction is our priority.</p>
                <div class="">
                    <h2 class="text-3xl font-bold my-2">Social Handles</h2>
                    <div class="grid grid-cols-4 gap-3 w-[60%] justify-center text-[2rem] items-center">
                        {{-- facebook --}}
                        <a href="#">
                       <svg width="40" height="40" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect width="60" height="60" rx="30" fill="#FFEBBB" fill-opacity="0.2"/>
<path d="M30 10C18.9733 10 10 18.9733 10 30C10 41.0267 18.9733 50 30 50C41.0267 50 50 41.0267 50 30C50 18.9733 41.0267 10 30 10ZM30 13.3333C39.225 13.3333 46.6667 20.775 46.6667 30C46.6707 33.9899 45.24 37.8483 42.6356 40.871C40.0311 43.8937 36.4267 45.8791 32.48 46.465V34.86H37.2267L37.9717 30.0383H32.48V27.405C32.48 25.405 33.1383 23.6267 35.01 23.6267H38.0183V19.42C37.49 19.3483 36.3717 19.1933 34.2583 19.1933C29.845 19.1933 27.2583 21.5233 27.2583 26.8333V30.0383H22.7217V34.86H27.2583V46.4233C23.3663 45.7827 19.8287 43.7792 17.2778 40.7706C14.7269 37.762 13.3288 33.9444 13.3333 30C13.3333 20.775 20.775 13.3333 30 13.3333Z" fill="#D4B139"/>
</svg>
</a>

{{-- instagram --}}
<a href="#">
<svg width="40" height="40" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect width="60" height="60" rx="30" fill="#FFEBBB" fill-opacity="0.2"/>
<path d="M14.168 29.9998C14.168 22.5365 14.168 18.8032 16.4863 16.4848C18.8046 14.1665 22.5363 14.1665 30.0013 14.1665C37.4646 14.1665 41.198 14.1665 43.5163 16.4848C45.8346 18.8032 45.8346 22.5348 45.8346 29.9998C45.8346 37.4632 45.8346 41.1965 43.5163 43.5148C41.198 45.8332 37.4663 45.8332 30.0013 45.8332C22.538 45.8332 18.8046 45.8332 16.4863 43.5148C14.168 41.1965 14.168 37.4648 14.168 29.9998Z" stroke="#D4B139" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M39.18 20.833H39.1633M37.5 29.9997C37.5 31.9888 36.7098 33.8965 35.3033 35.303C33.8968 36.7095 31.9891 37.4997 30 37.4997C28.0109 37.4997 26.1032 36.7095 24.6967 35.303C23.2902 33.8965 22.5 31.9888 22.5 29.9997C22.5 28.0106 23.2902 26.1029 24.6967 24.6964C26.1032 23.2899 28.0109 22.4997 30 22.4997C31.9891 22.4997 33.8968 23.2899 35.3033 24.6964C36.7098 26.1029 37.5 28.0106 37.5 29.9997Z" stroke="#D4B139" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</a>
{{-- twitter --}}
<a href="#">
<svg width="40" height="40" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect width="60" height="60" rx="30" fill="#FFEBBB" fill-opacity="0.2"/>
<path d="M38.0315 44.6133L16.2531 16.6133C16.1384 16.4655 16.0674 16.2885 16.0482 16.1023C16.0291 15.9161 16.0626 15.7283 16.1449 15.5602C16.2272 15.3921 16.355 15.2505 16.5138 15.1515C16.6726 15.0525 16.856 15 17.0431 15H21.1765C21.3286 15.0002 21.4787 15.0352 21.6154 15.1022C21.752 15.1692 21.8715 15.2665 21.9648 15.3867L43.7431 43.3867C43.8579 43.5345 43.9289 43.7115 43.9481 43.8977C43.9672 44.0839 43.9337 44.2717 43.8514 44.4398C43.7691 44.6079 43.6413 44.7495 43.4825 44.8485C43.3237 44.9475 43.1403 45 42.9531 45H38.8198C38.6676 44.9998 38.5175 44.9648 38.3809 44.8978C38.2443 44.8308 38.1248 44.7335 38.0315 44.6133Z" stroke="#D4B139" stroke-width="3.5"/>
<path d="M43.3307 15L16.6641 45" stroke="#D4B139" stroke-width="3.5" stroke-linecap="round"/>
</svg>
</a>
 
{{-- linkedin --}}
<a href="#">
<svg width="40" height="40" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect width="60" height="60" rx="30" fill="#FFEBBB" fill-opacity="0.2"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M17.5013 12.9165C16.2857 12.9165 15.1199 13.3994 14.2604 14.2589C13.4009 15.1185 12.918 16.2843 12.918 17.4998C12.918 18.7154 13.4009 19.8812 14.2604 20.7407C15.1199 21.6003 16.2857 22.0832 17.5013 22.0832C18.7169 22.0832 19.8827 21.6003 20.7422 20.7407C21.6017 19.8812 22.0846 18.7154 22.0846 17.4998C22.0846 16.2843 21.6017 15.1185 20.7422 14.2589C19.8827 13.3994 18.7169 12.9165 17.5013 12.9165ZM15.418 17.4998C15.418 16.9473 15.6375 16.4174 16.0282 16.0267C16.4189 15.636 16.9488 15.4165 17.5013 15.4165C18.0538 15.4165 18.5837 15.636 18.9744 16.0267C19.3651 16.4174 19.5846 16.9473 19.5846 17.4998C19.5846 18.0524 19.3651 18.5823 18.9744 18.973C18.5837 19.3637 18.0538 19.5832 17.5013 19.5832C16.9488 19.5832 16.4189 19.3637 16.0282 18.973C15.6375 18.5823 15.418 18.0524 15.418 17.4998ZM12.918 24.1665C12.918 23.835 13.0497 23.517 13.2841 23.2826C13.5185 23.0482 13.8364 22.9165 14.168 22.9165H20.8346C21.1662 22.9165 21.4841 23.0482 21.7185 23.2826C21.9529 23.517 22.0846 23.835 22.0846 24.1665V45.8332C22.0846 46.1647 21.9529 46.4826 21.7185 46.7171C21.4841 46.9515 21.1662 47.0832 20.8346 47.0832H14.168C13.8364 47.0832 13.5185 46.9515 13.2841 46.7171C13.0497 46.4826 12.918 46.1647 12.918 45.8332V24.1665ZM15.418 25.4165V44.5832H19.5846V25.4165H15.418ZM24.5846 24.1665C24.5846 23.835 24.7163 23.517 24.9508 23.2826C25.1852 23.0482 25.5031 22.9165 25.8346 22.9165H32.5013C32.8328 22.9165 33.1508 23.0482 33.3852 23.2826C33.6196 23.517 33.7513 23.835 33.7513 24.1665V24.8898L34.4763 24.5782C35.7263 24.044 37.0525 23.7093 38.4063 23.5865C43.0313 23.1665 47.0846 26.7998 47.0846 31.4665V45.8332C47.0846 46.1647 46.9529 46.4826 46.7185 46.7171C46.4841 46.9515 46.1662 47.0832 45.8346 47.0832H39.168C38.8364 47.0832 38.5185 46.9515 38.2841 46.7171C38.0497 46.4826 37.918 46.1647 37.918 45.8332V34.1665C37.918 33.614 37.6985 33.0841 37.3078 32.6934C36.9171 32.3027 36.3872 32.0832 35.8346 32.0832C35.2821 32.0832 34.7522 32.3027 34.3615 32.6934C33.9708 33.0841 33.7513 33.614 33.7513 34.1665V45.8332C33.7513 46.1647 33.6196 46.4826 33.3852 46.7171C33.1508 46.9515 32.8328 47.0832 32.5013 47.0832H25.8346C25.5031 47.0832 25.1852 46.9515 24.9508 46.7171C24.7163 46.4826 24.5846 46.1647 24.5846 45.8332V24.1665ZM27.0846 25.4165V44.5832H31.2513V34.1665C31.2513 32.9509 31.7342 31.7851 32.5937 30.9256C33.4533 30.0661 34.6191 29.5832 35.8346 29.5832C37.0502 29.5832 38.216 30.0661 39.0755 30.9256C39.9351 31.7851 40.418 32.9509 40.418 34.1665V44.5832H44.5846V31.4665C44.5846 28.2932 41.8163 25.7865 38.6346 26.0765C37.5416 26.1759 36.4709 26.4459 35.4613 26.8765L32.9946 27.9348C32.8044 28.0166 32.5968 28.0497 32.3906 28.0314C32.1843 28.013 31.9858 27.9438 31.813 27.8297C31.6402 27.7157 31.4983 27.5605 31.4003 27.3782C31.3023 27.1958 31.2511 26.9919 31.2513 26.7848V25.4165H27.0846Z" fill="#D4B139"/>
</svg>
</a>


                    </div>
                     <p class="text-gray-700 mb-4">Phone: +2398134146906</p>
                <p class="text-gray-700 mb-4">Email: <a href="mailto:nattypay349@gmail.com" class="text-yellow-500 hover:underline">nattypay349@gmail.com</a></p>
                </div>
            </div>
            <div class=" flex-1  ">
                <div>
                <form>
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700">Full Name</label>
                        <input type="text" id="name" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700">Email</label>
                        <input type="email" id="email" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500">
                    </div>
                    <div class="mb-4">
                        <label for="phone" class="block text-gray-700">Phone Number (Optional)</label>
                        <input type="text" id="phone" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500">
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-gray-700">Message</label>
                        <textarea id="message" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500"></textarea>
                    </div>
                    <div class="w-full my-2 p-6 border-2 border-dashed border-gray-300 rounded-md text-center">
            <div class="flex flex-col items-center ">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-400 mb-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8l5-5m0 0l5 5m-5-5v12m8 4H3a1 1 0 01-1-1V4a1 1 0 011-1h3m10 0h3a1 1 0 011 1v16a1 1 0 01-1 1z" />
                </svg>
                <span class="text-gray-600">Upload File (Optional)</span>
            </div>
            <input type="file" class="hidden">
        </div>
                    <button type="submit" class="px-6 py-2 w-full bg-yellow-500 text-white rounded-md hover:bg-yellow-600 transition duration-300">Send Message</button>
                </form>
            </div>
            </div>
        </div>
        
    </section>

    <!-- Contact Form Section -->
    <section class="container mx-auto py-12">
        <div class=" flex flex-col lg:flex-row items-center">
           
            <div class="flex-1 flex justify-center items-center">
                <div class="rounded-md flex flex-col items-center w-[60%] bg-white shadow-sm h-[20rem] bg-[url('/image/parttan.png')] bg-cover bg-center justify-center">
                     <h2 class="text-2xl font-bold mb-4">Office Address</h2>
                <p class="text-gray-700 mb-4">C3 & C4 Suite second floor, Eijson plaza new market road Main market Onitsha Anambra state</p>
                </div>
               
               
                
            </div>
            <div class="flex-1">
                
               
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.835434509374!2d144.9537353153167!3d-37.8162799797517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf577d9f0b1a0b1a0!2sEijson%20Plaza!5e0!3m2!1sen!2sng!4v1629876543210!5m2!1sen!2sng" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>

    <!-- App Promotion Section -->
    <section class="pt-[15rem]">
        <div class="  bg-white rounded-t-[10rem]">
            <div class="flex container mx-auto items-end">
                <div class="flex-1">
                     <img src="{{ asset('image/phone.png') }}" alt="Logo" class="w-[520px] h-[650px] mt-[-10rem]" loading="lazy">
                </div>
                <div class="flex-1 mb-[3rem]">
            <h2 class="text-5xl font-semibold w-[60%] mb-4">Try Natty on Your Mobile Phone for Free</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 w-[50%] items-center justify-center">
                 <img src="{{ asset('image/apple.png') }}" alt="Logo" class="w-[7rem] h-[3remx] " loading="lazy">
                  <img src="{{ asset('image/google.png') }}" alt="Logo" class="w-[7rem] h-[3rem] " loading="lazy">
            </div>
           
            <div class="flex space-x-8 items-start mt-3">
                <img src="{{ asset('image/qrcode.png') }}" alt="Logo" class="w-[6rem] h-[6rem] " loading="lazy"><!-- Replace with actual path to QR code image -->
                <p class="text-black mb-8 text-3xl font-semibold">Scan the QR code to download the Natty app.</p>
            </div>
        </div>
            </div>
 
        </div>
       
    </section>
@endsection


