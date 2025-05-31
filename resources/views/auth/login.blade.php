{-- layouts/app.blade.php --}
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | ToDo App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f7f7f7;
            color: #111;
        }
        .card.auth-card {
            background-color: #fff;
            border-color: #333;
        }
        .btn-dark:hover {
            background-color: #222 !important;
            border-color: #000 !important;
        }
        .input-group-text, .form-control {
            background-color: #fff !important;
            border-color: #999 !important;
            color: #111 !important;
        }
    </style>
</head>
<body>
    {-- content --}
    <div class="min-vh-100 d-flex align-items-center justify-content-center bg-white text-dark py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-5">
                    <div class="card border border-dark shadow-sm rounded-4 bg-light">
                        <div class="card-body p-5">
                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    { session('success') }
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                            <div class="text-center mb-4">
                                <i class="bi bi-list-check display-4 text-dark mb-2"></i>
                                <h3 class="fw-bold text-dark">To-Do-List</h3>
                                <p class="text-muted small">Silakan masuk ke akun Anda</p>
                            </div>

                            <form method="POST" action="{ route('login') }">
                                @csrf

                                <div class="form-floating mb-3">
                                    <input type="text" name="login" class="form-control bg-white border-dark text-dark @error('login') is-invalid @enderror"
                                        id="loginInput" placeholder="Email atau Username" value="{ old('login') }" required autofocus>
                                    <label for="loginInput"><i class="bi bi-person me-2"></i> Email atau Username</label>
                                    @error('login')
                                        <div class="invalid-feedback d-block text-danger">{ $message }</div>
                                    @enderror
                                </div>

                                <div class="form-floating mb-4">
                                    <input type="password" name="password" class="form-control bg-white border-dark text-dark @error('password') is-invalid @enderror"
                                        id="passwordInput" placeholder="Password" required>
                                    <label for="passwordInput"><i class="bi bi-lock me-2"></i> Password</label>
                                    @error('password')
                                        <div class="invalid-feedback d-block text-danger">{ $message }</div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn w-100 py-2 btn-dark fw-semibold shadow-sm">
                                    <i class="bi bi-box-arrow-in-right me-2"></i> Masuk
                                </button>

                                <div class="text-center mt-3">
                                    <small class="text-muted">Belum punya akun?</small><br>
                                    <a href="{ route('register') }" class="text-decoration-none text-dark">Daftar Sekarang</a>
                                </div>

                                <hr class="my-4">

                                <div class="text-center text-muted small mb-2">Fitur Aplikasi</div>
                                <div class="row g-2 small text-muted">
                                    <div class="col-6 d-flex align-items-center">
                                        <i class="bi bi-check-circle me-2"></i> Task Management
                                    </div>
                                    <div class="col-6 d-flex align-items-center">
                                        <i class="bi bi-check-circle me-2"></i> Progress Tracking
                                    </div>
                                    <div class="col-6 d-flex align-items-center">
                                        <i class="bi bi-check-circle me-2"></i> Team Collaboration
                                    </div>
                                    <div class="col-6 d-flex align-items-center">
                                        <i class="bi bi-check-circle me-2"></i> Priority Settings
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <p class="text-center text-muted small mt-4">© { date('Y') } ToDoApp. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>