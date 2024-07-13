@extends('auth.master')

@section('content')
    <div class="card shadow-lg border-0 rounded-lg mt-5  bg-transparent">
        <div class="card-header">
            <h3 class="text-center text-info font-weight-light my-4"><b>Log In</b></h3>
        </div>
        <div class="card-body">

            <form action="{{ route('store') }}" method="POST">
                @csrf
                <div class="form-floating mb-3">
                    <input class="text-info bg-black form-control" name="email" id="email" type="email"
                        placeholder="name@example.com" />
                    <label class="text-white" for="email">Email address</label>
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="form-floating mb-3">
                    <input class="text-info bg-black form-control" name="password" id="password" type="password"
                        placeholder="Password" />
                    <label class="text-white" for="password">Password</label>
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div class="text-center mt-4 mb-0">
                    <button class="btn btn-info" type="submit">Login</button>
                </div>
            </form>
        </div>
        <div class="card-footer text-center py-3">
            <a class="text-info text-dec-none small" href="{{ route('password') }}">Forgot Password?</a>
            <div class="small"><a class="text-info text-dec-none" href="{{ route('register') }}">Need an account?
                    Signup!</a></div>
        </div>
    </div>
@endsection
