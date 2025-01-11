<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-blue-500 dark:text-gray-100 text-center">
                    <h1 class="text-2xl font-bold">{{ __("Jayusman Market") }}</h1>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-6">
                <div class="bg-blue-100 dark:bg-blue-900 overflow-hidden shadow-lg sm:rounded-lg p-6 fade-in hover:scale-105 transition transform duration-300">
                    <div class="flex items-center">
                        <svg class="w-8 h-8 text-blue-600 dark:text-blue-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 2a8 8 0 100 16 8 8 0 000-16zm0 14a6 6 0 110-12 6 6 0 010 12z"/></svg>
                        <h3 class="ml-4 text-lg font-semibold text-gray-800 dark:text-gray-100">Penjualan</h3>
                    </div>
                    <div class="mt-4 text-3xl font-bold text-gray-900 dark:text-gray-200">
                        3470
                    </div>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">Jumlah Penjualan bulan ini</p>
                </div>

                <div class="bg-green-100 dark:bg-green-900 overflow-hidden shadow-lg sm:rounded-lg p-6 fade-in hover:scale-105 transition transform duration-300">
                    <div class="flex items-center">
                        <svg class="w-8 h-8 text-green-600 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 2a8 8 0 100 16 8 8 0 000-16zm0 14a6 6 0 110-12 6 6 0 010 12z"/></svg>
                        <h3 class="ml-4 text-lg font-semibold text-gray-800 dark:text-gray-100">Stok</h3>
                    </div>
                    <div class="mt-4 text-3xl font-bold text-gray-900 dark:text-gray-200">
                        300
                    </div>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">Jumlah barang yang tersedia di gudang</p>
                </div>

                <div class="bg-yellow-100 dark:bg-yellow-900 overflow-hidden shadow-lg sm:rounded-lg p-6 fade-in hover:scale-105 transition transform duration-300">
                    <div class="flex items-center">
                        <svg class="w-8 h-8 text-yellow-600 dark:text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 2a8 8 0 100 16 8 8 0 000-16zm0 14a6 6 0 110-12 6 6 0 010 12z"/></svg>
                        <h3 class="ml-4 text-lg font-semibold text-gray-800 dark:text-gray-100">Rating</h3>
                    </div>
                    <div class="mt-4 text-3xl font-bold text-gray-900 dark:text-gray-200">
                        4/5
                    </div>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">Rata-rata ulasan customer</p>
                </div>

                <div class="bg-red-100 dark:bg-red-900 overflow-hidden shadow-lg sm:rounded-lg p-6 fade-in hover:scale-105 transition transform duration-300">
                    <div class="flex items-center">
                        <svg class="w-8 h-8 text-red-600 dark:text-red-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 2a8 8 0 100 16 8 8 0 000-16zm0 14a6 6 0 110-12 6 6 0 010 12z"/></svg>
                        <h3 class="ml-4 text-lg font-semibold text-gray-800 dark:text-gray-100">Penghasilan</h3>
                    </div>
                    <div class="mt-4 text-3xl font-bold text-gray-900 dark:text-gray-200">
                        Rp 14.075.500
                    </div>
                    <p class="mt-2 text-gray-600 dark:text-gray-400">Total Penghasilan bulan ini</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>