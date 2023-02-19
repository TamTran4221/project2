@extends('main')
@section('noidung')
    <div class="container" style="margin: 50px">
        <div class="row">
        
        <form method="POST" action="{{route('category.store')}}">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Tên danh mục</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="name">
                
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
          
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@stop
