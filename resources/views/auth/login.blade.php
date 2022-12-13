@extends('layouts.mainLogin')

@section('isi')
    <div class="text-center w-75 m-auto">
        @if (session('error'))
            <div class="alert alert-danger">
                <b>Opps!</b> {{ session('error') }}
            </div>
        @endif
        <h4 class="text-dark-50 text-center pb-0 fw-bold">Sign In</h4>
        <p class="text-muted mb-4">Enter your username address and password to access An-Nahar
            Website.
        </p>
    </div>
    <div class="container">


        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-3">
                <label for="usernameaddress" class="form-label">Username</label>
                <input id="username" name="username" type="text"
                    class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" required
                    autocomplete="name" autofocus placeholder="Enter your Username">

                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="input-group input-group-merge">
                    <input type="password" name="password" id="password" class="form-control"
                        placeholder="Enter your password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    {{-- <div class="input-group-text" data-password="false">
                                            <span class="password-eye"></span>
                                        </div> --}}
                </div>
            </div>

            <div class="row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary"><i class="mdi mdi-login"></i>
                        {{ __('Login') }}
                    </button>

                </div>
            </div>
        </form>
    </div>
@endsection
