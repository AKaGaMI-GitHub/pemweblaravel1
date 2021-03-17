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
            <div class="grid grid-cols-12">
                <div class="col-span-6 p-3">
                    <a href="{{route('datapasien.create')}}"><button class="bg-green-500 hover:bg-yellow-400 text-white font-bold py-2 px-3 rounded">+ Tambah Data</button></a>
                </div>
                <div class="col-span-6 p-3 flex justify-end">
                    <input type="text" placeholder="Search" class="py-2 px-3 bg-gray-900 text-sm text-gray-400 border-gray-800 focus:ring-green-500 focus:border-green-500">
                    <button class="bg-green-500 hover:bg-green-700 text-white py-2 px-3">Search</button>
                </div>
            </div>
            <div class="p-4">
                <table class="w-full p-5">
                    <thead>
                        <tr class="font-bold text-left text-white">
                            <th>Tanda</th>
                            <th>No</th>
                            <th>Nama Client</th>
                            <th>Nama Hewan</th>
                            <th>Jenis Hewan</th>
                            <th>Jenis Tindakan</th>
                            <th>Alamat</th>
                            <th>No Telp</th>
                            <th>Tanggal Berkunjung</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                        <tbody class="text-left text-gray-400">
                            <?php $no=1;?>
                            @foreach ($datapasien as $item)
                                <tr>
                                    <td type="checkbox" name="" id=""></td>
                                    <td>{{$no}}</td>
                                    <td>{{$item->namaclient}}</td>
                                    <td>{{$item->namahewan}}</td>
                                    <td>{{$item->jenishewan}}</td>
                                    <td>{{$item->jenistindakan}}</td>
                                    <td>{{$item->alamat}}</td>
                                    <td>{{$item->nohp}}</td>
                                    <td>{{$item->waktu}}</td>
                                    <td>
                                        <button class="bg-blue-500 hover:bg-blue-800 text-white font-bold py-1 px-4 rounded">Edit</button>
                                        <button class="bg-red-600 hover:bg-red-800 text-white font-bold py-1 px-4 rounded">Delete</button>
                                    </td>
                                </tr>
                            <?php $no++;?>
                            @endforeach
                        </tbody>
                </table>
            </div>
        </div>
    </div>
</x-template-layout>
