<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    use HasFactory;

    protected $table = 'producttypes';
    protected $primaryKey = 'id_producttype';

   
    protected $fillable = [
        'name',
        'discription',
        'checkactive',
        'id',
    ];


    //thiết lập mối quan hệ giữa loại sản phẩm và sản phẩm 1-n
    
    public function product()
    {
        return $this->hasMany(Product::class,'id_producttype');
    }

    //thiết lập mối quan hệ giữa admin và loại sản phẩm 1-n

    public function useradmin()
    {
        return $this->belongsTo(AdminandUser::class,'id');
    }
}
