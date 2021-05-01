<x-slot name="header">
    <h2 class="text-center">Data Dokter</h2>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            @if (session()->has('message'))
            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3"
                role="alert">
                <div class="flex">
                    <div>
                        <p class="text-sm">{{ session('message') }}</p>
                    </div>
                </div>
            </div>
            @endif
            <button wire:click="create()"
                class="bg-green-700 text-white font-bold py-2 px-4 rounded my-3">Buat Data Dokter</button>
            @if($isModalOpen)
            @include('livewire.create')
            @endif
            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2 w-20">No.</th>
                        <th class="px-4 py-2">Nama</th>
                        <th class="px-4 py-2">Jenis Kelamin</th>
                        <th class="px-4 py-2">Tempat, Tanggal lahir</th>
                        <th class="px-4 py-2">No Handphone</th>
                        <th class="px-4 py-2">Agama</th>
                        <th class="px-4 py-2">Status</th>
                        <th class="px-4 py-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($datadokters as $dokter)
                    <tr>
                        <td class="border px-4 py-2">{{ $dokter->id }}</td>
                        <td class="border px-4 py-2">{{ $dokter->nama }}</td>
                        <td class="border px-4 py-2">{{ $dokter->jns_kelamin }}</td>
                        <td class="border px-4 py-2">{{ $dokter->tmpt_lhr, $dokter->tgl_lhr }}</td>
                        <td class="border px-4 py-2">{{ $dokter->phone }}</td>
                        <td class="border px-4 py-2">{{ $dokter->agama }}</td>
                        <td class="border px-4 py-2">{{ $dokter->status }}</td>
                        <td class="border px-4 py-2">
                            <button wire:click="edit({{ $dokter->id }})"
                                class="bg-blue-500  text-white font-bold py-2 px-4 rounded">Edit</button>
                            <button wire:click="delete({{ $dokter->id }})"
                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>