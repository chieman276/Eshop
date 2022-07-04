@extends('frontend.layouts.master')
@section('content')

<body>
    @if ($success = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $success }}</p>
    </div>

    @endif
    <div class="container">
        <h1>Đăng nhập</h1> <br>



        <form action="{{ route('postLogin') }}" method="post">
            @csrf

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Email" name="email">
                @if ($errors->any())
                <p style="color:red">{{ $errors->first('email') }}</p>
                @endif
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Password" name="password">
                @if ($errors->any())
                <p style="color:red">{{ $errors->first('password') }}</p>
                @endif
            </div>

            <a href="{{ route('shop.index')}}" type="submit" class="btn btn-dark" > Login </a><br>

            <a href="{{ route('register')}}" type="submit" > Đăng ký tài khoản ở đây </a>

        </form>

</body>
<br>

@endsection