<x-app-layout>
    <x-slot name="header">
        <h2 class="text-base font-medium text-gray-700">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-4">
        <div class="max-w-3xl mx-auto">
            <div class="bg-white shadow rounded p-4">
                <p class="text-gray-500">{{ __("Você está logado!") }}</p>
            </div>
        </div>
    </div>
</x-app-layout>
