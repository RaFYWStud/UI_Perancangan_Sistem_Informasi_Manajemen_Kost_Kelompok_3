<!-- resources/views/dashboard.blade.php -->
<x-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-6 text-gray-800">Dashboard</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-gradient-to-r from-indigo-500 to-purple-500 p-6 rounded-lg shadow-lg text-white">
                <h2 class="text-xl font-bold mb-2">Jumlah Penyewa</h2>
                <p class="text-2xl">50 Penyewa</p>
            </div>
            <div class="bg-gradient-to-r from-green-500 to-teal-500 p-6 rounded-lg shadow-lg text-white">
                <h2 class="text-xl font-bold mb-2">Total Kamar</h2>
                <p class="text-2xl">100 Kamar</p>
            </div>
            <div class="bg-gradient-to-r from-yellow-500 to-orange-500 p-6 rounded-lg shadow-lg text-white">
                <h2 class="text-xl font-bold mb-2">Kamar yang Ditempati</h2>
                <p class="text-2xl">75 Kamar</p>
            </div>
            <div class="bg-gradient-to-r from-red-500 to-pink-500 p-6 rounded-lg shadow-lg text-white">
                <h2 class="text-xl font-bold mb-2">Kamar yang Tersedia</h2>
                <p class="text-2xl">25 Kamar</p>
            </div>
            <div class="bg-gradient-to-r from-blue-500 to-cyan-500 p-6 rounded-lg shadow-lg text-white">
                <h2 class="text-xl font-bold mb-2">Pendapatan Bulanan</h2>
                <p class="text-2xl">Rp 50,000,000</p>
            </div>
            <div class="bg-gradient-to-r from-gray-500 to-gray-700 p-6 rounded-lg shadow-lg text-white">
                <h2 class="text-xl font-bold mb-2">Denda Bulanan</h2>
                <p class="text-2xl">Rp 5,000,000</p>
            </div>
        </div>
    </div>
</x-layout>
