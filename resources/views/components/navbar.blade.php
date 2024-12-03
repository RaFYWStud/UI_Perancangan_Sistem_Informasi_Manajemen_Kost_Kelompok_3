<!-- resources/views/components/navbar.blade.php -->
<nav class="bg-gray-900 shadow-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <a href="/dashboard" class="text-2xl font-bold text-white">KostAnda</a>
                <div class="hidden md:flex md:space-x-8 ml-10">
                    <a href="/dashboard"
                        class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Dashboard</a>
                    <a href="/rooms"
                        class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Manajemen
                        Kamar</a>
                    <a href="/register-tenant"
                        class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Manajemen
                        Penyewa</a>
                    <a href="/payments"
                        class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Pembayaran</a>
                    <a href="/fines"
                        class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Denda</a>
                    <a href="/reports"
                        class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Laporan</a>

                </div>
            </div>
            <div class="hidden md:flex items-center">
                <div class="relative">
                    <button type="button"
                        class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                        id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                        <span class="sr-only">Open user menu</span>
                        <img class="h-8 w-8 rounded-full"
                            src="https://www.gravatar.com/avatar/{{ md5(strtolower(trim('mamikos@gmail.com'))) }}?d=identicon"
                            alt="">
                    </button>
                    <div class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 hidden"
                        role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" id="user-menu">
                        <a href="/profile" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                            role="menuitem">Profil</a>
                        <a href="/logout" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                            role="menuitem">Logout</a>
                    </div>
                </div>
            </div>
            <div class="-mr-2 flex md:hidden">
                <button type="button"
                    class="bg-gray-800 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="md:hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="/dashboard"
                class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Dashboard</a>
            <a href="/rooms"
                class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Manajemen
                Kamar</a>
            <a href="/register-tenant"
                class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Daftarkan
                Penyewa</a>
            <a href="/payments"
                class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Pembayaran</a>
            <a href="/fines"
                class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Denda</a>
            <a href="/reports"
                class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Laporan</a>
            <a href="/profile"
                class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Profil</a>
            <a href="/logout"
                class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Logout</a>
        </div>
    </div>
</nav>

<script>
    document.getElementById('user-menu-button').addEventListener('click', function() {
        var menu = document.getElementById('user-menu');
        menu.classList.toggle('hidden');
    });

    document.querySelector('.md:hidden button').addEventListener('click', function() {
        var menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });
</script>
