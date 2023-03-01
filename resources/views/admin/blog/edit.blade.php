@extends('main')
@section('noidung')
    <div class="container" style="margin: 50px">
        
        <form method="POST" action="{{route('blog.update',$blog)}}" enctype= "multipart/form-data">
            @csrf
            @method('PUT')
            <div class="input-group mb-3">
                <label for="" class="">Tiêu đề *</label>
            </div>
            <div class="input-group mb-3">

                <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{$blog->title}}">
            </div>
            <div class="input-group mb-3">
                <label for="" class="">Ảnh *</label>
            </div>
            <div class="input-group mb-3">
                <input type="file" name="file" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Trạng thái</label>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="status" id="" value="0"{{$blog->status == 0 ? 'checked': ''}}> Ẩn
                    </label>
                </div>
                <div class="form-check form-check-inline">
                     <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="status" id="" value="0"{{$blog->status == 0 ? 'checked': ''}}> Ẩn Hiện
                    </label>
                </div>
            </div>
            <div class="input-group mb-3">
                <label for="" class="">Nội dung *</label>
            </div>
            <div class="input-group input-group-sm">
                <textarea class="form-control" name="content" id="content" cols="30" rows="15">{{$blog->content}}</textarea>
            </div>
            <span class="input-group-append mt-3">
                <button type="submit" class="btn btn-primary">Go!</button>
            </span>
            </form>
        </div>
    </div>
@stop
