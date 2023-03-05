<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class CartModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 'customer_id', 'date_placed'
    ];

    public function customer()
    {
        return $this->hasOne(Customer::class,'id', 'category_id');
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

    public function add(Request $data, $id = '')
    {
        if ( $id == '') {
            $this->create($data->all());
        } else {
            $cart = $this->getById($id);
            $cart->update($data->all());
        }
    }

    public function remove($id)
    {
        return  $this->getById($id)->delete();
    }
}
