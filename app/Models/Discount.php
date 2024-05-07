<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;

    protected $table = 'discounts';
    protected $primaryKey = 'id_discount';

   
    protected $fillable = [
        'codediscount',
        'quantity',
        'id_categorydiscount',
    ];

    //thiết lập mối quan hệ cho danh mục giảm giá và giảm giá 1-n

    public function categorydiscount()
    {
        return $this->belongsTo(Discount::class,'id_categorydiscount');
    }
}
