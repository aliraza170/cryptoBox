<x-website-layout>
    <x-slot name="pageTitle">Thanks for signing up!</x-slot>
    <div class="authincation section-padding">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-xl-5 col-md-6">
                    <div class="auth-form card">
                        <div class="card-header justify-content-center">
                            <h4 class="card-title">Thanks for signing up!</h4>
                        </div>
                        <div class="card-body">
                            @if (session('status') == 'verification-link-sent')
                                <div class="alert alert-primary">
                                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                                </div>
                            @endif

                            <div class="mb-4">
                                {{ __('Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                            </div>
                            <div class="d-flex justify-content-between">
                                <form method="POST" action="{{ route('verification.send') }}">
                                    @csrf
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary btn-block">Resend Verification Email</button>
                                    </div>
                                </form>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-outline-primary btn-block">Logout</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-website-layout>
