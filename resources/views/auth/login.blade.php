@extends('layouts.app')

@section('title', 'Login')

@section('content')

<div class="row jusify-content-center">
    <div class="col-md-5">
        <div class="card shadow-sm">
            <div class="card-body">
                <h1 class="h4 mb-4">Entar</h1>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" id="email" class="form-control @error('email') is-invalid @enderror"
                            value="{{ old('email') }}" required autofocus>
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Senha</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                    <div class="form-check mb-3">
                        <input type="checkbox" name="remember" value="1" id="remember" class="form-check-input">
                        <label for="remember" class="form-check-label">Lembra de mim</label>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Entar</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection