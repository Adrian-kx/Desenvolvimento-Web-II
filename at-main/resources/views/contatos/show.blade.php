<x-app-layout>
    <x-slot name="header">
        <h2 class="text-base font-medium text-gray-700">
            {{ __('Contato') }} :: {{ $contato->id }} - {{ $contato->nome }}
        </h2>
    </x-slot>
    <div class="py-4">
        <div class="max-w-3xl mx-auto">
            <div class="bg-white shadow rounded p-4">
                <ul class="text-gray-600">
                    <li><strong>Id:</strong> {{ $contato->id }}</li>
                    <li><strong>Tipo contato:</strong> {{ $contato->tipoContato ? $contato->tipoContato->descricao : 'N/A' }}</li>
                    <li><strong>Nome:</strong> {{ $contato->nome }}</li>
                    <li><strong>Email:</strong> <a href="mailto:{{ $contato->email }}" class="text-blue-600 hover:underline">{{ $contato->email }}</a></li>
                    <li><strong>Telefone:</strong> {{ $contato->telefone }}</li>
                    <li><strong>Cidade:</strong> {{ $contato->cidade }}</li>
                    <li><strong>Estado:</strong> {{ $contato->estado }}</li>
                    <li><strong>Data de criação:</strong> {{ $contato->created_at }}</li>
                    <li><strong>Data de atualização:</strong> {{ $contato->updated_at }}</li>
                </ul>
                <div class="mt-4">
                    <a href="{{ route('contatos.index') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
