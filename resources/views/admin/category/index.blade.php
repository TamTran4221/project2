@extends('main')
@section('noidung')
    <div class="container" style="margin: 50px" >
        <div>
            <div class="col-lg-10">
                <table class="table" style="text-align: center">
                    <thead class="thead-dark">
                      <tr>
                        <tr>
                            <th>STT</th>
                            <th>Tên danh mục</th>
                            <th>Trạng thái</th>
                            <th></th>
                        </tr>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($cates as $data)
                        <tr>
                            <td scope="row">{{$loop->iteration}}</td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->status ? 'Hiện' : 'Ẩn'}}</td>
                            <td>
                                <a href="{{route('category.edit',$data)}}" class="btn btn-primary">Sửa</a>

                                <form action="{{route('category.destroy',$data)}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Xóa</button>
                                </form>
                            </td>
                        </tr>
                       @endforeach
                    </tbody>
                  </table>
                  <a href="{{route('category.create')}}" class="btn btn-success" style="margin: 20px">Thêm mới</a>
                  {{ $cates->links() }}
            </div>
           
        </div>
    </div>
@stop