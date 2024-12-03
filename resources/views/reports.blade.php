<!-- resources/views/reports.blade.php -->
<x-layout>
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-6 text-gray-800">Laporan Pembayaran dan Denda</h1>

        <!-- Laporan Pembayaran -->
        <div class="bg-white p-6 rounded shadow-lg mb-6 border border-gray-300">
            <h2 class="text-xl font-bold mb-4 text-gray-800">Riwayat Pembayaran</h2>
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama
                            Penyewa</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jumlah
                            Pembayaran</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Periode Pembayaran</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Tanggal Pembayaran</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <!-- Data pembayaran dummy -->
                    @for ($i = 1; $i <= 10; $i++)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Penyewa
                                {{ $i }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Rp
                                {{ number_format(1000000 + $i * 100000, 0, ',', '.') }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                01-{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}-2023 s/d
                                30-{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}-2023</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ now()->subDays($i * 5)->format('d-m-Y') }}</td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>

        <!-- Laporan Denda -->
        <div class="bg-white p-6 rounded shadow-lg border border-gray-300">
            <h2 class="text-xl font-bold mb-4 text-gray-800">Laporan Denda</h2>
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama
                            Penyewa</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jenis
                            Denda</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Jumlah Denda</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Tanggal Denda</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <!-- Data denda dummy -->
                    @for ($i = 1; $i <= 10; $i++)
                        @php
                            $fineTypes = ['Terlambat Bayar', 'Kerusakan Fasilitas', 'Kebersihan'];
                            $fineType = $fineTypes[array_rand($fineTypes)];
                        @endphp
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Penyewa
                                {{ $i }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $fineType }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Rp
                                {{ number_format(50000 + $i * 10000, 0, ',', '.') }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ now()->subDays($i * 3)->format('d-m-Y') }}</td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
