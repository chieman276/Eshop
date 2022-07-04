
@extends('backend.layouts.master')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>


<body>
    <div class="container">
        <h1 class="text-center mt-3">Chỉnh sửa Khách hàng</h1>
        <form method="post" action="{{route('customers.update',$customer->id)}}">
            @csrf
            @method('post')
            <div class="form-group">
                <label>Tên Khách hàng</label>
                <input type="text" name="customer_name" class="form-control" value="{{ $customer->customer_name }}">
                @if ($errors->any())
                    <p style="color:red">{{ $errors->first('customer_name') }}</p>
                    @endif
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="customer_email" class="form-control" value="{{ $customer->customer_email }}">
                @if ($errors->any())
                    <p style="color:red">{{ $errors->first('customer_email') }}</p>
                    @endif
            </div>
            <div class="form-group">
                <label>Số điện Thoại</label>
                <input type="double" name="customer_phone" class="form-control" value="{{ $customer->customer_phone }}">
                @if ($errors->any())
                    <p style="color:red">{{ $errors->first('customer_phone') }}</p>
                    @endif
            </div>
            <div class="form-group">
                <label>Mật khẩu</label>
                <input type="password" name="customer_password" class="form-control" value="{{ $customer->customer_password }}">
                @if ($errors->any())
                    <p style="color:red">{{ $errors->first('customer_password') }}</p>
                    @endif
            </div>
           

            <button type="submit" class="btn btn-primary">Cập nhật</button>

            <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>                            
        </div>
        </form>
    </div>
</body>



</html>

@endsection