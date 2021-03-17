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
            <div class="">
                <!-- Konten -->
            </div>
        </div>
    </div>
</x-template-layout>
