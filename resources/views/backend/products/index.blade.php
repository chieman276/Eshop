@extends('backend.layouts.master')

@section('content')


<body>
    <div class="container">

        <div class="col-lg-6">
            <h1 class="text-center mt-5">Danh sách danh mục sản phẩm</h1>
        </div>
        <div class="col-lg-12 mt-3">
            <a href="{{route('products.create')}}" class="btn btn-primary">Thêm danh mục</a>
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
                    <th>Tên sản phẩm</th>
                    <th>hình ảnh</th>
                    <th>Giá sản phẩm</th>
                    <th>Số lượng sản phẩm</th>
                    <th>Danh mục sản phẩm</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr class="text-center">
                    <td >{{ $product->id }}</td>
                    <td style="width: 120px" >{{ $product->product_name }} </td>
                    <td><img src="{{ $product->product_image }}" style="width: 140px" > </td>
                    <td>{{ number_format ($product->product_price) }}</td>
                    <td>{{ $product->product_quantity }}</td>
                    <td>{{ $product->category_id }}</td>

                    <td>
                        <a href="{{ route('products.show',$product->id )}}" class="btn btn-primary">Xem</a>
                        <a href="{{ route('products.edit',$product->id )}}" class="btn btn-warning">Sửa</a>
                        <form action="{{ route('products.destroy',$product->id )}}" style="display:inline" method="post">                          
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" onclick="return confirm('Xóa {{$product->product_name}} ?')">Xóa</button>
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