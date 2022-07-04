@extends('frontend.layouts.master')
@section('content')

<body>
    <div class="container">

    <h1>Đăng Ký</h1> <br>
        <form action="{{ route('postRegister') }}" method="post">
            @csrf
            <div class="form-group">

                <label>Name</label>
                <input type="text" class="form-control" placeholder="Name" name="name">
                <div class="error-message">
                @if ($errors->any())
                <p style="color:red">{{ $errors->first('name') }}</p>
                @endif
            </div>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Email" name="email">
                <div class="error-message">
                @if ($errors->any())
                <p style="color:red">{{ $errors->first('email') }}</p>
                @endif
            </div>

            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Password" name="password">
                <div class="error-message">
                @if ($errors->any())
                <p style="color:red">{{ $errors->first('password') }}</p>
                @endif
            </div>


            </div>
            <button type="submit" class="btn btn-primary">Register</button>
 
        </form>
    </div>
</body>

@endsection