<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseHistory extends Model
{
    use HasFactory;

    protected $table = 'purchasehistory';
    protected $primaryKey = 'id_history';

   
    protected $fillable = [
        'id_user',
        'id_product',
        'amount',
        'total',
        'id_transport',
        'id_pay',
        
    ];



    ///thiết lập mối quan hệ giữa lịch sử mua hàng và người mua 1-n

    public function userBuy()
    {
        return $this->belongsTo(User::class,'id_user');
    }

    //thiết lập mối quan hệ giữa lịch sử mua hàng và sản phẩm 1-n

    public function product(){
        return $this->belongsTo(Product::class,'id_product');
    }

    //thiết lập mối quan hệ giữa thanh toán và lịch sử mua hàng 1-n

    public function typeOfPay()
    {
        return $this->belongsTo('id_pay');
    }
}
