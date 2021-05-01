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
                    <a href=""><button class="bg-green-500 hover:bg-yellow-400 text-white font-bold py-2 px-3 rounded">+ Tambah Data</button></a>
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
                            <th>No</th>
                            <th>Nama Hewan</th>
                            <th>Jenis Hewan</th>
                            <th>Jenis Kelamin</th>
                            <th>Nama Pemilik</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                        <tbody class="text-left text-gray-400">
                            <?php $no=1;?>
                                <tr>
                                    <td>{{$no}}</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <form action="" method="post">
                                            <a href="" class="bg-blue-500 hover:bg-blue-800 text-white font-bold py-1 px-4 rounded">Edit</a>
                                            @csrf
                                            @method('DELETE')                                 
                                            <input type="submit" value="Delete" class="bg-red-600 hover:bg-red-800 text-white font-bold py-1 px-4 rounded"></input>
                                        </form>
                                    </td>
                                </tr>
                            <?php $no++;?>
                        </tbody>
                </table>
            </div>
        </div>
    </div>
</x-template-layout>
