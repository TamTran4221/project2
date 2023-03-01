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

<?php //Hiển thị form sửa sản phẩm?>
<div class="card-body">
    <form method="POST" action="{{route('admin.product.update',$product)}}" enctype= "multipart/form-data">
        @csrf
        @method('PUT')
        <div class="input-group mb-3">
            <label for="" class="">Name</label>
        </div>
        <div class="input-group mb-3">

            <input type="name" value="{{$product->name}}" name="name" class="form-control">
        </div>
        <div class="input-group mb-3">
            <label for="" class="">Price</label>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">VND</span>
            </div>
            <input type="text" class="form-control" value="{{$product->price}}" name="price">
            <div class="input-group-append">
                <span class="input-group-text">.00</span>
            </div>
        </div>
        <div class="input-group mb-3">
            <label for="" class="">image</label>
        </div>

        <div class="input-group mb-3">
            <input type="file" name="file" class="form-control">
            <img src="{{url('uploads')}}/{{$product->image}}" alt="" width="100px">
        </div>
        <div class="input-group mb-3">
            <label for="" class="">Category</label>
        </div>

        <div class="input-group">


            <select class="form-control" name="category_id" id="">
                @foreach($cate as $value)
                    <option value="{{$value->id}}" {{$value->id == $product->category_id ? 'selected' : ''}}>
                        {{$value->name}}</option>
                @endforeach
              </select>
        </div>

        <!-- /input-group -->

        <div class="input-group mb-3">
            <label for="" class="">Description</label>
        </div>
        <div class="input-group input-group-sm">
            <textarea class="form-control" name="description" id="" cols="30" rows="15" value="{{$product->description }}">{{$product->description }}</textarea>

        </div> <span class="input-group-append">
            <button  class="btn btn-info btn-flat">Go!</button>
        </span>
    </form>
</div>
@endsection