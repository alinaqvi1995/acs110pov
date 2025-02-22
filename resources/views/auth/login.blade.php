<section class="auth-page-wrapper p-2 p-lg-4 position-relative d-flex align-items-center justify-content-center min-vh-100">
    <div class="card mb-0 w-100 p-3 p-lg-2" style="background-image: url('{{ asset('assets/images/auth/auth.jpg') }}'); background-size: cover; background-position: center;">
        <div class="effect-one"></div>
        <div class="row g-0 align-items-center">
            <div class="col-xxl-8 order-last order-xl-first">
                <div class="card auth-card border-0 shadow-none mb-0 bg-transparent">
                    <div class="card-body p-4 p-xl-5 d-flex justify-content-between flex-column h-100">
                        <div class="text-center mt-auto">
                            <p class="mb-0 mt-3 text-white">&copy;
                                <script>document.write(new Date().getFullYear())</script> Dosix. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-xxl-4 mx-auto order-first order-xl-last">
                <div class="card shadow-lg border-none m-lg-5">
                    <div class="card-body">
                        <div class="text-center mt-4">
                            <div class="mb-4 pb-2">
                                {{-- <a href="{{ route('dashboard-1') }}" class="auth-logo">
                                    <img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="30" class="auth-logo-dark mx-auto">
                                    <img src="{{ asset('assets/images/logo-light.png') }}" alt="" height="30" class="auth-logo-light mx-auto">
                                </a> --}}
                            </div>
                            <h5 class="fs-3xl">Welcome Back</h5>
                            <p class="text-muted">Sign in to continue to Dosix.</p>
                        </div>
                        <div class="p-2 mt-4">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="{{ old('email') }}" required autofocus>
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                                <div class="mb-3">
                                    <div class="float-end">
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}" class="text-muted">Forgot password?</a>
                                        @endif
                                    </div>
                                    <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                                    <div class="position-relative auth-pass-inputgroup mb-3">
                                        <input type="password" class="form-control pe-5 password-input" id="password" name="password" placeholder="Enter password" required>
                                        <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                    </div>
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="remember_me" name="remember">
                                    <label class="form-check-label" for="remember_me">Remember me</label>
                                </div>
                                <div class="mt-4">
                                    <button class="btn btn-primary w-100" type="submit">Sign In</button>
                                </div>
                            </form>
                            <div class="text-center mt-5">
                                <p class="mb-0">Don't have an account? <a href="{{ route('register') }}" class="fw-semibold text-secondary text-decoration-underline">Sign Up</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>