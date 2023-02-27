@extends('main')
@section('noidung')
    <div class="container" style="margin: 50px">
        <div class="row">
        
        <form method="POST" action="{{route('category.update',$cate)}}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="exampleInputEmail1">Tên danh mục</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{$cate->name}}">
                
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Trạng thái</label>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="status" id="" value="0"{{$cate->status == 0 ? 'checked': ''}}> Ẩn
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="status" id="" value="1"{{$cate->status ? 'checked': ''}}> Hiện
                    </label>
                </div>
            </div>
          
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@stop