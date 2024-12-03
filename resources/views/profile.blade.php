<!-- resources/views/profile.blade.php -->
<x-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4 text-gray-800">Profil Pemilik Kos</h1>

        <!-- Form Ubah Nama -->
        <div class="bg-white p-6 rounded-lg shadow-lg mb-6 border border-gray-300">
            <h2 class="text-xl font-bold mb-4 text-gray-800">Ubah Nama</h2>
            <form>
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Nama Baru</label>
                    <input type="text" name="name" id="name"
                        class="mt-1 block w-full border border-black rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        value="Nama Pemilik Kos">
                </div>
                <button type="button" class="bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700">Simpan
                    Perubahan</button>
            </form>
        </div>

        <!-- Form Ubah Kata Sandi -->
        <div class="bg-white p-6 rounded-lg shadow-lg mb-6 border border-gray-300">
            <h2 class="text-xl font-bold mb-4 text-gray-800">Ubah Kata Sandi</h2>
            <form>
                <div class="mb-4">
                    <label for="current_password" class="block text-sm font-medium text-gray-700">Kata Sandi Saat
                        Ini</label>
                    <input type="password" name="current_password" id="current_password"
                        class="mt-1 block w-full border border-black rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div class="mb-4">
                    <label for="new_password" class="block text-sm font-medium text-gray-700">Kata Sandi Baru</label>
                    <input type="password" name="new_password" id="new_password"
                        class="mt-1 block w-full border border-black rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div class="mb-4">
                    <label for="new_password_confirmation" class="block text-sm font-medium text-gray-700">Konfirmasi
                        Kata Sandi Baru</label>
                    <input type="password" name="new_password_confirmation" id="new_password_confirmation"
                        class="mt-1 block w-full border border-black rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <button type="button" class="bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700">Simpan
                    Perubahan</button>
            </form>
        </div>

        <!-- Form Ubah Foto Profil -->
        <div class="bg-white p-6 rounded-lg shadow-lg border border-gray-300">
            <h2 class="text-xl font-bold mb-4 text-gray-800">Ubah Foto Profil</h2>
            <form>
                <div class="mb-4">
                    <label for="profile_photo" class="block text-sm font-medium text-gray-700">Foto Profil Baru</label>
                    <input type="file" name="profile_photo" id="profile_photo"
                        class="mt-1 block w-full border border-black rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <button type="button" class="bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700">Simpan
                    Perubahan</button>
            </form>
        </div>
    </div>
</x-layout>
