<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminandUser extends Model implements Authenticatable
{
    
    use HasFactory;
    use \Illuminate\Auth\Authenticatable;

    protected $table = 'adminanduser';
    protected $primaryKey = 'id';

   
    protected $fillable = [
        'name',
        'password',
        'email',
        'id_power',
        'phone',
        'avatar',
    ];


    //thiệt lập mối quan hệ giữa người bán và sản phẩm 1-n

    public function product()
    {
        return $this->hasMany(Product::class,'id');
    }


    //thiết lập quan hệ giữa người bán và danh mục sản phẩm

    public function categorypost()
    {
        return $this->hasMany(CategoryPost::class,'id');
    }


    ///thiết lập mối quan hệ giữa người bán và bài viết 1-n

    public function post()
    {
        return $this->hasMany(Post::class,'id');
    }

    //thiết lập mối quan hệ giữa admin và danh mục sản phẩm

    public function category()
    {
        return $this->hasMany(Category::class,'id');
    }

    //thiết lập mối quan hệ giữa quảng cáo và admin

    public function advertisement()
    {
        return $this->hasMany(AdminandUser::class,'id');
    }

    //thiết lập mối quan hệ giữa admin và loại sản phẩm 1-n

    public function typeProduct()
    {
        return $this->hasMany(ProductType::class,'id');
    }

    //thiết lập mối quan hệ admin với thuộc tính 1-n

    public function attribute()
    {
        return $this->hasMany(Attribute::class,'id');
    }

     //thiết lập mối quan hệ admin với nhà cung cấp 1-n

     public function carrier()
     {
        return $this->hasMany(Carrier::class,'id');
     }

      ///Thiết lập mối quan hệ giữa bảng phân quyền với bảng admin n-n

    public function roles()
    {
        return $this->belongsToMany(Role::class,'user_roles','id','id_role');
    }
}
