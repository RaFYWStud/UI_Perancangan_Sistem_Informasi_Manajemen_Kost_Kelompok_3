<!-- resources/views/register-tenants.blade.php -->
<x-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4 text-gray-800">Pendaftaran Penyewa</h1>

        <!-- Form Pendaftaran Penyewa -->
        <div class="bg-white p-6 rounded-lg shadow-lg mb-6 border border-gray-300">
            <h2 class="text-xl font-bold mb-4 text-gray-800">Tambah Penyewa</h2>
            <form action="/tenants" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="tenant_id" class="block text-sm font-medium text-gray-700">ID Penyewa</label>
                    <input type="text" name="tenant_id" id="tenant_id"
                        class="mt-1 block w-full border border-black bg-gray-200 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Nama Penyewa</label>
                    <input type="text" name="name" id="name"
                        class="mt-1 block w-full border border-black bg-gray-200 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email"
                        class="mt-1 block w-full border border-black bg-gray-200 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div class="mb-4">
                    <label for="room_id" class="block text-sm font-medium text-gray-700">Nomor Kamar</label>
                    <input type="text" name="room_id" id="room_id"
                        class="mt-1 block w-full border border-black bg-gray-200 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <button type="submit" class="bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700">Tambah
                    Penyewa</button>
            </form>
        </div>

        <!-- Data Penyewa -->
        <div class="bg-white p-6 rounded-lg shadow-lg border border-gray-300">
            <h2 class="text-xl font-bold mb-4 text-gray-800">Data Penyewa</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @for ($i = 1; $i <= 10; $i++)
                    @php
                        $email = fake()->unique()->safeEmail();
                        $gravatar = 'https://www.gravatar.com/avatar/' . md5(strtolower(trim($email))) . '?d=mp';
                    @endphp
                    <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                        <img src="{{ $gravatar }}" alt="Avatar" class="w-16 h-16 mx-auto mb-4">
                        <h3 class="text-lg font-bold mb-2">Penyewa ID: 100{{ $i }}</h3>
                        <p class="text-gray-700">Nama: {{ fake()->name() }}</p>
                        <p class="text-gray-700">Email: {{ $email }}</p>
                        <p class="text-gray-700">Nomor Kamar: {{ $i }}</p>
                        <p class="text-gray-700">Tanggal Mulai Sewa: {{ now()->subDays(rand(1, 365))->format('d-m-Y') }}
                        </p>
                        <p class="text-gray-700">Tanggal Akhir Sewa: {{ now()->addDays(rand(1, 365))->format('d-m-Y') }}
                        </p>
                        <div class="flex justify-end mt-4">
                            <button class="bg-yellow-500 text-white px-4 py-2 rounded-md hover:bg-yellow-600 mr-2"
                                onclick="openEditModal({{ $i }})">Edit</button>
                            <button class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600">Hapus</button>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>

    <!-- Modal Edit Penyewa -->
    <div id="editModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden">
        <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
            <h2 class="text-xl font-bold mb-4 text-gray-800">Edit Penyewa</h2>
            <form>
                <div class="mb-4">
                    <label for="edit_tenant_id" class="block text-sm font-medium text-gray-700">ID Penyewa</label>
                    <input type="text" name="edit_tenant_id" id="edit_tenant_id"
                        class="mt-1 block w-full border border-black bg-gray-200 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div class="mb-4">
                    <label for="edit_name" class="block text-sm font-medium text-gray-700">Nama Penyewa</label>
                    <input type="text" name="edit_name" id="edit_name"
                        class="mt-1 block w-full border border-black bg-gray-200 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div class="mb-4">
                    <label for="edit_email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="edit_email" id="edit_email"
                        class="mt-1 block w-full border border-black bg-gray-200 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div class="mb-4">
                    <label for="edit_room_id" class="block text-sm font-medium text-gray-700">Nomor Kamar</label>
                    <input type="text" name="edit_room_id" id="edit_room_id"
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
        function openEditModal(tenantId) {
            document.getElementById('editModal').classList.remove('hidden');
            // Populate the form with the tenant data (this is just a placeholder)
            document.getElementById('edit_tenant_id').value = tenantId;
            document.getElementById('edit_name').value = 'John Doe';
            document.getElementById('edit_email').value = 'johndoe@example.com';
            document.getElementById('edit_room_id').value = tenantId;
            document.getElementById('edit_start_date').value = '2023-01-01';
            document.getElementById('edit_end_date').value = '2023-12-31';
        }

        function closeEditModal() {
            document.getElementById('editModal').classList.add('hidden');
        }
    </script>
</x-layout>
