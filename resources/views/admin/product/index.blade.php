@extends('main')
@section('noidung')
    <!-- Left col -->
    <section class="col-lg-12 connectedSortable">
        <!-- content -->
        <div class="row">
            <div class="col-12">
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover w-full">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>name</th>
                                    <th> price</th>
                                    <th>image</th>
                                    <th>description</th>
                                    <th>category_id</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $value)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $value->name }}</td>
                                        <td>{{ $value->price }}</td>
                                        <td><img src="{{url('uploads')}}/{{$value->image}}" alt="" width="100px"></td>
                                        <td>{{ $value->description }}</td>
                                        <td>{{ $value->category_id}}</td>
                                        <td>
                                            <a href="{{ route('product.edit', $value) }}" class="btn btn-primary">Edit</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('product.destroy', $value) }}" method="POST"
                                                onsubmit="return confirm('Bạn thực sự muốn xóa sản phẩm này?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">DELETE</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="{{route('product.create')}}" class="btn btn-success" style="margin: 20px">Thêm mới sản phẩm</a>
                        {{ $products->links() }}
                    </div>
            </div>  
        </div>
        <!-- /.card-body -->
        
        <!-- /.card -->
    </section>
@endsection
