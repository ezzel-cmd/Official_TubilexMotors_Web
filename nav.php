<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="src/output.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Orbitron:wght@400..900&family=Russo+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <style>
        .russo {
            font-family: "Russo One", sans-serif;
        }

        .inter {
            font-family: "Inter", sans-serif;
        }
    </style>
</head>

<body class="inter bg-gray-950 w-full h-full ">
    <header class="h-50 w-full  ">
        <div class="w-full h-10 bg-gray-950 flex items-center justify-between px-15">
            <div class="flex items-center gap-2 text-gray-300 text-sm ">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                    <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 6a.75.75 0 0 0-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 0 0 0-1.5h-3.75V6Z" clip-rule="evenodd" />
                </svg>

                <p>MON - SAT | 8:00AM - 6:00PM</p>
            </div>
            <div class="flex items-center gap-2 text-gray-300 text-sm ">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                    <path fill-rule="evenodd" d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
                </svg>
                <p>Mbezi Luis, Dar es salaam, Tz</p>

            </div>
            <div class="flex items-center gap-2 text-gray-300 text-sm ">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                    <path fill-rule="evenodd" d="M19.5 9.75a.75.75 0 0 1-.75.75h-4.5a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 1 1.5 0v2.69l4.72-4.72a.75.75 0 1 1 1.06 1.06L16.06 9h2.69a.75.75 0 0 1 .75.75Z" clip-rule="evenodd" />
                    <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" />
                </svg>
                <P>+255 255 255 255</P>
            </div>
        </div>
        <div class="w-full h-25 bg-[#f36428]  flex justify-between items-center px-15">
            <div></div>
            <div class="text-white font-bold text-3xl">TUBILEX MOTORS</div>
            <button class="bg-white text-gray-900 py-1 px-4 rounded-full text-md font-medium">Explore Now</button>

        </div>
        <nav class="w-full h-15 bg-white flex justify-center items-center px-15">
            <ul class="flex items-center justify-center gap-10">
                <li><a href="#" class="text-gray-900 hover:text-[#f36428]">Home</a></li>
                <li><a href="#about" class="text-gray-900 hover:text-[#f36428]">About Us</a></li>
                <li><a href="#services" class="text-gray-900 hover:text-[#f36428]">Services</a></li>
                <li><a href="#" class="text-gray-900 hover:text-[#f36428]">Why Choose Us</a></li>
                <li><a href="#faq" class="text-gray-900 hover:text-[#f36428]">FAQs</a></li>
                <li><a href="#" class="text-gray-900 hover:text-[#f36428]">Contact Us</a></li>
            </ul>
        </nav>
    </header>

    <div class="relative w-full h-140 bg-white   ">
        <div class="absolute top-0 left-0 h-full w-full px-8 ">

            <!-- <h1 class="text-7xl font-bold text-white absolute bottom-0 left-0 right-0 text-start z-10 px-18 py-6">Cars <br> Without Borders</h1> -->
            <!-- <img src=" images/jeep-wrangler-sunset-adventure.jpg" alt="" class="w-full h-full object-cover rounded-3xl opacity-80 z-0"> -->
            <video src="video/1.mp4" autoplay loop muted class="w-full h-full object-cover rounded-3xl opacity-80 z-0 "></video>
            <div class="relative w-full px-5 sm:px-10 md:px-20 lg:px-40 -mt-30  z-10">
                <div
                    class="px-6 sm:px-10 shadow-2xl bg-white w-full rounded-sm flex flex-col sm:flex-row items-center justify-between py-6 gap-4">
                    <h1 class="text-2xl sm:text-4xl font-bold text-gray-950 md:w-1/2 text-center md:text-left">
                        Want to drive your dream car today?
                    </h1>
                    <div class="flex gap-2 flex-row items-center">
                        <a href="https://wa.me/255788835182?text=Hello%20I%20am%20interested%20in%20your%20cars.%20Can%20you%20share%20details%3F"
                            target="_blank" rel="noopener"
                            class="cursor-pointer px-4 py-1 bg-[#f36428] text-md font-medium text-center text-white">Book a
                            Car</a>
                        <a href="#contacts" class="cursor-pointer px-4 py-1 bg-[#f36428] text-md font-medium text-center text-white">Contact
                            Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white text-6xl  italic font-extrabold text-[#f36428]/40 flex justify-center items-center h-40">Cars Without Borders...</div>

    <section class="w-full h-auto bg-gray-950 flex flex-col place-content-center place-items-center gap-6 py-18">
        <h1 class="text-3xl font-bold text-white">Explore All vehicles</h1>
        <div class="w-10 h-0.5 bg-[#f36428]"></div>

        <div class="h-auto w-full flex justify-center items-center gap-4 flex-wrap ">

            <!-- Jeep Wrangler -->
            <div class="h-85 w-80 bg-white p-2 gap-2">
                <div class="h-[60%] w-full">
                    <img src="images/000000.jpg" alt="Jeep Wrangler" class="w-full h-full object-cover">
                </div>
                <div class="h-[40%] w-full flex flex-col justify-between p-2">
                    <h2 class="text-lg font-semibold text-gray-900">Jeep Wrangler</h2>
                    <p class="text-sm text-gray-600">Iconic off-road SUV built for adventure and rugged terrains.</p>
                    <button class="mt-2 px-3 py-1 bg-[#f36428] text-white text-sm rounded hover:bg-[#d9531e]">
                        order now
                    </button>
                </div>
            </div>

            <!-- Mercedes-Benz GLE -->
            <div class="h-85 w-80 bg-white p-2 gap-2">
                <div class="h-[60%] w-full">
                    <img src="images/00000.jpg" alt="Mercedes-Benz GLE" class="w-full h-full object-cover">
                </div>
                <div class="h-[40%] w-full flex flex-col justify-between p-2">
                    <h2 class="text-lg font-semibold text-gray-900">Mercedes-Benz GLE</h2>
                    <p class="text-sm text-gray-600">Luxury SUV with advanced technology and premium comfort.</p>
                    <button class="mt-2 px-3 py-1 bg-[#f36428] text-white text-sm rounded hover:bg-[#d9531e]">
                        order now
                    </button>
                </div>
            </div>

            <!-- Convertible (Sunset shot) -->
            <div class="h-85 w-80 bg-white p-2 gap-2">
                <div class="h-[60%] w-full">
                    <img src="images/000.jpg" alt="Convertible" class="w-full h-full object-cover">
                </div>
                <div class="h-[40%] w-full flex flex-col justify-between p-2">
                    <h2 class="text-lg font-semibold text-gray-900">Luxury Convertible</h2>
                    <p class="text-sm text-gray-600">Open-top driving with style — perfect for scenic routes.</p>
                    <button class="mt-2 px-3 py-1 bg-[#f36428] text-white text-sm rounded hover:bg-[#d9531e]">
                        order now
                    </button>
                </div>
            </div>

            <!-- Land Rover Defender -->
            <div class="h-85 w-80 bg-white p-2 gap-2">
                <div class="h-[60%] w-full">
                    <img src="images/Power, precision, and presence — the Defender 130.jpg" alt="Land Rover Defender" class="w-full h-full object-cover">
                </div>
                <div class="h-[40%] w-full flex flex-col justify-between p-2">
                    <h2 class="text-lg font-semibold text-gray-900">Land Rover Defender</h2>
                    <p class="text-sm text-gray-600">Rugged yet refined — the ultimate off-road capability.</p>
                    <button class="mt-2 px-3 py-1 bg-[#f36428] text-white text-sm rounded hover:bg-[#d9531e]">
                        order now
                    </button>
                </div>
            </div>

            <!-- Range Rover -->
            <div class="h-85 w-80 bg-white p-2 gap-2">
                <div class="h-[60%] w-full">
                    <img src="images/Range Rover SV.jpg" alt="Range Rover" class="w-full h-full object-cover">
                </div>
                <div class="h-[40%] w-full flex flex-col justify-between p-2">
                    <h2 class="text-lg font-semibold text-gray-900">Range Rover</h2>
                    <p class="text-sm text-gray-600">Prestige, comfort, and unmatched luxury performance.</p>
                    <button class="mt-2 px-3 py-1 bg-[#f36428] text-white text-sm rounded hover:bg-[#d9531e]">
                        order now
                    </button>
                </div>
            </div>

            <!-- Toyota Corolla -->
            <div class="h-85 w-80 bg-white p-2 gap-2">
                <div class="h-[60%] w-full">
                    <img src="images/0000000.jpg" alt="Toyota Corolla" class="w-full h-full object-cover">
                </div>
                <div class="h-[40%] w-full flex flex-col justify-between p-2">
                    <h2 class="text-lg font-semibold text-gray-900">Toyota Corolla</h2>
                    <p class="text-sm text-gray-600">Reliable, efficient, and designed for everyday driving.</p>
                    <button class="mt-2 px-3 py-1 bg-[#f36428] text-white text-sm rounded hover:bg-[#d9531e]">
                        order now
                    </button>
                </div>
            </div>

            <!-- Ferrari 458 Italia -->
            <div class="h-85 w-80 bg-white p-2 gap-2">
                <div class="h-[60%] w-full">
                    <img src="images/002.jpg" alt="Ferrari 458 Italia" class="w-full h-full object-cover">
                </div>
                <div class="h-[40%] w-full flex flex-col justify-between p-2">
                    <h2 class="text-lg font-semibold text-gray-900">Ferrari 458 Italia</h2>
                    <p class="text-sm text-gray-600">Exhilarating speed and iconic Italian supercar design.</p>
                    <button class="mt-2 px-3 py-1 bg-[#f36428] text-white text-sm rounded hover:bg-[#d9531e]">
                        order now
                    </button>
                </div>
            </div>

            <!-- Dodge Ram Truck -->
            <div class="h-85 w-80 bg-white p-2 gap-2">
                <div class="h-[60%] w-full">
                    <img src="images/00001.jpg" alt="Dodge Ram Truck" class="w-full h-full object-cover">
                </div>
                <div class="h-[40%] w-full flex flex-col justify-between p-2">
                    <h2 class="text-lg font-semibold text-gray-900">Dodge Ram</h2>
                    <p class="text-sm text-gray-600">Powerful pickup designed for strength, towing, and hauling.</p>
                    <button class="mt-2 px-3 py-1 bg-[#f36428] text-white text-sm rounded hover:bg-[#d9531e]">
                        order now
                    </button>
                </div>
            </div>

        </div>
    </section>

</body>

</html>