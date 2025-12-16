<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beautiful Header with Animation</title>
    <link rel="stylesheet" href="output.css">
    <script src="./elements@1.js" type="module"></script>
    <script>
        function toggleMenu() {
            const menu = document.getElementById('mobileMenu');
            if (menu.classList.contains('max-h-0')) {
                menu.classList.remove('max-h-0', 'opacity-0');
                menu.classList.add('max-h-96', 'opacity-100');
            } else {
                menu.classList.remove('max-h-96', 'opacity-100');
                menu.classList.add('max-h-0', 'opacity-0');
            }
        }
    </script>
</head>

<body class="">
    <header class=" bg-linear-to-r from-yellow-400 via-orange-400 to-red-500 shadow-lg py-4">
        <div class="flex justify-between items-center max-w-7xl mx-auto px-8">
            <!-- Logo -->
            <a href="home.php" class="text-4xl font-bold text-white tracking-wide hover:scale-105 transition-transform duration-300">
                <span class="drop-shadow-md">🏫 School</span>
            </a>

            <!-- Dropdown menu -->
            <el-dropdown class="md:block hidden">
                <button class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-blue-500 px-3 py-2 text-sm font-semibold text-white inset-ring-1 inset-ring-white/5 hover:bg-blue-600 cursor-pointer transition duration-200">
                    Settings
                    <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="-mr-1 size-5 text-white">
                        <path d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" fill-rule="evenodd" />
                    </svg>
                </button>

                <el-menu anchor="bottom end" popover class="w-56 origin-top-right rounded-md bg-gray-800 outline-1 -outline-offset-1 outline-white/10 transition transition-discrete [--anchor-gap:--spacing(2)] data-closed:scale-95 data-closed:transform data-closed:opacity-0 data-enter:duration-100 data-enter:ease-out data-leave:duration-75 data-leave:ease-in">
                    <div class="py-1">
                        <a href="school_setup.php" class="block px-4 py-2 text-sm text-gray-300 focus:bg-white/5 focus:text-white focus:outline-hidden">School Setup</a>
                        <a href="employee_management.php" class="block px-4 py-2 text-sm text-gray-300 focus:bg-white/5 focus:text-white focus:outline-hidden">Employee Management</a>
                        <a href="user_management.php" class="block px-4 py-2 text-sm text-gray-300 focus:bg-white/5 focus:text-white focus:outline-hidden">User Management</a>
                    </div>
                </el-menu>
            </el-dropdown>


            <!-- Mobile Menu Button -->
            <button onclick="toggleMenu()" class="md:hidden text-white text-3xl focus:outline-none">☰</button>
        </div>

        <!-- Mobile Menu with Animation -->
        <nav id="mobileMenu" class="overflow-hidden transition-all duration-500 ease-in-out max-h-0 opacity-0 flex flex-col bg-linear-to-r from-yellow-400 via-orange-400 to-red-500  text-white text-lg font-medium px-8 py-2 space-y-3 md:hidden rounded-b-2xl">
            <el-dropdown class="inline-block">
                <button class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-blue-500 px-3 py-2 text-sm font-semibold text-white inset-ring-1 inset-ring-white/5 hover:bg-blue-600 cursor-pointer transition duration-200">
                    Settings
                    <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="-mr-1 size-5 text-gray-400">
                        <path d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" fill-rule="evenodd" />
                    </svg>
                </button>

                <el-menu anchor="bottom end" popover class="w-56 origin-top-right rounded-md bg-gray-800 outline-1 -outline-offset-1 outline-white/10 transition transition-discrete [--anchor-gap:--spacing(2)] data-closed:scale-95 data-closed:transform data-closed:opacity-0 data-enter:duration-100 data-enter:ease-out data-leave:duration-75 data-leave:ease-in">
                    <div class="py-1">
                        <a href="school_setup.php" class="block px-4 py-2 text-sm text-gray-300 focus:bg-white/5 focus:text-white focus:outline-hidden">School Setup</a>
                        <a href="employee_management.php" class="block px-4 py-2 text-sm text-gray-300 focus:bg-white/5 focus:text-white focus:outline-hidden">Employee Management</a>
                        <a href="user_management.php" class="block px-4 py-2 text-sm text-gray-300 focus:bg-white/5 focus:text-white focus:outline-hidden">User Management</a>
                    </div>
                </el-menu>
            </el-dropdown>
        </nav>
    </header>