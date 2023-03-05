@extends('main')
@section('noidung')
    <div class="container" style="margin: 50px">
        <div class="row">
        
        <form method="POST" action="{{route('admin.category.store')}}">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Tên danh mục</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="name">
                
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Trạng thái</label>
<<<<<<< HEAD
                <div class="card card-secondary">
                    <div class="card-body">
                      <div class="bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-animate bootstrap-switch-focused bootstrap-switch-on" style="width: 86px;"><div class="bootstrap-switch-container" style="width: 126px; margin-left: 0px;"><span class="bootstrap-switch-handle-on bootstrap-switch-success" style="width: 42px;">ON</span><span class="bootstrap-switch-label" style="width: 42px;"></span><span class="bootstrap-switch-handle-off bootstrap-switch-danger" style="width: 42px;">OFF</span><input type="checkbox" name="my-checkbox" checked="" data-bootstrap-switch="" data-off-color="danger" data-on-color="success"></div></div>
                    </div>
                  </div>
=======
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="status" id="" value="1" checked> Hiện
                    </label>
                </div>
>>>>>>> 2ea2d36946036c4e651120a3ba52ad6c14266420
            </div>
          
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@stop
