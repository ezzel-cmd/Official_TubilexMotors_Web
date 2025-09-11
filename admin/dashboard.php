<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../src/output.css" rel="stylesheet">
    <title>Document</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Exo:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet" />
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/3.0.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/3.0.0/uicons-brands/css/uicons-brands.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/3.0.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <title>Document</title>
    <style>
        .ubuntu {
            font-family: "Exo", sans-serif;
        }
    </style>
</head>

<body class="ubuntu relative bg-[#f36428]/10 h-screen flex flex-col">
    <!-- Navbar with Hamburger -->
    <header class="bg-white shadow-md py-4 px-10 flex items-center justify-between">
        <div class="flex items-center gap-2">
            <button id="menu-toggle"
                class="text-2xl flex justify-center items-center p-2 rounded-lg hover:bg-gray-100 transition">
                <i class="fi fi-br-menu-burger "></i>
            </button>

            <h1 class="text-xl font-extrabold text-[#f36428]">Tubilex Motors</h1>
        </div>
        <div class="hidden md:flex gap-4 text-[#f36428]">
            <i class="fi fi-brands-facebook"></i>
            <i class="fi fi-brands-youtube"></i>
            <i class="fi fi-brands-linkedin"></i>
            <i class="fi fi-brands-instagram"></i>
        </div>
    </header>



    <div class="flex flex-1 relative">

        <!-- Sidebar (hidden by default) -->
        <div id="sidebar"
            class="fixed top-0 left-0 w-64 h-full bg-white shadow-lg px-7 flex flex-col justify-between py-8 transform -translate-x-full transition-transform duration-300 z-50">
            <h1 class="text-xl p-2 font-extrabold text-gray-800">matokeoApp</h1>
            <nav class="flex flex-col gap-5">
                <a href="./dashboard.html" class="flex items-center gap-3 p-2 rounded-lg hover:bg-blue-100">
                    <i class="fi fi-sr-home text-[#f36428]"></i> Home
                </a>
                <a href="#" class="flex items-center gap-3 p-2 rounded-lg hover:bg-blue-100">
                    <i class="fi fi-sr-apps text-[#f36428]"></i> Dashboard
                </a>
                <a href="students/studentsList.php" class="flex items-center gap-3 p-2 rounded-lg hover:bg-blue-100">
                    <i class="fi fi-sr-users-alt text-[#f36428]"></i> Comments Zilizotolowa
                </a>

                <a href="#" class="flex items-center gap-3 p-2 rounded-lg hover:bg-blue-100">
                    <i class="fi fi-sr-user-gear text-[#f36428]"></i> Update Profile
                </a>
            </nav>
            <a href="controller.php?action=logout" class="flex items-center gap-3 p-2 rounded-lg hover:bg-blue-100">
                <i class="fi fi-sr-user-logout text-[#f36428]"></i> Logout
            </a>
        </div>

        <!-- Main Content -->
        <main class="flex-1 px-12 py-8 overflow-y-auto h-[80vh] ">
            <div
                class="bg-gradient-to-br from-[#f36428] to-[#c34610] text-white rounded-2xl h-[40%] flex items-center justify-center  flex-col p-8 relative overflow-hidden">
                <img src="images/002.png" class="absolute top-0 left-0 w-full h-full object-cover opacity-15" alt="">
                <h1 class="text-4xl font-bold relative">Karibu Tena</h1>
                <p class="text-blue-100 relative">Tubilex Motors</p>
                <!-- <?php echo htmlspecialchars($user['name']);  ?> -->
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6 ">
                <a href="students/studentsList.php"
                    class="bg-white p-6 rounded-lg shadow-sm hover:shadow-lg transition flex items-center justify-center flex-col ">
                    <h2 class="text-gray-600 text-lg font-medium">orders</h2>
                    <p class="text-yellow-400 text-4xl font-bold mt-2">6
                        <!-- <?= $studentCount ?> -->
                    </p>
                </a>
                <a href="matokeo/matokeoList.php"
                    class="bg-white p-6 rounded-lg shadow-sm hover:shadow-lg transition flex items-center justify-center flex-col ">
                    <h2 class="text-gray-600 text-lg font-medium">Comments </h2>
                    <p class="text-yellow-400 text-4xl font-bold mt-2">10
                        <!-- <?= $matokeoCount ?> -->
                    </p>
                </a>
            </div>
        </main>
    </div>

    <!-- Overlay (click to close) -->
    <div id="overlay" class="hidden fixed inset-0 bg-black bg-opacity-50 z-40"></div>

    <script>
        const toggleBtn = document.getElementById('menu-toggle');
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('overlay');

        toggleBtn.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full');
            overlay.classList.toggle('hidden');
        });

        overlay.addEventListener('click', () => {
            sidebar.classList.add('-translate-x-full');
            overlay.classList.add('hidden');
        });
    </script>
</body>

</html>