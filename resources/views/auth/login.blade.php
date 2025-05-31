@extends('layouts.app')

@section('content')
<div class="min-vh-100 d-flex align-items-center justify-content-center bg-light py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-5">
                <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
                    <div class="card-body p-5">
                        <!-- Alert Message -->
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <div class="text-center mb-4">
                            <div class="mb-3">
                                <img src="{{ asset('images/login-icon.png') }}" alt="Login" style="width: 60px;">
                            </div>
                            <h3 class="fw-bold">To-Do-List</h3>
                            <p class="text-muted small">Masuk ke akun Anda untuk mulai produktif</p>
                        </div>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-floating mb-3">
                                <input type="text" name="login" class="form-control @error('login') is-invalid @enderror" id="loginInput" placeholder="Email atau Username" value="{{ old('login') }}" required autofocus>
                                <label for="loginInput"><i class="bi bi-person me-2"></i> Email atau Username</label>
                                @error('login')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-floating mb-4">
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="passwordInput" placeholder="Password" required>
                                <label for="passwordInput"><i class="bi bi-lock me-2"></i> Password</label>
                                @error('password')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary w-100 fw-semibold py-2 shadow-sm">
                                <i class="bi bi-box-arrow-in-right me-2"></i> Masuk
                            </button>

                            <div class="text-center mt-3">
                                <small class="text-muted">Belum punya akun?</small>
                                <a href="{{ route('register') }}" class="d-block text-decoration-none mt-1">Daftar Sekarang</a>
                            </div>

                            <hr class="my-4">

                            <div class="text-center text-muted small mb-2">Fitur Aplikasi</div>
                            <div class="row g-2 small text-muted">
                                <div class="col-6 d-flex align-items-center">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i> Task Management
                                </div>
                                <div class="col-6 d-flex align-items-center">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i> Progress Tracking
                                </div>
                                <div class="col-6 d-flex align-items-center">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i> Team Collaboration
                                </div>
                                <div class="col-6 d-flex align-items-center">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i> Priority Settings
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <p class="text-center text-muted small mt-4">© {{ date('Y') }} ToDoApp. All rights reserved.</p>
            </div>
        </div>
    </div>
</div>
@endsection
