@extends('auth.master')

@section('content')
    <div class="card shadow-lg border-0 rounded-lg mt-5 bg-transparent">
        <div class="card-header">
            <h3 class="text-center text-info font-weight-light my-4">Create Account</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('register.store') }}" method="post">
                @csrf

                <div class="form-floating mb-2">
                    <input class="text-info bg-black form-control" id="name" name="name" type="text"
                        placeholder="Enter your full name" />
                    <label class="text-white" for="name">Full Name</label>
                    @error('name')
                        <small class="mt-2 text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-floating mb-2">
                    <input class="text-info bg-black form-control" name="email" id="email" type="email"
                        placeholder="name@example.com" />
                    <label class="text-white" for="email">Email address</label>
                    @error('email')
                        <small class="mt-2 text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="row mb-2">
                    <div class="form-floating mb-2">
                        <div class="form-floating mb-3 mb-md-0">
                            <input class="text-info bg-black form-control" name="password" id="password" type="password"
                                placeholder="Create a password" />
                            <label class="text-white" for="password">Password</label>
                            @error('password')
                                <small class="mt-2 text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-floating mb-2">
                        <div class="form-floating mb-3 mb-md-0">
                            <input class="text-info bg-black form-control" id="confirm" name="confirm" type="password"
                                placeholder="Confirm password" />
                            <label class="text-white" for="confirm">Confirm Password</label>
                            @error('confirm')
                                <small class="mt-2 text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4 mb-0">
                    <button type="submit" class="btn btn-info btn-block">Create Account</button>
                </div>
            </form>
        </div>
        <div class="card-footer text-center py-3">
            <div class="small"><a class="text-info text-dec-none" href="{{ route('login') }}">Have an account? Go to
                    login</a></div>
        </div>
    </div>
@endsection
