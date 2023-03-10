<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'price', 'description', 'image', 'category_id'
    ];

    public function category()
    {
        return $this->hasOne(Category::class,'id', 'category_id');
    }

    public function scopeSearchFilter($query)
    {
        if(request()->key){
            $query = $query->where('name','like','%'.request()->key.'%');
        }
        if(request()->order)
        {
            $order = explode('-',request()->order);
            $orderBy = isset($order[0]) ? $order[0] : 'id';
            $orderValue = isset($order[1]) ? $order[1] : 'DESC';
            $query  = $query -> orderBy($orderBy,$orderValue);
        }
        if(request()->status != ''){
            $query = $query->where('status',request()->status);
            if(request()->status == 2){
                $query = $query->where('status',0);
            }

        }
        return $query;
    }

    public function getDataIndex($i = 10)
    {
        return $this->searchFilter()->paginate($i);
    }

    public function getById($id)
    {
        return $this->find($id);
    }

    public function getProductByCatId($id)
    {
        return $this->where('category_id', $id)->searchFilter()->paginate(8);
    }

    public function add(Request $data, $id = '')
    {
        if ( $id == '') {
            if($data->hasFile('file')){
                $file = $data->file;
                $fileName = $file->getClientOriginalName();
               
                $file->move(public_path('uploads'),$fileName);
                $data->merge(['image'=>$fileName]);
            }
            $this->create($data->all());
        } else {
            $product = $this->getProductById($id);
            if($data->hasFile('file')){
                $file = $data->file;
                $file_name =  $file->getClientOriginalName();
                $file->move(public_path('uploads'),$file_name);
            } else {
                $file_name = $product->image;
            }
            $data->merge(['image'=>$file_name]);
            $product->update($data->all());
        }
    }

    public function remove($id)
    {
        return  $this->getProductById($id)->delete();
    }
}
