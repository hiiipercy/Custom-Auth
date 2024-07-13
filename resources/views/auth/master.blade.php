<!DOCTYPE html>
<html lang="en">

<head>
    @include('auth.include.header')
    <style>
        .middle{
            display: flex;
            align-items: center;
        }
        .bg-transparent{
            background-color: rgba(255, 0, 0, 0.4);
        }
        .bg-black{
            background-color: rgba(0, 0, 0, 0.4);
        }
        .text-dec-none{
            text-decoration: none;
        }
    </style>
</head>

<body style="background-image: url('{{ asset('assets/assets/img/bg.jpg')}}');">
    <div class="container">
        <div class="row  center">
            <div class="col-md-6 ">
                @yield('content')
            </div>
        </div>
    </div>
    @include('auth.include.script')
</body>

</html>
