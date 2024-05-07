<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryDiscount extends Model
{
    use HasFactory;

    protected $table = 'categorydiscounts';
    protected $primaryKey = 'id_categorydiscount';

   
    protected $fillable = [
        'name',
        'discription',
        'checkactive',
        'id_user',
    ];

    //thiết lập mối quan hệ giữa danh mục giảm giá và giảm giá 1-n

    public function discount()
    {
        return $this->hasMany(Category::class,'id_categorydiscount');
    }
}
