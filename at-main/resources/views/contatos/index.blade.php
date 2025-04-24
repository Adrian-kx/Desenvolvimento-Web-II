<x-app-layout>
    <x-slot name="header">
        <h2 class="text-base font-medium text-gray-700">
            {{ __('Contatos') }}
        </h2>
        <div class="mt-2 flex items-center gap-2">
            <a href="{{ route('contatos.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Novo Contato</a>
            <form action="{{ url('contatos/search') }}" method="GET" class="flex items-center gap-2">
                <input type="text" name="q" placeholder="Pesquisar..." class="border-gray-300 rounded p-2">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    <img src="{{ asset('images/lupa.png') }}" alt="Pesquisar" class="w-4 h-4">
                </button>
            </form>
            @if($q !== null)
                <a href="{{ url('contatos') }}" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">Limpar</a>
            @endif
        </div>
    </x-slot>
    <div class="py-4">
        <div class="max-w-3xl mx-auto">
            <div class="bg-white shadow rounded p-4">
                @if (session('success'))
                    <div id="success-message" class="bg-green-500 text-white px-4 py-2 rounded mb-4">
                        {{ session('success') }}
                    </div>
                    <script>
                        setTimeout(() => {
                            const successMessage = document.getElementById('success-message');
                            if (successMessage) {
                                successMessage.style.display = 'none';
                            }
                        }, 5000);
                    </script>
                @endif
                @foreach ($contatos as $contato)
                    <div class="mb-3 flex items-center justify-between">
                        <div>
                            <a href="{{ route('contatos.show', $contato->id) }}" class="text-blue-600 hover:underline">
                                <strong>{{ $contato->nome }}</strong>
                            </a> - 
                            <a href="mailto:{{ $contato->email }}" class="text-gray-600 hover:underline">{{ $contato->email }}</a>
                        </div>
                        <div class="flex items-center gap-2">
                            <a href="{{ url("contatos") }}/{{ $contato->id }}/edit" class="bg-green-600 text-white px-3 py-1 rounded hover:bg-green-700">Alterar</a>
                            <button type="button" class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700"
                                onclick="if(confirm('Tem certeza que deseja excluir este contato?')) document.getElementById('form-contatos-excluir-{{$contato->id}}').submit()">Excluir</button>
                            <form id="form-contatos-excluir-{{$contato->id}}" action="{{route('contatos.destroy',$contato->id)}}" method="POST" class="hidden">
                                @csrf
                                @method('DELETE')
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
