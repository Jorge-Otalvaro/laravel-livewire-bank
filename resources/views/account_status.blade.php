<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ strtoupper(__('Account Status')) }}
        </h2>
    </x-slot>

    <livewire:status-account>
</x-app-layout>
