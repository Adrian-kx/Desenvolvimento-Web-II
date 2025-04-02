@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center">Título Exemplo</h1>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form>
                <div class="mb-3">
                    <label for="exampleInput" class="form-label">Exemplo</label>
                    <input type="text" class="form-control" id="exampleInput">
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>
@endsection
