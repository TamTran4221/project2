@extends('main')
@section('noidung')
<div class="card-body">
    <form method="POST" action="{{route('product.update',$product)}}" enctype= "multipart/form-data">
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
            <input type="file" name="image" class="form-control">
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
            <textarea class="form-control" name="description" id="" cols="30" rows="15" value =" {{$product->descriprion }}"></textarea>

        </div> <span class="input-group-append">
            <button  class="btn btn-info btn-flat">Go!</button>
        </span>
    </form>
</div>
@endsection