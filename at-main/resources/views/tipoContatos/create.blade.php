<x-app-layout>
    <x-slot name="header">
        <h2 class="text-base font-medium text-gray-700">
            {{ __('Novo Tipo Contato') }}
        </h2>
    </x-slot>
    <div class="py-4">
        <div class="max-w-3xl mx-auto">
            <form action="{{ route('tipocontatos.store') }}" method="POST" class="bg-white shadow rounded p-4">
                @csrf
                <div class="mb-3">
                    <label for="nome" class="block text-sm font-medium text-gray-600">Nome:</label>
                    <input type="text" name="nome" id="nome" class="w-full border-gray-300 rounded p-2" required>
                </div>
                <div class="mb-3">
                    <label for="descricao" class="block text-sm font-medium text-gray-600">Descrição:</label>
                    <textarea name="descricao" id="descricao" class="w-full border-gray-300 rounded p-2" required></textarea>
                </div>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Salvar</button>
                <a href="{{ route('tipocontatos.index') }}" class="text-gray-500 hover:underline ml-4">Voltar</a>
            </form>
        </div>
    </div>
</x-app-layout>

