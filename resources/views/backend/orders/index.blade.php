@extends('backend.layouts.master')

@section('content')


<body>
    <div class="container">

        <div class="col-lg-6">
            <h1 class="text-center mt-5">Danh sách đơn hàng</h1>
        </div>
        <div class="col-lg-12 mt-3">
            <a href="{{route('orders.create')}}" class="btn btn-primary">Thêm đơn hàng</a>
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
                    <th>Giá sản phẩm</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Email</th>
                    <th>Ngày sinh</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($orders as $order)
                <tr class="text-center">
                    <td >{{$order->id }}</td>
                    <td>{{ $order->name }} </td>
                    <td>{{ $order->price }}</td>
                    <td>{{ $order->phone }}</td>
                    <td>{{ $order->address }}</td>
                    <td>{{ $order->email }}</td>
                    <td>{{ $order->birthday }}</td>

                    <td>
                        <a href="{{ route('orders.show',$order->id )}}" class="btn btn-primary">Xem</a>
                        <a href="{{ route('orders.edit',$order->id )}}" class="btn btn-warning">Sửa</a>
                        <form action="{{ route('orders.destroy',$order->id )}}" style="display:inline" method="post">                          
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" onclick="return confirm('Xóa {{$order->name}} ?')">Xóa</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

<div>
    <br>
    <br>
    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
</div>

<br>
<div>
<button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Trở về</button>
</div>

@endsection