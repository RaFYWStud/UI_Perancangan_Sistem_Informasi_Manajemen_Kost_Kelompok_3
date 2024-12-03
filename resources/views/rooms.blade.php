<!-- resources/views/rooms.blade.php -->
<x-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4 text-gray-800">Manajemen Data Kamar dan Fasilitas</h1>

        <!-- Form Tambah Kamar -->
        <div class="bg-white p-6 rounded-lg shadow-lg mb-6 border border-gray-300">
            <h2 class="text-xl font-bold mb-4 text-gray-800">Tambah Kamar</h2>
            <form action="/rooms" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="room_number" class="block text-sm font-medium text-gray-700">Nomor Kamar</label>
                    <input type="text" name="room_number" id="room_number"
                        class="mt-1 block w-full border border-black bg-gray-200 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div class="mb-4">
                    <label for="facilities" class="block text-sm font-medium text-gray-700">Fasilitas</label>
                    <input type="text" name="facilities" id="facilities"
                        class="mt-1 block w-full border border-black bg-gray-200 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div class="mb-4">
                    <label for="price" class="block text-sm font-medium text-gray-700">Harga per Bulan</label>
                    <input type="text" name="price" id="price"
                        class="mt-1 block w-full border border-black bg-gray-200 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <button type="submit"
                    class="bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700">Tambah</button>
            </form>
        </div>

        <!-- Statistik Kamar -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @for ($i = 1; $i <= 10; $i++)
                <div class="bg-white p-6 rounded-lg shadow-lg border border-gray-300">
                    <h2 class="text-xl font-bold mb-2 text-gray-800">Nomor Kamar: {{ $i }}</h2>
                    <p class="text-gray-700">Status:
                        <span class="font-semibold {{ $i % 2 == 0 ? 'text-green-600' : 'text-red-600' }}">
                            {{ $i % 2 == 0 ? 'Tersedia' : 'Tidak Tersedia' }}
                        </span>
                    </p>
                    <p class="text-gray-700">Fasilitas: AC, WiFi, Kamar Mandi Dalam</p>
                    <p class="text-gray-700">Harga per Bulan: Rp {{ number_format(1000000 + $i * 100000, 0, ',', '.') }}
                    </p>
                    @if ($i % 2 != 0)
                        <p class="text-gray-700">Penyewa: John Doe</p>
                        <p class="text-gray-700">ID Penyewa: 100{{ $i }}</p>
                        <p class="text-gray-700">Periode Sewa: 01-01-2023 s/d 31-12-2023</p>
                    @endif
                    <div class="flex justify-end mt-4">
                        <button class="bg-yellow-500 text-white px-4 py-2 rounded-md hover:bg-yellow-600 mr-2"
                            onclick="openEditModal({{ $i }})">Edit</button>
                        <button class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600">Hapus</button>
                    </div>
                </div>
            @endfor
        </div>
    </div>

    <!-- Modal Edit Kamar -->
    <div id="editModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden">
        <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
            <h2 class="text-xl font-bold mb-4 text-gray-800">Edit Kamar</h2>
            <form>
                <div class="mb-4">
                    <label for="edit_room_number" class="block text-sm font-medium text-gray-700">Nomor Kamar</label>
                    <input type="text" name="edit_room_number" id="edit_room_number"
                        class="mt-1 block w-full border border-black bg-gray-200 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div class="mb-4">
                    <label for="edit_facilities" class="block text-sm font-medium text-gray-700">Fasilitas</label>
                    <input type="text" name="edit_facilities" id="edit_facilities"
                        class="mt-1 block w-full border border-black bg-gray-200 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div class="mb-4">
                    <label for="edit_price" class="block text-sm font-medium text-gray-700">Harga per Bulan</label>
                    <input type="text" name="edit_price" id="edit_price"
                        class="mt-1 block w-full border border-black bg-gray-200 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <button type="button" class="bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700"
                    onclick="closeEditModal()">Simpan</button>
                <button type="button" class="bg-gray-500 text-white py-2 px-4 rounded-md hover:bg-gray-600"
                    onclick="closeEditModal()">Batal</button>
            </form>
        </div>
    </div>

    <script>
        function openEditModal(roomId) {
            document.getElementById('editModal').classList.remove('hidden');
            // Populate the form with the room data (this is just a placeholder)
            document.getElementById('edit_room_number').value = roomId;
            document.getElementById('edit_facilities').value = 'AC, WiFi, Kamar Mandi Dalam';
            document.getElementById('edit_price').value = 1000000 + roomId * 100000;
        }

        function closeEditModal() {
            document.getElementById('editModal').classList.add('hidden');
        }
    </script>
</x-layout>
