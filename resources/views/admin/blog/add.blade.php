@extends('main')
@section('noidung')
    <div class="container" style="margin: 50px">
        
        <form method="POST" action="{{route('blog.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="input-group mb-3">
                <label for="" class="">Tiêu đề *</label>
            </div>
            <div class="input-group mb-3">

                <input type="name" placeholder="Tiêu đề" name="title" class="form-control">
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
                        <input class="form-check-input" type="radio" name="status" id="" value="0"> Ẩn
                    </label>
                </div>
                <div class="form-check form-check-inline">
                     <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="status" id="" value="1" checked> Hiện
                    </label>
                </div>
            </div>
            <div class="input-group mb-3">
                <label for="" class="">Nội dung *</label>
            </div>
            <div class="input-group input-group-sm">
                <textarea class="form-control" name="content" id="content" cols="30" rows="15"></textarea>
            </div>
            <span class="input-group-append mt-3">
                <button type="submit" class="btn btn-primary">Add</button>
            </span>
            </form>
        </div>
    </div>
@stop
