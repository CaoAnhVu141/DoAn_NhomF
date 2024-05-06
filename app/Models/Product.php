<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    //thiết lập mối quan hệ với users qua yêu thích sản phẩm

    public function users()
    {
        return $this->belongsToMany(User::class,'favoriteproduct','id_product','id_user');
    }
}
