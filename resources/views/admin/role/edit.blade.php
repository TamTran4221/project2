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

<?php //Form chỉnh sửa sản phẩm?>
    <div class="card-body">
        <div class="tab-description p-0">
            <form action="{{route('admin.role.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input-group mb-3">
                    <label for="" class="">Tên quyền *</label>
                </div>
                <div class="input-group mb-3">
                    <input type="hidden" value="{{ $role->id }}" name="id">
                    <input type="name" placeholder="Tên quyền..." value="{{ $role->name }}" name="name" class="form-control">
                </div>
                <span class="input-group-append mt-3">
                    <button type="submit" class="btn btn-primary">Add</button>
                </span>
            </form>
        </div>
    </div>
@endsection