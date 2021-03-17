<x-template-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="w-full p-6">
        <div class="bg-gray-900 border border-gray-800 rounded shadow">
            <div class="border-b border-gray-800 p-3">
                <p class="font-bold text-center text-white text-lg">{{$title}}</p>
            </div>
            <div class="bg-gray-800 sm:px-1 sm:py-1">
                <form action="{{route('datapasien.store')}}" method="POST">
                @csrf
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                <div class="px-4 py-5 bg-gray-900 space-y-6 sm:p-6">
                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                            <label for="namaclient" class="block text-sm font-medium text-white">
                                Nama Client
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <input type="text" name="namaclient" id="namaclient" placeholder="Nama Pemilik Hewan" class="@error('namaclient') border-red-600 @enderror focus:ring-green-500 focus:border-green-500 flex-1 block w-full rounded sm:text-sm border-gray-300 bg-gray-900 text-white">
                            </div>
                            <div class="text-xs text-red-500"> @error('namaclient') {{$message}} @enderror</div>
                        </div>
                    </div>
                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                            <label for="namahewan" class="block text-sm font-medium text-white">
                                Nama Hewan
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <input type="text" name="namahewan" id="namahewan" placeholder="Nama Hewan" class="@error('namahewan') border-red-600 @enderror focus:ring-green-500 focus:border-green-500 flex-1 block w-full rounded sm:text-sm border-gray-300 bg-gray-900 text-white">
                            </div>
                            <div class="text-xs text-red-500"> @error('namahewan') {{$message}} @enderror</div>
                        </div>
                    </div>
                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                            <label for="jenishewan" class="block text-sm font-medium text-white">
                                Jenis Hewan
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <input type="text" name="jenishewan" id="jenishewan" placeholder="Jenis Hewan" class="@error('jenishewan') border-red-600 @enderror focus:ring-green-500 focus:border-green-500 flex-1 block w-full rounded sm:text-sm border-gray-300 bg-gray-900 text-white">
                            </div>
                            <div class="text-xs text-red-500"> @error('jenishewan') {{$message}} @enderror</div>
                        </div>
                    </div>
                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                            <label for="jeniskelaminhewan" class="block text-sm font-medium text-white">
                                Jenis Kelamin Hewan
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <select name="jeniskelaminhewan" id="jeniskelaminhewan" class="@error('jeniskelaminhewan') border-red-600 @enderror focus:ring-green-500 focus:border-green-500 flex-1 block w-full rounded sm:text-sm border-gray-300 bg-gray-900 text-white py-2 px-2">
                                    <option value="">Masukan Pilihan</option>
                                    <option value="Jantan">Jantan</option>
                                    <option value="Betina">Betina</option>
                                </select>
                            </div>
                            <div class="text-xs text-red-500"> @error('jeniskelaminhewan') {{$message}} @enderror</div>
                        </div>
                    </div>
                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                            <label for="jenistindakan" class="block text-sm font-medium text-white">
                                Jenis Tindakan
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <select name="jenistindakan" id="jenistindakan" class="@error('jenistindakan') border-red-600 @enderror focus:ring-green-500 focus:border-green-500 flex-1 block w-full rounded sm:text-sm border-gray-300 bg-gray-900 text-white py-2 px-2">
                                    <option value="">Masukan Pilihan</option>
                                    <option value="Vaksinasi">Vaksinasi</option>
                                    <option value="Suntik Vitamin">Suntik Vitamin</option>
                                </select>
                            </div>
                            <div class="text-xs text-red-500"> @error('jenistindakan') {{$message}} @enderror</div>
                        </div>
                    </div>
                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                            <label for="alamat" class="block text-sm font-medium text-white">
                                Alamat
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <input type="text" name="alamat" id="alamat" placeholder="Alamat Client" class="@error('alamat') border-red-600 @enderror focus:ring-green-500 focus:border-green-500 flex-1 block w-full rounded sm:text-sm border-gray-300 bg-gray-900 text-white">
                            </div>
                            <div class="text-xs text-red-500"> @error('alamat') {{$message}} @enderror</div>
                        </div>
                    </div>
                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                            <label for="nohp" class="block text-sm font-medium text-white">
                                No Telphone
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <input type="text" name="nohp" id="nohp" placeholder="Nomer Yang Bisa Dihubungi" class="@error('nohp') border-red-600 @enderror focus:ring-green-500 focus:border-green-500 flex-1 block w-full rounded sm:text-sm border-gray-300 bg-gray-900 text-white">
                            </div>
                            <div class="text-xs text-red-500"> @error('nohp') {{$message}} @enderror</div>
                        </div>
                    </div>
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-3 sm:col-span-1">
                            <label for="waktu" class="block text-sm font-medium text-white">
                                Tanggal Berkunjung
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <input type="date" name="waktu" id="waktu" class="@error('waktu') border-red-600 @enderror focus:ring-green-500 focus:border-green-500 flex-1 block w-full rounded sm:text-sm border-gray-300 bg-gray-900 text-white">
                            </div>
                            <div class="text-xs text-red-500"> @error('waktu') {{$message}} @enderror</div>
                        </div>
                    </div>
                <div class="px-4 py-3 bg-gray-900 text-right sm:px-6">
                    <button type="submit" class="inline-flex justify-center bg-green-500 hover:bg-green-700 text-white py-2 px-5 rounded">
                        Simpan Data Baru
                    </button>
                </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</x-template-layout>