@extends('layouts.app')

@section('title', 'Criar Conta')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm">
            <div class="card-body">
                <h1 class="h4 mb-4">Criar conta</h1>
                <form action="{{ route('register.store') }}" method="POST">
                    @csrf
                    <div class="mb3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control"
                            required>
                    </div>
                    <div class="md-3">
                        <label for="password" class="form-label">Senha</label>
                        <input type="passord" name="password" id="password" value="{{ old('password') }}"
                            class="form-control" required>
                    </div>
                    <div class="mb3">
                        <label form="password_confirmation" class="form-label">Confirmarsenha</label>
                        <input type="password" name="password_confirmation" id="password_confirmation "
                            class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Criar conta</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection