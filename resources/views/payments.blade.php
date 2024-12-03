<!-- resources/views/payments.blade.php -->
<x-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-6 text-gray-800">Input Pembayaran</h1>

        <!-- Form Input Pembayaran -->
        <div class="bg-white p-6 rounded shadow-lg mb-6 border border-gray-300">
            <h2 class="text-xl font-bold mb-4 text-gray-800">Tambah Pembayaran</h2>
            <form action="/payments" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="tenant_id" class="block text-sm font-medium text-gray-700">ID Penyewa</label>
                    <input type="text" name="tenant_id" id="tenant_id"
                        class="mt-1 block w-full border border-black bg-gray-200 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div class="mb-4">
                    <label for="tenant_name" class="block text-sm font-medium text-gray-700">Nama Penyewa</label>
                    <input type="text" name="tenant_name" id="tenant_name"
                        class="mt-1 block w-full border border-black bg-gray-200 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div class="mb-4">
                    <label for="amount" class="block text-sm font-medium text-gray-700">Jumlah Pembayaran</label>
                    <input type="number" name="amount" id="amount"
                        class="mt-1 block w-full border border-black bg-gray-200 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div class="mb-4">
                    <label for="start_date" class="block text-sm font-medium text-gray-700">Tanggal Mulai Sewa</label>
                    <input type="date" name="start_date" id="start_date"
                        class="mt-1 block w-full border border-black bg-gray-200 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div class="mb-4">
                    <label for="end_date" class="block text-sm font-medium text-gray-700">Tanggal Akhir Sewa</label>
                    <input type="date" name="end_date" id="end_date"
                        class="mt-1 block w-full border border-black bg-gray-200 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div class="mb-4">
                    <label for="payment_date" class="block text-sm font-medium text-gray-700">Tanggal Pembayaran</label>
                    <input type="date" name="payment_date" id="payment_date"
                        class="mt-1 block w-full border border-black bg-gray-200 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <button type="submit" class="bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700">Tambah
                    Pembayaran</button>
            </form>
        </div>
    </div>
</x-layout>
