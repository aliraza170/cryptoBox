<x-website-layout>
    <x-slot name="pageTitle">OTP Verification</x-slot>
    <div class="authincation section-padding">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-xl-6">
                    <div class="auth-form card">
                        <div class="card-header justify-content-center">
                            <h3 class="card-title">OTP Verification</h3>
                        </div>
                        <div class="card-body">
                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4" :status="session('message')" />

                            <p class="text-center mb-5">
                                You have received an {{ auth()->user()->getTwoFactorAuthType(); }} which contains your login code.
                                <br>
                                If you haven't received it, resend it by clicking <strong><a href="{{ route('verify.resend') }}">here</a></strong>.
                            </p>

                            <form method="POST" action="{{ route('verify.store') }}">
                                @csrf
                                <div class="form-group">
                                    <label>Your OTP Code</label>
                                    <input type="text" name="two_factor_code" class="form-control text-center font-weight-bold" minlength="6" maxlength="6" placeholder="-- -- --" autofocus required>
                                    @error('two_factor_code')
                                        <label id="email-error" class="error" for="email">{{ $message }}</label>
                                    @enderror
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success btn-block">Verify</button>
                                </div>
                            </form>
                            <div class="info mt-4">
                                <p class="text-muted">Your verification code will expire in 10 mintues!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-website-layout>
