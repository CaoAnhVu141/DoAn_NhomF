<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;

    protected $table = 'attributes';
    protected $primaryKey = 'id_attribute';

   
    protected $fillable = [
        'name',
        'discription',
        'checkactive',
        'id',
    ];

    //thiết lập quan hệ attribute và products (quan hệ 1 n)
    public function product()
    {
        return $this->belongsToMany(Product::class,'product_attribute','attribute_id','product_id');
    }

    //thiết lập mối quan hệ admin với thuộc tính 1-n

    public function userAdmin()
    {
        return $this->belongsTo(AdminandUser::class,'id');
    }
    
}
