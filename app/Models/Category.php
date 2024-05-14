<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $primaryKey = 'id_category';


    protected $fillable = [
        'name',
        'discription',
        'checkactive',
        'id',
        'image',
    ];

  //thiết lập mối quan hệ sản phẩm và danh mục

  public function product()
  {
    return $this->hasMany(Product::class,'id_category');
  }

  ///thiết lập mối quan hệ giữa admin và danh mục sản phẩm

  public function admin()
  {
    return $this->belongsTo(AdminandUser::class,'id');
  }


}
