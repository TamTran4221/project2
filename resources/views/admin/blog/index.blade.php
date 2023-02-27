@extends('main')
@section('noidung')
<?php //Hiển thị thông báo thành công?>

@if ( Session::has('success') )
	<div class="alert alert-success alert-dismissible" role="alert">
		<strong>{{ Session::get('success') }}</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
@endif

<?php //Hiển thị thông báo lỗi?>
@if ( Session::has('error') )
	<div class="alert alert-danger alert-dismissible" role="alert">
		<strong>{{ Session::get('error') }}</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
@endif

<?php //Hiển thị danh sách sản phẩm?>
    <!-- Left col -->
    <section class="col-lg-12 connectedSortable">
        <!-- content -->
        <div class="row">
            <div class="col-12">
                    <div class="card-body">
                        <a href="{{route('blog.create')}}" class="btn btn-success" style="margin: 20px">Thêm mới blog</a>
                        <table id="example2" class="table table-bordered table-hover w-full">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tiêu đề</th>
                                    <th>Nội dung</th>
                                    <th>Image</th>
                                    <th>status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $value)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $value->title }}</td>
                                        <td>{{ $value->content }}</td>
                                        <td><img src="{{url('uploads')}}/{{$value->image}}" alt="" width="100px"></td>
                                        <td>{{ $value->status }}</td>
                                        <td>
                                            <a href="{{ route('blog.edit', $value) }}" class="btn btn-primary">Edit</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('blog.destroy', $value) }}" method="POST"
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
                        
                        {{-- {{ $blogs->links() }} --}}
                    </div>
            </div>  
        </div>
        <!-- /.card-body -->
        
        <!-- /.card -->
    </section>
@endsection
