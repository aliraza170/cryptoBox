<x-website-layout>
    <x-slot name="pageTitle">Cofirm your password!</x-slot>
    <div class="authincation section-padding">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-xl-5 col-md-6">
                    <div class="auth-form card">
                        <div class="card-header justify-content-center">
                            <h4 class="card-title">Cofirm Password</h4>
                        </div>
                        <div class="card-body">

                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4" :status="session('status')" />

                            <p>
                                {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
                            </p>

                            <form method="POST" action="{{ route('password.confirm') }}">
                                @csrf

                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                                    @error('password')
                                        <label id="password-error" class="error" for="password">{{ $message }}</label>
                                    @enderror
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success btn-block">Confirm</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-website-layout>
