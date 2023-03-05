<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'name', 'user_id'
    ];

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

    public function getAll()
    {
        return $this->all();
    }

    public function getDataIndex($i = 10)
    {
        return $this->searchFilter()->paginate($i);
    }

    public function getById($id)
    {
        return $this->find($id);
    }

    public function add(Request $data)
    {
        if ( $data->id == '') {
            $this->create($data->all());
        } else {
            $this->find($data->id)->update($data->all());
        }
    }

    public function remove($id)
    {
        return  $this->find($id)->delete();
    }
}
