@extends('backend.layouts.master')

@section('content')


<body>
    <div class="container">

        <div class="col-lg-6">
            <h1 class="text-center mt-5">Danh sách khách hàng</h1>
        </div>
        <div class="col-lg-12 mt-3">
            <a href="{{route('customers.create')}}" class="btn btn-primary">Thêm khách hàng</a>
        </div>
        <br>
        @if (Session::has('success'))
        <div class="alert alert-success">{{session::get('success')}}</div>
        @endif
        <br>
        <table class="table table-bordered mt-3">
            <thead>
                <tr class="text-center">
                    <th>#</th>
                    <th>Tên khách hàng</th>
                    <th>Email</th>
                    <th>Số điện thoai</th>
                    <th>Mật khẩu </th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                <tr class="text-center">

                    <td>{{ $customer->id}}</td>
                    <td>{{ $customer->customer_name}}</td>
                    <td>{{ $customer->customer_email}}</td>
                    <td>{{ $customer->customer_phone}}</td>
                    <td>{{ $customer->customer_password}}</td>

                    <td>
                        <a href="{{ route('customers.show',$customer->id)}}" class="btn btn-primary">Xem</a>
                        <a href="{{ route('customers.edit',$customer->id)}}" class="btn btn-warning">Sửa</a>
                        <form action="{{ route('customers.destroy',$customer->id )}}" style="display:inline" method="post">                          
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" onclick="return confirm('Xóa {{$customer->customer_name}} ?')">Xóa</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

<br>
<div>
<button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Trở về</button>
</div>

@endsection