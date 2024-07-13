@extends('layout.master')
@section('page_title', 'Dashboard')
@section('page_sub_title', 'Home')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </div>
    <div class="container justify-content-center">
        <div class="col-md-6">
            <div class="row">
                <div class="card">
                    <h4>Custom Login Site</h4>
                    <table class="">
                        <tr>
                            <td>registration system</td>
                        </tr>
                        <tr>
                            <td>Login system</td>
                        </tr>
                        <tr>
                            <td>Profile update system</td>
                        </tr>
                        <tr>
                            <td>LogOut system</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
