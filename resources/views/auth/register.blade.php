<x-website-layout>
    <x-slot name="pageTitle">Sign up</x-slot>
    <div class="authincation section-padding">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-xl-5 col-md-6">
                    <div class="auth-form card">
                        <div class="card-header justify-content-center">
                            <h4 class="card-title">Create an account</h4>
                        </div>
                        <div class="card-body">

                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4" :status="session('status')" />

                            <form method="POST" class="signup_validate" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" placeholder="John Doe" name="name" value="{{ old('name') }}">
                                    @error('name')
                                        <label id="name-error" class="error" for="name">{{ $message }}</label>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" placeholder="hello@example.com" name="email" value="{{ old('email') }}">
                                    @error('email')
                                        <label id="email-error" class="error" for="email">{{ $message }}</label>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" placeholder="+1 (123) 456789" name="phone" value="{{ old('phone') }}">
                                    @error('phone')
                                        <label id="phone-error" class="error" for="phone">{{ $message }}</label>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                                    @error('password')
                                        <label id="password-error" class="error" for="password">{{ $message }}</label>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation">
                                    @error('password_confirmation')
                                        <label id="password_confirmation-error" class="error" for="password_confirmation">{{ $message }}</label>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="toggle">
                                        <input class="toggle-checkbox" type="checkbox" name="terms_and_conditions">
                                        <div class="toggle-switch"></div>
                                        <span class="toggle-label">I agree to website, <a href="#">terms & conditions</a></span>
                                    </label>
                                    @error('terms_and_conditions')
                                        <label id="terms_and_conditions-error" class="error" for="terms_and_conditions">{{ $message }}</label>
                                    @enderror
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success btn-block">Sign up</button>
                                </div>
                            </form>
                            <div class="new-account mt-3">
                                <p>
                                    Already have an account? <a class="text-primary" href="{{ route('login') }}">Sign in here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-website-layout>
