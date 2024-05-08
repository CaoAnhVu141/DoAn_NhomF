<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'id_product';

   
    protected $fillable = [
        'name',
        'price',
        'discription',
        'discount',
        'image',
        'id_category',
        'id_producttype',
        'id_supplier',
        'checkactive',
        'amount',
        'id',

    ];


    //thiết lập mối quan hệ với users qua yêu thích sản phẩm

    public function users()
    {
        return $this->belongsToMany(User::class,'favoriteproduct','id_product','id_user');
    }
    
    //thiết lập mối quan hệ sản phẩm thuộc về 1 nhà cung cấp
    
    public function supplier()
    {
        return $this->belongsTo(Supplier::class,'id_supplier');
    }

    //thiết lập quan hệ sản phẩm n-n với thuộc tính

    public function attribute()
    {
        return $this->belongsTo(Attribute::class,'product_attribute','attribute_id','product_id');
    }

    ///thiết lập mối quan hệ 1-n giữa loại sản phẩm và sản phẩm

    public function productype()
    {
        return $this->belongsTo(ProductType::class,'id_producttype');
    }

    //thiết lập mối quan hệ giữa sản phẩm và danh mục sản phẩm

    public function category()
    {
        return $this->belongsTo(Category::class,'id_category');
    }
    

    //thiết lập mối quan hệ giữa người bán và sản phẩm 1-n

    public function usersell()
    {
        return $this->belongsTo(AdminandUser::class,'id');
    }

    //thiết lập mối quan hệ giữa sản phẩm và người mua qua bảng đánh giá sản phẩm

    public function userReview()
    {
     return $this->belongsToMany(Product::class,'reviewproducts');
    }

    //thiết lập mối quan hệ giữa sản phẩm và lịch sử mua hàng 1-n

    public function purchaseHistory()
    {
        return $this->hasMany(PurchaseHistory::class,'id_product');
    }

    //thiết lập mối quan hệ sản phẩm và hoá đơn n-n

    public function invoices()
    {
         return $this->belongsToMany(Invoice::class, 'productinvoice', 'id_product', 'id_invoice');
    }
}