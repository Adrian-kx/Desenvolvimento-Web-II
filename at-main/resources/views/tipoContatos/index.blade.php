<x-app-layout>
    <x-slot name="header">
        <h2 class="text-base font-medium text-gray-700">
            {{ __('Tipo Contatos') }}
        </h2>
        <a href="{{ route('tipocontatos.create') }}" class="text-blue-600 hover:underline">Novo Tipo de Contato</a>
    </x-slot>
    <script type="text/javascript">
        function toggleDescription(id) {
            const descricao = document.getElementById(id);
            descricao.classList.toggle('hidden');
        }
    </script>
    <div class="py-4">
        <div class="max-w-3xl mx-auto">
            <div class="bg-white shadow rounded p-4">
                @foreach ($tipocontatos as $tipocontato)
                    <div class="mb-3">
                        <strong class="cursor-pointer" onclick="toggleDescription('descricao-{{ $tipocontato->id }}')">{{ $tipocontato->nome }}</strong>
                        <a href="{{ url("tipocontatos") }}/{{ $tipocontato->id }}/edit" class="text-green-600 hover:underline ml-2">Alterar</a>
                        <span class="text-red-600 hover:underline cursor-pointer ml-2" onclick="document.getElementById('form-tipocontatos-excluir-{{$tipocontato->id}}').submit()">Excluir</span>
                        <form id="form-tipocontatos-excluir-{{$tipocontato->id}}" action="{{route('tipocontatos.destroy',$tipocontato->id)}}" method="POST" class="hidden">
                            @csrf
                            @method('DELETE')
                        </form>
                        <p id="descricao-{{ $tipocontato->id }}" class="text-gray-500 mt-2 hidden">
                            {{ $tipocontato->descricao }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
