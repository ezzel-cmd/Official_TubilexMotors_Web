<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/output.css">
    <title>Tubilex Motors</title>
    <link rel="icon" type=" image/png" sizes="42x42" href="favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Exo:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet" />
    <title>Document</title>
    <style>
        .archivo {
            font-family: "Archivo", sans-serif;
            font-optical-sizing: auto;
        }

        .poppins {
            font-family: "Poppins", sans-serif;
        }

        .Exo {
            font-family: "Exo", sans-serif;
        }
    </style>
</head>

<body class="Exo text-gray-900">
    <!-- header -->
    <!-- header -->
    <div class="absolute top-0 left-0 z-80 w-full h-auto pb-10 px-4 md:px-10 lg:px-20 py-2 lg:py-3 space-y-10 ">
        <!-- navigations -->
        <header class="h-14 w-full rounded-full font-medium" x-data="{ open: false }">
            <nav class="w-full h-full flex justify-between items-center relative">
                <!-- Logo -->
                <h1 class="text-2xl  font-extrabold  text-white">Tubilex Motors</h1>

                <!-- Desktop Menu -->
                <ul class="hidden sm:flex gap-3 lg:gap-6 text-white">
                    <li><a href="#about"
                            class="relative after:absolute after:-bottom-1 after:left-0 after:h-0.5 after:w-full after:bg-yellow-300 after:scale-x-0 after:origin-left after:transition-transform after:duration-500 hover:after:scale-x-100 text-md md:text-lg">About
                            Us</a></li>
                    <li><a href="#orders"
                            class="relative hidden md:hidden lg:block after:absolute after:-bottom-1 after:left-0 after:h-0.5 after:w-full after:bg-yellow-300 after:scale-x-0 after:origin-left after:transition-transform after:duration-500 hover:after:scale-x-100  text-md md:text-lg">Cars</a>
                    </li>
                    <li><a href="#services"
                            class="relative after:absolute after:-bottom-1 after:left-0 after:h-0.5 after:w-full after:bg-yellow-300 after:scale-x-0 after:origin-left after:transition-transform after:duration-500 hover:after:scale-x-100  text-md md:text-lg">Services</a>
                    </li>
                    <li><a href="#faq"
                            class="relative after:absolute after:-bottom-1 after:left-0 after:h-0.5 after:w-full after:bg-yellow-300 after:scale-x-0 after:origin-left after:transition-transform after:duration-500 hover:after:scale-x-100  text-md md:text-lg">FAQs</a>
                    </li>

                </ul>
                <div class="flex sm:hidden ">
                    <button @click="open = !open" class=" flex md:hidden pr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25" />
                        </svg>
                    </button>
                    <div x-show="open" x-transition:enter.duration.300ms x-transition:leave.duration.400ms
                        class="fixed top-0 right-0 w-full h-full bg-black/80 flex justify-center items-center  gap-4  z-80 ">
                        <div @click="open = !open" class="absolute top-0 right-0 w-full h-full "></div>
                        <div @click="open = !open" class="absolute top-0 pt-20 right-0 w-[80%] h-full bg-white">
                            <ul class="flex flex-col gap-4 px-6 py-3">
                                <li
                                    class=" text-sm font-normal text-md flex  items-center pb-2 gap-4  border-b-gray-100 border-b-2 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="size-5 text-[#ff6324]">
                                        <path
                                            d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                                        <path
                                            d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                                    </svg>
                                    <a href="#">Home</a>
                                </li>
                                <li
                                    class=" text-sm font-normal text-md flex items-center pb-2 gap-4  border-b-gray-100 border-b-2 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="size-5 text-[#ff6324]">
                                        <path fill-rule="evenodd"
                                            d="M8.25 6.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM15.75 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM2.25 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM6.31 15.117A6.745 6.745 0 0 1 12 12a6.745 6.745 0 0 1 6.709 7.498.75.75 0 0 1-.372.568A12.696 12.696 0 0 1 12 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 0 1-.372-.568 6.787 6.787 0 0 1 1.019-4.38Z"
                                            clip-rule="evenodd" />
                                        <path
                                            d="M5.082 14.254a8.287 8.287 0 0 0-1.308 5.135 9.687 9.687 0 0 1-1.764-.44l-.115-.04a.563.563 0 0 1-.373-.487l-.01-.121a3.75 3.75 0 0 1 3.57-4.047ZM20.226 19.389a8.287 8.287 0 0 0-1.308-5.135 3.75 3.75 0 0 1 3.57 4.047l-.01.121a.563.563 0 0 1-.373.486l-.115.04c-.567.2-1.156.349-1.764.441Z" />
                                    </svg>


                                    <a href="#about" id="about-link">About Us</a>
                                </li>
                                <li
                                    class=" text-sm font-normal text-md flex items-center pb-2 gap-4  border-b-gray-100 border-b-2 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="size-5 text-[#ff6324]">
                                        <path
                                            d="M9.97.97a.75.75 0 0 1 1.06 0l3 3a.75.75 0 0 1-1.06 1.06l-1.72-1.72v3.44h-1.5V3.31L8.03 5.03a.75.75 0 0 1-1.06-1.06l3-3ZM9.75 6.75v6a.75.75 0 0 0 1.5 0v-6h3a3 3 0 0 1 3 3v7.5a3 3 0 0 1-3 3h-7.5a3 3 0 0 1-3-3v-7.5a3 3 0 0 1 3-3h3Z" />
                                        <path
                                            d="M7.151 21.75a2.999 2.999 0 0 0 2.599 1.5h7.5a3 3 0 0 0 3-3v-7.5c0-1.11-.603-2.08-1.5-2.599v7.099a4.5 4.5 0 0 1-4.5 4.5H7.151Z" />
                                    </svg>

                                    <a href="#orders" id="work-link">Cars</a>
                                </li>
                                <li
                                    class=" text-sm font-normal text-md flex items-center pb-2 gap-4  border-b-gray-100 border-b-2 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="size-5 text-[#ff6324]">
                                        <path fill-rule="evenodd"
                                            d="M12 6.75a5.25 5.25 0 0 1 6.775-5.025.75.75 0 0 1 .313 1.248l-3.32 3.319c.063.475.276.934.641 1.299.365.365.824.578 1.3.64l3.318-3.319a.75.75 0 0 1 1.248.313 5.25 5.25 0 0 1-5.472 6.756c-1.018-.086-1.87.1-2.309.634L7.344 21.3A3.298 3.298 0 1 1 2.7 16.657l8.684-7.151c.533-.44.72-1.291.634-2.309A5.342 5.342 0 0 1 12 6.75ZM4.117 19.125a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75h-.008a.75.75 0 0 1-.75-.75v-.008Z"
                                            clip-rule="evenodd" />
                                        <path
                                            d="m10.076 8.64-2.201-2.2V4.874a.75.75 0 0 0-.364-.643l-3.75-2.25a.75.75 0 0 0-.916.113l-.75.75a.75.75 0 0 0-.113.916l2.25 3.75a.75.75 0 0 0 .643.364h1.564l2.062 2.062 1.575-1.297Z" />
                                        <path fill-rule="evenodd"
                                            d="m12.556 17.329 4.183 4.182a3.375 3.375 0 0 0 4.773-4.773l-3.306-3.305a6.803 6.803 0 0 1-1.53.043c-.394-.034-.682-.006-.867.042a.589.589 0 0 0-.167.063l-3.086 3.748Zm3.414-1.36a.75.75 0 0 1 1.06 0l1.875 1.876a.75.75 0 1 1-1.06 1.06L15.97 17.03a.75.75 0 0 1 0-1.06Z"
                                            clip-rule="evenodd" />
                                    </svg>


                                    <a href="#services" id="services-link">Services</a>
                                </li>
                                <li
                                    class=" text-sm font-normal text-md flex items-center pb-2 gap-4  border-b-gray-100 border-b-2 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="size-5 text-[#ff6324]">
                                        <path
                                            d="M4.913 2.658c2.075-.27 4.19-.408 6.337-.408 2.147 0 4.262.139 6.337.408 1.922.25 3.291 1.861 3.405 3.727a4.403 4.403 0 0 0-1.032-.211 50.89 50.89 0 0 0-8.42 0c-2.358.196-4.04 2.19-4.04 4.434v4.286a4.47 4.47 0 0 0 2.433 3.984L7.28 21.53A.75.75 0 0 1 6 21v-4.03a48.527 48.527 0 0 1-1.087-.128C2.905 16.58 1.5 14.833 1.5 12.862V6.638c0-1.97 1.405-3.718 3.413-3.979Z" />
                                        <path
                                            d="M15.75 7.5c-1.376 0-2.739.057-4.086.169C10.124 7.797 9 9.103 9 10.609v4.285c0 1.507 1.128 2.814 2.67 2.94 1.243.102 2.5.157 3.768.165l2.782 2.781a.75.75 0 0 0 1.28-.53v-2.39l.33-.026c1.542-.125 2.67-1.433 2.67-2.94v-4.286c0-1.505-1.125-2.811-2.664-2.94A49.392 49.392 0 0 0 15.75 7.5Z" />
                                    </svg>


                                    <a href="#faq" id="faqs-link">FAQs</a>
                                </li>
                                <li
                                    class=" text-sm font-normal text-md flex items-center pb-2 gap-4  border-b-gray-100 border-b-2 mb-10">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="size-5 text-[#ff6324]">
                                        <path fill-rule="evenodd"
                                            d="M15 3.75a.75.75 0 0 1 .75-.75h4.5a.75.75 0 0 1 .75.75v4.5a.75.75 0 0 1-1.5 0V5.56l-4.72 4.72a.75.75 0 1 1-1.06-1.06l4.72-4.72h-2.69a.75.75 0 0 1-.75-.75Z"
                                            clip-rule="evenodd" />
                                        <path fill-rule="evenodd"
                                            d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z"
                                            clip-rule="evenodd" />
                                    </svg>

                                    <a href="#contacts" id="contacts-link">Contact Us</a>
                                </li>

                                <a href="https://wa.me/255788835182?Hello%20I%20am%20interested%20in%20your%20cars.%20Could%20you%20please%20share%20more%20details%20about%20your%20services%20and%20available%20options%3F"
                                    target="_blank" rel="noopener"
                                    class="text-white bg-gradient-to-tr from-[#f45516] to-[#ff6324] rounded-full font-semibold px-4 py-2 text-center cursor-pointer">Order Now</a>

                            </ul>
                        </div>

                    </div>
                </div>
                <!-- Cart -->
                <div class="relative  mx-4">

                    <a href="https://wa.me/255788835182?Hello%20I%20am%20interested%20in%20your%20cars.%20Could%20you%20please%20share%20more%20details%20about%20your%20services%20and%20available%20options%3F"
                        target="_blank" rel="noopener"
                        class=" w-auto h-full bg-gray-900 px-4 py-2 text-white rounded-full flex items-center justify-center opacity-100 ">
                        Order Now
                    </a>
                </div>
            </nav>
        </header>
    </div>
    <!-- Hero Section -->
    <div class="relative w-full h-[85vh] z-0">
        <!-- Gradient Overlay -->
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-b from-[#f36428] to-transparent z-10"></div>

        <!-- Background Image -->
        <img src="images/0002.jpg" alt="img" class="w-full h-full object-cover z-0">

        <!-- Hero Text -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 transform -translate-y-1/2 z-20 w-full h-auto px-6 sm:px-20">
            <h1 class="text-center text-[56px]/14 sm:text-7xl lg:text-[78px] text-white font-black italic">
                Miliki Gari zuri, <br />
                Endesha Kwa Amani.
            </h1>
        </div>
    </div>

    <!-- Orange Container (Now below hero, not inside it) -->
    <div class="relative w-full px-5 sm:px-10 md:px-20 lg:px-40 -mt-10  z-20">
        <div
            class="px-6 sm:px-10 shadow-2xl bg-[#f36428] w-full rounded-sm flex flex-col sm:flex-row items-center justify-between py-6 gap-4">
            <h1 class="text-xl sm:text-2xl font-bold text-white/90 md:w-1/2 text-center md:text-left">
                Want to drive your dream car today?
            </h1>
            <div class="flex gap-2 flex-row items-center">
                <a href="https://wa.me/255788835182?Hello%20I%20am%20interested%20in%20your%20cars.%20Could%20you%20please%20share%20more%20details%20about%20your%20services%20and%20available%20options%3F"
                    target="_blank" rel="noopener"
                    class="cursor-pointer px-4 py-1 bg-white text-md font-medium text-center">Book a
                    Car</a>
                <a href="#contacts" class="cursor-pointer px-4 py-1 bg-white text-md font-medium text-center">Contact
                    Us</a>
            </div>
        </div>
    </div>

    <!-- about us -->
    <div id="about"
        class=" w-full h-auto flex flex-col justify-center items-center text-center px-10 md:px-25 pt-30 md:pt-40 lg:pt-60 pb-20 md:pb-25 lg:pb-30 gap-6">
        <div class="flex justify-center items-center w-full gap-4">
            <div class="w-[40px] md:w-[60px] h-[2px] md:h-[4px] bg-gray-900"></div>
            <h1 class="text-3xl md:text-4xl font-bold text-[#f36428] ">
                Overview
            </h1>
            <div class="w-[40px] md:w-[60px] h-[2px] md:h-[4px] bg-gray-900"></div>
        </div>
        <p class="text-sm sm:text-md md:text-lg text-gray-800 font-medium">
            TUBILEX MOTORS COMPANY LIMITED is a quality company specializing in the import and
            export of high-quality cars and auto spare parts. Located at Old Morogoro Road – Mbezi
            Luis, Ubungo, Dar es-Salaam in Tanzania. We are dedicated to providing superior
            automotive solutions to meet the dynamic needs of our clients worldwide. Our commitment
            to excellence and customer satisfaction has earned us a reputation as a trusted partner in
            the global automotive market.
        </p>
    </div>
    <div
        class="flex flex-col sm:flex-row gap-3 md:gap-4 lg:gap-6 py-15 md:py-24 lg:py-30 bg-[#CC5228]/10 px-10 md:px-20 lg:px-30">
        <!-- vision -->
        <div
            class="scroll flex flex-col justify-center bg-[#f36428]  border-l-4 border-white p-6 rounded-2xl z-40 items-center gap-5 shadow-2xl">
            <div class="flex flex-col gap-4 justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                    class="size-14 text-gray-900">
                    <path
                        d="M12 .75a8.25 8.25 0 0 0-4.135 15.39c.686.398 1.115 1.008 1.134 1.623a.75.75 0 0 0 .577.706c.352.083.71.148 1.074.195.323.041.6-.218.6-.544v-4.661a6.714 6.714 0 0 1-.937-.171.75.75 0 1 1 .374-1.453 5.261 5.261 0 0 0 2.626 0 .75.75 0 1 1 .374 1.452 6.712 6.712 0 0 1-.937.172v4.66c0 .327.277.586.6.545.364-.047.722-.112 1.074-.195a.75.75 0 0 0 .577-.706c.02-.615.448-1.225 1.134-1.623A8.25 8.25 0 0 0 12 .75Z" />
                    <path fill-rule="evenodd"
                        d="M9.013 19.9a.75.75 0 0 1 .877-.597 11.319 11.319 0 0 0 4.22 0 .75.75 0 1 1 .28 1.473 12.819 12.819 0 0 1-4.78 0 .75.75 0 0 1-.597-.876ZM9.754 22.344a.75.75 0 0 1 .824-.668 13.682 13.682 0 0 0 2.844 0 .75.75 0 1 1 .156 1.492 15.156 15.156 0 0 1-3.156 0 .75.75 0 0 1-.668-.824Z"
                        clip-rule="evenodd" />
                </svg>

                <h1 class="text-3xl md:text-4xl font-bold text-white z-40">Vision</h1>
            </div>
            <p class="text-sm sm:text-md md:text-lg font-medium text-white z-40 text-center pb-4">To be a trust leader
                in the automotive
                industry, recognized for innovation, reliability, and
                exceptional customer service.</p>
        </div>
        <!-- mission -->
        <div
            class="scroll flex flex-col justify-center bg-[#f36428]  border-l-4 border-white  p-8 rounded-2xl z-40 items-center gap-5 shadow-2xl ">
            <div class="flex flex-col gap-4 justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                    class="size-14 text-gray-900">
                    <path fill-rule="evenodd"
                        d="M9.315 7.584C12.195 3.883 16.695 1.5 21.75 1.5a.75.75 0 0 1 .75.75c0 5.056-2.383 9.555-6.084 12.436A6.75 6.75 0 0 1 9.75 22.5a.75.75 0 0 1-.75-.75v-4.131A15.838 15.838 0 0 1 6.382 15H2.25a.75.75 0 0 1-.75-.75 6.75 6.75 0 0 1 7.815-6.666ZM15 6.75a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z"
                        clip-rule="evenodd" />
                    <path
                        d="M5.26 17.242a.75.75 0 1 0-.897-1.203 5.243 5.243 0 0 0-2.05 5.022.75.75 0 0 0 .625.627 5.243 5.243 0 0 0 5.022-2.051.75.75 0 1 0-1.202-.897 3.744 3.744 0 0 1-3.008 1.51c0-1.23.592-2.323 1.51-3.008Z" />
                </svg>
                <h1 class="text-3xl md:text-4xl font-bold text-white z-40">Mission</h1>
            </div>
            <p class="text-sm sm:text-md md:text-lg font-medium text-white z-40 text-center pb-4">We are committed to
                provide clients with
                exceptional automotive products and services that
                exceed expectations.</p>
        </div>
    </div>
    <!-- orders -->
    <div id="orders" class="relative flex flex-col px-3 sm:px-8 md:px-10  pt-14">
        <div class="h-20 w-full  grid place-content-center pb-20 pt-10 place-items-center gap-3">
            <h1 class="text-center text-3xl font-bold text-gray-900">Check your dream Car and Order now</h1>
            <div class="h-1 w-18 bg-[#ff6324] "></div>
        </div>
        <!-- <div class="absolute top-0 left-0 h-full w-20 bg-gradient-to-r from-white to-transparent z-70"></div>
        <div class="absolute top-0 right-0 h-full w-20 bg-gradient-to-l from-white to-transparent z-70"></div> -->
        <div class="relative flex  gap-4 h-100 w-full overflow-x-scroll  snap-x snap-mandatory  ">
            <div class="relative rounded-xl min-w-80 h-full">
                <div
                    class="absolute top-0 left-0 w-full h-full rounded-xl bg-gradient-to-t  from-[#f36428] to-transparent z-10">
                </div>
                <img src="./images/9.jpeg" alt="" class="w-full h-full rounded-xl object-cover">
                <!-- <a href="https://wa.me/255741760208?text=Hello%20I%20am%20interested%20in%20your%20honey%20products"
                    target="_blank" rel="noopener"
                    class="mt-6 inline-block bg-green-500 text-white px-8 py-3 rounded-full text-lg font-semibold hover:bg-green-600 shadow-lg transition duration-300">
                    📱 Chat with us on WhatsApp
                </a> -->
                <a href="https://wa.me/255788835182?Hello%20I%20am%20interested%20in%20your%20cars.%20Could%20you%20please%20share%20more%20details%20about%20your%20services%20and%20available%20options%3F"
                    target="_blank" rel="noopener"
                    class="absolute top-80 z-60 left-10 bg-yellow-400 w-auto h-10 px-6 rounded-full flex justify-center items-center text-xl text-white font-extrabold ">
                    Order Now </a>
            </div>
            <div class="relative rounded-3xl min-w-80 h-full">
                <div
                    class="absolute top-0 left-0 w-full h-full rounded-xl bg-gradient-to-t  from-[#f36428] to-transparent z-10">
                </div>
                <img src="./images/000.jpg" alt="" class="w-full h-full rounded-xl object-cover">

                <a href="https://wa.me/255788835182?Hello%20I%20am%20interested%20in%20your%20cars.%20Could%20you%20please%20share%20more%20details%20about%20your%20services%20and%20available%20options%3F"
                    target="_blank" rel="noopener"
                    class="absolute top-80 z-30 left-10 bg-yellow-400 w-auto h-10 px-6 rounded-full flex justify-center items-center text-xl text-white font-extrabold ">
                    Order Now </a>
            </div>
            <div class="relative rounded-xl min-w-80 h-full">
                <div
                    class="absolute top-0 left-0 w-full h-full rounded-xl bg-gradient-to-t  from-[#f36428] to-transparent z-10">
                </div>
                <img src="./images/01.jpg" alt="" class="w-full h-full rounded-xl object-cover">
                <a href="https://wa.me/255788835182?Hello%20I%20am%20interested%20in%20your%20cars.%20Could%20you%20please%20share%20more%20details%20about%20your%20services%20and%20available%20options%3F"
                    target="_blank" rel="noopener"
                    class="absolute top-80 z-30 left-10 bg-yellow-400 w-auto h-10 px-6 rounded-full flex justify-center items-center text-xl text-white font-extrabold ">
                    Order Now </a>
            </div>
            <div class="relative rounded-xl min-w-80 h-full">
                <div
                    class="absolute top-0 left-0 w-full h-full rounded-xl bg-gradient-to-t  from-[#f36428] to-transparent z-10">
                </div>
                <img src="./images/000000.jpg" alt="" class="w-full h-full rounded-xl object-cover">
                <a href="https://wa.me/255788835182?Hello%20I%20am%20interested%20in%20your%20cars.%20Could%20you%20please%20share%20more%20details%20about%20your%20services%20and%20available%20options%3F"
                    target="_blank" rel="noopener"
                    class="absolute top-80 z-30 left-10 bg-yellow-400 w-auto h-10 px-6 rounded-full flex justify-center items-center text-xl text-white font-extrabold ">
                    Order Now </a>
            </div>
            <div class="relative rounded-xl min-w-80 h-full">
                <div
                    class="absolute top-0 left-0 w-full h-full rounded-xl bg-gradient-to-t  from-[#f36428] to-transparent z-10">
                </div>
                <img src="./images/0000000.jpg" alt="" class="w-full h-full rounded-xl object-cover">
                <a href="https://wa.me/255788835182?Hello%20I%20am%20interested%20in%20your%20cars.%20Could%20you%20please%20share%20more%20details%20about%20your%20services%20and%20available%20options%3F"
                    target="_blank" rel="noopener"
                    class="absolute top-80 z-30 left-10 bg-yellow-400 w-auto h-10 px-6 rounded-full flex justify-center items-center text-xl text-white font-extrabold ">
                    Order Now </a>
            </div>
        </div>
    </div>
    <!-- Our Services -->
    <div id="services"
        class="relative w-full h-auto py-20 flex flex-col justify-center items-center gap-6 md:gap-10 px-4 md:px-6 lg:px-8">
        <!-- <h1 class="text-5xl font-extrabold  py-4">Our Services</h1> -->
        <div class="flex justify-center items-center w-full gap-4">
            <div class="w-[40px] md:w-[60px] h-[2px] md:h-[6px] bg-[#f36428]"></div>
            <h1 class="text-3xl md:text-3xl lg:text-4xl font-bold text-gray-900">
                Our Services
            </h1>
            <div class="w-[40px] md:w-[60px] h-[2px] md:h-[4px] bg-[#f36428]"></div>
        </div>
        <div
            class="grid grid-cols-1 grid-rows-3 sm:grid-rows-1 sm:grid-cols-3  justify-center items-center gap-4 lg:gap-7 sm:px-4 lg:px-6">
            <a href="#">
                <div
                    class="relative max-w-[25rem] lg:max-w-[22rem] h-[400px] flex flex-col bg-gradient-to-t from-transparent to-[#f36428]/60 rounded-xl transition-all duration-300 hover:scale-105">
                    <!-- Image container -->
                    <div class="relative w-full h-[50%] rounded-t-lg overflow-hidden">
                        <img src="images/3.jpg" alt="Image of a person"
                            class="rounded-t-lg object-cover w-full h-full transition-transform duration-300 group-hover:scale-120" />
                    </div>

                    <!-- Text content -->
                    <div class="w-full h-[50%] px-6 pt-6 flex flex-col">
                        <h1 class="text-2xl md:text-[26px] font-bold text-[#f36428]">
                            Car Import & Export
                        </h1>
                        <p class="text-sm md:text-md font-medium text-gray-900/70 pt-1">
                            We import used cars and top-brand vehicles from reliable global
                            manufacturers.
                        </p>
                    </div>
                </div>
            </a>
            <a href="#">
                <div
                    class="relative max-w-[25rem] lg:max-w-[22rem] h-[400px] flex flex-col bg-gradient-to-t from-transparent to-[#f36428]/60 rounded-xl transition-all duration-300 hover:scale-105">
                    <!-- Image container -->
                    <div class="relative w-full h-[50%] rounded-t-lg overflow-hidden">
                        <img src="images/5.jpeg" alt="Image of a person"
                            class="rounded-t-lg object-cover w-full h-full transition-transform duration-300 group-hover:scale-120" />
                    </div>

                    <!-- Text content -->
                    <div class="w-full h-[50%] px-6 pt-6 flex flex-col">
                        <h1 class="text-2xl md:text-[26px] font-bold text-[#f36428]">
                            Auto Spare Parts
                        </h1>
                        <p class="text-sm md:text-md font-medium text-gray-900/70 pt-1">
                            Genuine, high-quality auto spare parts for a variety of vehicle
                            makes and models. Comprehensive inventory to meet diverse client
                            needs.
                        </p>
                    </div>
                </div>
            </a>
            <a href="#">
                <div
                    class="relative max-w-[25rem] lg:max-w-[22rem] h-[400px] flex flex-col bg-gradient-to-t from-transparent to-[#f36428]/60 rounded-xl transition-all duration-300 hover:scale-105">
                    <!-- Image container -->
                    <div class="relative w-full h-[50%] rounded-t-lg overflow-hidden">
                        <img src="images/8.jpeg" alt="Image of a person"
                            class="rounded-t-lg object-cover w-full h-full transition-transform duration-300 group-hover:scale-120" />
                    </div>

                    <!-- Text content -->
                    <div class="w-full h-[50%] px-6 pt-6 flex flex-col">
                        <h1 class="text-2xl md:text-[26px] font-bold text-[#f36428]">
                            Consultations
                        </h1>
                        <p class="text-sm md:text-md font-medium text-gray-900/70 pt-1">
                            Expert advice on vehicle and spare part selection tailored to
                            individual or business requirements.nd models. Comprehensive
                            inventory to meet diverse client needs.
                        </p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!-- core values -->
    <div class="w-full h-auto  px-10 md:px-25 py-15 pb-25 bg-[#f36428]/10">
        <div class="flex justify-center items-center w-full gap-4 pb-14">
            <div class="w-[40px] md:w-[60px] h-[2px] md:h-[4px] bg-[#f36428]"></div>
            <h1 class="text-3xl md:text-3xl lg:text-4xl font-bold text-gray-900">
                Core Values
            </h1>
            <div class="w-[40px] md:w-[60px] h-[2px] md:h-[4px] bg-[#f36428]"></div>
        </div>
        <div class="w-full h-auto flex flex-col md:grid md:grid-cols-2 gap-6">
            <div
                class="place-self-end space-y-4 bg-[#f36428] shadow-xl shadow-[#f36428]/20   rounded-lg flex flex-col rounded-br-[80px] w-full md:max-w-120 min-h-40 max-h-auto pb-10">
                <div class="px-7 md:px-10 pt-6 md:pt-8 gap-2 flex flex-col">
                    <h1 class="text-2xl md:text-3xl font-bold text-white">
                        Integrity
                    </h1>
                    <p class="text-md md:text-lg font-medium text-white/80">
                        Building trust through transparency and ethical business practices.
                    </p>
                </div>
            </div>
            <div
                class="place-self-start space-y-4 bg-gray-900 shadow-xl shadow-[#f36428]/20 rounded-lg flex flex-col rounded-bl-[80px] w-full md:max-w-120 min-h-40 max-h-auto pb-10">
                <div class="px-7 md:px-10 pt-6 md:pt-8 gap-2 flex flex-col text-end">
                    <h1 class="text-2xl md:text-3xl font-bold text-white">
                        Excellence
                    </h1>
                    <p class="text-md md:text-lg font-medium text-white/60">
                        Striving for the highest standards in all aspects of our business.
                    </p>
                </div>
            </div>
            <div
                class="place-self-end space-y-4 bg-gray-900 shadow-xl shadow-[#f36428]/20 rounded-lg flex flex-col rounded-tr-[80px] w-full md:max-w-120 min-h-40 max-h-auto pb-10">
                <div class="px-7 md:px-10 pt-6 md:pt-8 gap-2 flex flex-col text-start">
                    <h1 class="text-2xl md:text-3xl font-bold text-white">
                        Customer-Centricity
                    </h1>
                    <p class="text-md md:text-lg font-medium text-white/60">
                        Putting our clients at the center of our operations.
                    </p>
                </div>
            </div>
            <div
                class="place-self-start space-y-4 bg-[#f36428] shadow-xl shadow-[#f36428]/20 rounded-lg flex flex-col rounded-tl-[80px] w-full md:max-w-120 min-h-40 max-h-auto pb-10">
                <div class="px-7 md:px-10 pt-6 md:pt-8 flex gap-2 flex-col text-end">
                    <h1 class="text-2xl md:text-3xl font-bold text-white">
                        Sustainability
                    </h1>
                    <p class="text-md md:text-lg font-medium text-white/80">
                        Committing to environmentally friendly practices in our processes.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full h-50 mt-30">
        <img src="images/11.jpg" alt="" class="w-[45rem] h-auto object-cover" />
    </div>
    <!-- fAQ -->
    <div id="faq" x-data="{ open: null }"
        class="flex flex-col gap-4 justify-center items-center pt-30 pb-40 w-full  h-auto ">
        <!-- Title -->
        <h1 class="text-4xl font-extrabold text-[#f36428]">FAQs</h1>
        <div class="h-1 w-14 bg-yellow-300 mb-6"></div>

        <div class="overflow-hidden grid grid-cols-1 gap-4 h-full w-full  px-4 sm:px-8 lg:px-18 ">
            <!-- Question 1 -->
            <div class="w-full h-auto  py-3 px-7 border-b-2 border-gray-200 ">
                <button @click="open = open === 1 ? null : 1"
                    class="flex justify-between items-center w-full text-left gap-3">
                    <h1 class="text-md md:text-md md:text-lg font-medium text-gray-700 ">What types of vehicles does
                        TUBILEX MOTORS offer?</h1>
                    <span>
                        <svg x-show="open !== 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            fill="currentColor" class="size-6 lg:size-7 cursor-pointer text-[#ff6324] ">
                            <path fill-rule="evenodd"
                                d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                clip-rule="evenodd" />
                        </svg>
                        <svg x-show="open === 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            fill="currentColor" class="size-6 lg:size-7 cursor-pointer text-[#ff6324] ">
                            <path fill-rule="evenodd"
                                d="M11.47 7.72a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 1 1-1.06 1.06L12 9.31l-6.97 6.97a.75.75 0 0 1-1.06-1.06l7.5-7.5Z"
                                clip-rule="evenodd" />
                        </svg>

                    </span>
                </button>
                <div x-show="open === 1" x-transition class="mt-8 text-gray-700 text-sm sm:text-md ">
                    We specialize in the import and export of high-quality vehicles, including sedans, SUVs, pickups,
                    and luxury cars. Our collection is carefully selected to meet the needs of both individual clients
                    and corporate customers.
                </div>
            </div>

            <!-- Question 2 -->
            <div class="w-full h-auto  py-3 px-7 border-b-2 border-gray-200">
                <button @click="open = open === 2 ? null : 2"
                    class="flex justify-between items-center w-full text-left gap-3">
                    <h1 class="text-md md:text-lg font-medium text-gray-700">Are the vehicles brand new or used?</h1>
                    <span>
                        <svg x-show="open !== 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            fill="currentColor" class="size-6 lg:size-7 cursor-pointer text-[#ff6324] ">
                            <path fill-rule="evenodd"
                                d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                clip-rule="evenodd" />
                        </svg>
                        <svg x-show="open === 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            fill="currentColor" class="size-6 lg:size-7 cursor-pointer text-[#ff6324] ">
                            <path fill-rule="evenodd"
                                d="M11.47 7.72a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 1 1-1.06 1.06L12 9.31l-6.97 6.97a.75.75 0 0 1-1.06-1.06l7.5-7.5Z"
                                clip-rule="evenodd" />
                        </svg>

                    </span>
                </button>
                <div x-show="open === 2" x-transition class="mt-8 text-gray-700 text-sm sm:text-md">
                    TUBILEX MOTORS provides both brand-new and certified pre-owned vehicles. Every car is thoroughly
                    inspected to ensure it meets international safety and quality standards before delivery.
                </div>
            </div>

            <!-- Question 3 -->
            <div class="w-full h-auto  py-3 px-7 border-b-2 border-gray-200">
                <button @click="open = open === 3 ? null : 3"
                    class="flex justify-between items-center w-full text-left gap-3">
                    <h1 class="text-md md:text-lg font-medium text-gray-700">Can I finance or pay in installments?
                    </h1>
                    <span>
                        <svg x-show="open !== 3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            fill="currentColor" class="size-6 lg:size-7 cursor-pointer text-[#ff6324] ">
                            <path fill-rule="evenodd"
                                d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                clip-rule="evenodd" />
                        </svg>
                        <svg x-show="open === 3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            fill="currentColor" class="size-6 lg:size-7 cursor-pointer text-[#ff6324] ">
                            <path fill-rule="evenodd"
                                d="M11.47 7.72a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 1 1-1.06 1.06L12 9.31l-6.97 6.97a.75.75 0 0 1-1.06-1.06l7.5-7.5Z"
                                clip-rule="evenodd" />
                        </svg>

                    </span>
                </button>
                <div x-show="open === 3" x-transition class="mt-8 text-gray-700 text-sm sm:text-md">
                    Yes. We offer flexible payment plans and financing options through our trusted banking and
                    micro-finance partners. Our team will guide you in selecting the best plan that suits your budget.
                </div>
            </div>

            <!-- Question 4 -->
            <div class="w-full h-auto  py-3 px-7 border-b-2 border-gray-200">
                <button @click="open = open === 4 ? null : 4"
                    class="flex justify-between items-center w-full text-left gap-3">
                    <h1 class="text-md md:text-lg font-medium text-gray-700">Do you provide warranty and after-sales
                        support?</h1>
                    <span>
                        <svg x-show="open !== 4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            fill="currentColor" class="size-6 lg:size-7 cursor-pointer text-[#ff6324] ">
                            <path fill-rule="evenodd"
                                d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                clip-rule="evenodd" />
                        </svg>
                        <svg x-show="open === 4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            fill="currentColor" class="size-6 lg:size-7 cursor-pointer text-[#ff6324] ">
                            <path fill-rule="evenodd"
                                d="M11.47 7.72a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 1 1-1.06 1.06L12 9.31l-6.97 6.97a.75.75 0 0 1-1.06-1.06l7.5-7.5Z"
                                clip-rule="evenodd" />
                        </svg>

                    </span>
                </button>
                <div x-show="open === 4" x-transition class="mt-8 text-gray-700 text-sm sm:text-md">
                    Absolutely. All our vehicles come with a warranty package that covers key components. We also
                    provide after-sales support, including maintenance advice and assistance with spare parts.
                </div>
            </div>

            <!-- Question 5 -->
            <div class="w-full h-auto  py-3 px-7 border-b-2 border-gray-200">
                <button @click="open = open === 5 ? null : 5"
                    class="flex justify-between items-center w-full text-left gap-3">
                    <h1 class="text-md md:text-lg font-medium text-gray-700">How long does it take to receive a car
                        once ordered?</h1>
                    <span>
                        <svg x-show="open !== 5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            fill="currentColor" class="size-6 lg:size-7 cursor-pointer text-[#ff6324] ">
                            <path fill-rule="evenodd"
                                d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                clip-rule="evenodd" />
                        </svg>
                        <svg x-show="open === 5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            fill="currentColor" class="size-6 lg:size-7 cursor-pointer text-[#ff6324] ">
                            <path fill-rule="evenodd"
                                d="M11.47 7.72a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 1 1-1.06 1.06L12 9.31l-6.97 6.97a.75.75 0 0 1-1.06-1.06l7.5-7.5Z"
                                clip-rule="evenodd" />
                        </svg>

                    </span>
                </button>
                <div x-show="open === 5" x-transition class="mt-8 text-gray-700 text-sm sm:text-md">
                    Delivery time depends on the type of vehicle and your location. For in-stock vehicles, delivery can
                    take as little as 3–7 business days. For special imports, the process may take 4–6 weeks.
                </div>
            </div>

            <!-- Question 6 -->
            <div class="w-full h-auto py-3 px-7 border-b-2 border-gray-200">
                <button @click="open = open === 6 ? null : 6"
                    class="flex justify-between items-center w-full text-left gap-3">
                    <h1 class="text-md md:text-lg font-medium text-gray-700">Does TUBILEX MOTORS help with vehicle
                        registration and insurance?</h1>
                    <span>
                        <svg x-show="open !== 6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            fill="currentColor" class="size-6 lg:size-7 cursor-pointer text-[#ff6324] ">
                            <path fill-rule="evenodd"
                                d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                clip-rule="evenodd" />
                        </svg>
                        <svg x-show="open === 6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            fill="currentColor" class="size-6 lg:size-7 cursor-pointer text-[#ff6324] ">
                            <path fill-rule="evenodd"
                                d="M11.47 7.72a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 1 1-1.06 1.06L12 9.31l-6.97 6.97a.75.75 0 0 1-1.06-1.06l7.5-7.5Z"
                                clip-rule="evenodd" />
                        </svg>

                    </span>
                </button>
                <div x-show="open === 6" x-transition class="mt-8 text-gray-700 text-sm sm:text-md">
                    Yes. We offer full assistance with registration, licensing, and insurance to ensure that your car is
                    ready for the road the moment you receive it.
                </div>
            </div>
        </div>


    </div>
    <!-- contact us -->
    <div id="contacts" class="h-auto w-full px-4 sm:px-8 md:px-12 py-4 sm:py-8 md:py-12 pb-15 flex items-center justify-center ">
        <div
            class=" grid grid-cols-1 grid-rows-[1fr_1.5fr] md:grid-cols-[1fr_1.5fr] md:grid-rows-1 w-full h-full bg-gray-100 rounded-t-xl   ">
            <div class="relative w-full h-full block ">
                <div class="absolute bg-gradient-to-tr from-[#ff6324]  to-transparent top-0 left-0 w-full h-full rounded-t-xl ">
                </div>
                <video src="video/1.mp4" autoplay loop muted class="w-full h-auto object-cover  rounded-t-xl"></video>
                <!-- <img src="images/6.jpeg" alt="" class="w-full h-full object-cover "> -->
            </div>
            <div class=" grid grid-rows-[0.5fr_1fr_1fr_2fr_1fr]    gap-4 px-6 sm:px-12 py-8 sm:py-15 ">
                <h1 class="text-3xl font-extrabold text-[#ff6324] flex items-center">Contact Us
                </h1>
                <input type="text" placeholder="Your Name"
                    class=" w-full h-full p-4 bg-white focus:outline-2 outline-[#ff6324]/70 outline-offset-4">
                <input type="text" placeholder="Your Email"
                    class="w-full h-full p-4 bg-white focus:outline-2 outline-[#ff6324]/70 outline-offset-4">
                <textarea placeholder="Write your comment here..." name="textarea" cols="20" rows="3"
                    class="w-full h-full p-4 bg-white focus:outline-2 outline-[#ff6324]/70 outline-offset-4"
                    id=""> Write your comment here...</textarea>
                <button
                    class="cursor-pointer w-full h-full p-4 bg-[#ff6324] text-white font-semibold hover:bg-[#e04e15]">Send</button>
            </div>
        </div>
    </div>
    <!-- footer -->
    <footer class="relative w-full h-auto bg-black flex flex-col gap-4  border-2">
        <!-- <div class="absolute top-0 left-0 h-full w-full bg-gradient-to-br from-transparent to-[#ff6324]/14 mb-6">
        </div> -->

        <div class=" mt-10 flex items-center justify-center">
            <div class="h-0.5 w-[80vh] bg-white/40"></div>
        </div>

        <div
            class=" grid gap-6 grid-cols-1 grid-rows-[1fr_3fr]  p-0 md:p-18 md:grid-cols-[1fr_2fr] md:grid-rows-1 px-6 sm:px-12 py-8 sm:py-14 md:py-20">
            <div class="text-white flex gap-2 justify-center items-center flex-col  ">
                <h1 class="text-2xl md:text-4xl font-extrabold ">Tubilex Motors</h1>
                <p class="text-sm md:text-md font-normal text-white/50">Miliki Gari zuri,
                    Endesha Kwa Amani.</p>
            </div>
            <div class="grid grid-cols-[1fr_1fr] h-full w-auto gap-2 md:gap-8">
                <div class="text-white flex flex-col  gap-2">
                    <h1 class="text-xl md:text-2xl font-semibold">Quick Links</h1>
                    <div class="h-1 w-8 bg-[#ff6324] mb-2"></div>
                    <a href="#" class="text-sm sm:text-lg text-gray-300 hover:text-white">Home</a>
                    <a href="#about" id="about-link" class="text-sm sm:text-lg text-gray-300 hover:text-white">About</a>
                    <a href="#services" id="services-link"
                        class="text-sm sm:text-lg text-gray-300 hover:text-white">Services</a>
                    <a href="#faq" id="faqs-link" class="text-sm sm:text-lg text-gray-300 hover:text-white">Cars</a>
                    <a href="#contacts" id="contacts-link"
                        class="text-sm sm:text-lg text-gray-300 hover:text-white">Contact
                        Us</a>
                </div>
                <div class="text-white flex flex-col  gap-2">
                    <h1 class="text-xl md:text-2xl font-semibold">Location</h1>
                    <div class="h-1 w-8 bg-[#ff6324] mb-2"></div>

                    <div class="text-gray-300 text-sm sm:text-lg md:text-lg/7">
                        Old Morogoro Road – Mbezi Luis, Ubungo, Dar es-Salaam <br>
                        P.BOX 30382 Kibaha, Pwani, Tanzania <br>
                        Phone: +255 788 835 182, <br>
                        Email: tubilexmotorslimited@gmail.com, <br>
                        Website: www.tubilex.co.tz
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <p
        class="h-auto w-full text-white text-center bg-gradient-to-tr from-[#bb3804] to-[#ff6324] p-5 text-sm sm:text-md md:text-xl font-semibold">
        2025
        Tubilex Motors. All rights reserved. </p>
    <!-- scripts -->
</body>

</html>