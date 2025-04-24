<x-app-layout>
    <x-slot name="header">
        <h2 class="text-base font-medium text-gray-700">
            {{ __('Novo Contato') }}
        </h2>
    </x-slot>
    <div class="py-4">
        <div class="max-w-3xl mx-auto">
            <form action="{{ route('contatos.store') }}" method="POST" class="bg-white shadow rounded p-4">
                @csrf
                <div class="mb-3">
                    <label for="tipo_contato_id" class="block text-sm font-medium text-gray-600">Tipo contato:</label>
                    <select name="tipo_contato_id" id="tipo_contato_id" class="w-full border-gray-300 rounded p-2" required>
                        <option value="">Selecione</option>
                        @foreach ($tipocontatos as $tipocontato)
                            <option value="{{ $tipocontato->id }}">{{ $tipocontato->descricao }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="nome" class="block text-sm font-medium text-gray-600">Nome:</label>
                    <input type="text" name="nome" id="nome" class="w-full border-gray-300 rounded p-2" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="block text-sm font-medium text-gray-600">Email:</label>
                    <input type="email" name="email" id="email" class="w-full border-gray-300 rounded p-2" required>
                </div>
                <div class="mb-3">
                    <label for="telefone" class="block text-sm font-medium text-gray-600">Telefone:</label>
                    <input type="text" name="telefone" id="telefone" class="w-full border-gray-300 rounded p-2">
                </div>
                <div class="mb-3">
                    <label for="cidade" class="block text-sm font-medium text-gray-600">Cidade:</label>
                    <input type="text" name="cidade" id="cidade" class="w-full border-gray-300 rounded p-2">
                </div>
                <div class="mb-3">
                    <label for="estado" class="block text-sm font-medium text-gray-600">Estado:</label>
                    <input type="text" name="estado" id="estado" class="w-full border-gray-300 rounded p-2">
                </div>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Salvar</button>
                <a href="{{ route('contatos.index') }}" class="text-gray-500 hover:underline ml-4">Voltar</a>
            </form>
        </div>
    </div>
</x-app-layout>

