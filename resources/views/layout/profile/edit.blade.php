@extends('layout.master')
@section('page_title', 'Profile')
@section('page_sub_title', 'Edit')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header"><h4 class="text-center font-weight-light my-4">Profile Information</h4></div>
                <div class="card-body">
                    <form method="POST" action="{{ route('profile.update') }}" >        
                        @csrf
                        @method('PUT')

                        <div class="form-floating mb-2">
                            <input class="form-control" id="name" name="name" type="text" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name" />
                            <label for="name">Full Name</label>
                            @error('name')
                                <small class="mt-2 text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-floating mb-2">
                            <input class="form-control" name="email" id="email" type="email" value="{{ old('email', $user->email) }}" required autofocus autocomplete="email"/>
                            <label for="email">Email address</label>
                            @error('email')
                                <small class="mt-2 text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="row mb-2">
                            <div class="form-floating mb-2">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" name="current_password" id="current_password" type="password" autocomplete="off" />
                                    <label for="current_password">Current Password</label>
                                    @error('current_password')
                                        <small class="mt-2 text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-floating mb-2">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" name="password" id="password" type="password" />
                                    <label for="password">New Password</label>
                                    @error('password')
                                        <small class="mt-2 text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-floating mb-2">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="confirm" name="confirm" type="password" />
                                    <label for="confirm">Confirm Password</label>
                                    @error('confirm')
                                    <small class="mt-2 text-danger">{{ $message }}</small>
                                @enderror
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 mb-0 mr-0">
                            <div class="float-end"><button type="submit" class="btn btn-sm btn-primary" >Update</button></div>
                        </div>
                        
                    </form>
                    <br/>
                    <br/>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection