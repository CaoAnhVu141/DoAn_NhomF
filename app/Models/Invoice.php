<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $table = 'invoices';
    protected $primaryKey = 'id_invoice';

   
    protected $fillable = [
        'codeinvoice',
        'id_user',
        'id_transport',
    ];

    //thiết lập mối quan hệ người mua hàng và hoá đơn 1-n

    public function userBuy()
    {
        return $this->belongsTo(User::class,'id_user');
    }

    //thiết lập mối quan hệ giữa hoá đơn và sản phẩm n-n

    public function products()
    {
        return $this->belongsToMany(Product::class, 'productinvoice', 'id_invoice', 'id_product');
    }


}
