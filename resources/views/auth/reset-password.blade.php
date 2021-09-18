<x-website-layout>
    <x-slot name="pageTitle">Create a new Password</x-slot>
    <div class="authincation section-padding">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-xl-5 col-md-6">
                    <div class="auth-form card">
                        <div class="card-header justify-content-center">
                            <h4 class="card-title">Create a new password</h4>
                        </div>
                        <div class="card-body">

                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4" :status="session('status')" />

                            <form method="POST" class="reset-password-validate" action="{{ route('password.update') }}">
                                @csrf

                                 <!-- Password Reset Token -->
                                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" placeholder="hello@example.com" name="email" value="{{ old('email', $request->email) }}" required>
                                    @error('email')
                                        <label id="email-error" class="error" for="email">{{ $message }}</label>
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

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success btn-block">Reset Password</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-slot name="scripts">
        <script>
            $(function () {
                $(".reset-password-validate").validate({
                    rules: {
                        email: {
                            required: true,
                            email: true,
                        },
                        password: {
                            required: true,
                            minlength: 8,
                        },
                        password_confirmation: {
                            required: true,
                            equalTo: '#password',
                        },
                    },
                    messages: {
                        phone: {
                            required: "The phone number is required",
                            minlength: "Your phone must be at least 9 characters long",
                            maxlength: "Your phone length cannot be greater than 16 characters long",
                        },
                        password: {
                            required: "Please provide a password",
                            minlength: "Your password must be at least 8 characters long"
                        },
                        password_confirmation: {
                            required: "",
                            equalTo: "The password confirmation do not match",
                        },
                        email: "Please enter a valid email address"
                    },
                });
            });
        </script>
    </x-slot>
</x-website-layout>
