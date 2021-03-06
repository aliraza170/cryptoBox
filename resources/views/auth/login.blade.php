<x-website-layout>
    <x-slot name="pageTitle">Sign In</x-slot>
    <div class="authincation section-padding">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-xl-5 col-md-6">
                    <div class="auth-form card">
                        <div class="card-header justify-content-center">
                            <h4 class="card-title">Sign in</h4>
                        </div>
                        <div class="card-body">

                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4" :status="session('status')" />

                            <form method="POST" class="signin_validate" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" placeholder="hello@example.com" name="email" value="{{ old('email') }}">
                                    @error('email')
                                        <label id="email-error" class="error" for="email">{{ $message }}</label>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" placeholder="Password" name="password">
                                </div>
                                <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                    <div class="form-group mb-0">
                                        <label class="toggle">
                                            <input class="toggle-checkbox" type="checkbox">
                                            <div class="toggle-switch"></div>
                                            <span class="toggle-label">Remember me</span>
                                        </label>
                                    </div>
                                    <div class="form-group mb-0">
                                        <a href="{{ route('password.request') }}">Forgot Password?</a>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success btn-block">Sign in</button>
                                </div>
                            </form>
                            <div class="new-account mt-3">
                                <p>
                                    Don't have an account? <a class="text-primary" href="{{ route('register') }}">Sign up</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-website-layout>
