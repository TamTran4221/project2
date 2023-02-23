@extends('main')
@section('noidung')

    <div class="card-body">
        <div class="tab-description p-0">

            <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="input-group mb-3">
                    <label for="" class="">Tên sản phẩm *</label>
                </div>
                <div class="input-group mb-3">

                    <input type="name" placeholder="Tên sản phẩm" name="name" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <label for="" class="">Giá sản phẩm *</label>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">VND</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Giá sản phẩm" name="price">
                    <div class="input-group-append">
                        <span class="input-group-text">.00</span>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <label for="" class="">Ảnh *</label>
                </div>
                <div class="input-group mb-3">
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <label for="" class="">Danh mục *</label>
                </div>
                <div class="input-group mb-3">
                    
                    <select class="form-control" name="category_id" id="">
                        @foreach($cate as $value)
                            <option value="{{$value->id}}">{{$value->name}}</option>
                        @endforeach
                      </select>
                    
                </div>

                <!-- /input-group -->

                <div class="input-group mb-3">
                    <label for="" class="">description *</label>
                </div>
                <div class="input-group input-group-sm">
                    <textarea class="form-control" name="description" id="description" cols="30" rows="15"></textarea>
                </div>
                <span class="input-group-append mt-3">
                    <button type="submit" class="btn btn-primary">Add</button>
                </span>
            </form>
        </div>
    </div>

@endsection