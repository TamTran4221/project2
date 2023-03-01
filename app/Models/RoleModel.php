<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class RoleModel extends Model
{
    use HasFactory;

    public function getAll()
    {
        $this->get();
    }

    public function add(Request $data, $id = '')
    {
        if ( $id == '') {
            $this->create($data->all());
        } else {
            $this->find($id)->update($data->all());
        }
    }

    public function remove($id)
    {
        return  $this->find($id)->delete();
    }
}
