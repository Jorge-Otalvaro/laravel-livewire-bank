<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ strtoupper(__('Dashboard')) }}
        </h2>
    </x-slot>

    @hasrole('client')
        <livewire:detail-account>
    @endhasrole   
</x-app-layout>
