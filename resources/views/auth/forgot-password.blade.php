<x-website-layout>
    <x-slot name="pageTitle">Forgot your password?</x-slot>
    <div class="authincation section-padding">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-xl-5 col-md-6">
                    <div class="auth-form card">
                        <div class="card-header justify-content-center">
                            <h4 class="card-title">Forgot your password?</h4>
                        </div>
                        <div class="card-body">

                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4" :status="session('status')" />

                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" placeholder="hello@example.com" name="email" value="{{ old('email') }}" required autofocus>
                                    @error('email')
                                        <label id="email-error" class="error" for="email">{{ $message }}</label>
                                    @enderror
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success btn-block">Email Password Reset Link</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-website-layout>
