@extends('layouts.app')
@section('title', 'Editar categoria')
@section('content')

<h1 class="h3 mb-4">Editar categoria</h1>
<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.categories.update') }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" name="name" value="{{ old('name', $category->name) }}" class="form-control" required>
            </div>
            <button class="btn btn-primary">Atualizar</button>
            <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</div>
@endsection