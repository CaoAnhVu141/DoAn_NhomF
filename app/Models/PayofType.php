<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayofType extends Model
{
    use HasFactory;
    
    protected $table = 'typeofpay';
    protected $primaryKey = 'id_pay';

    protected $fillable = [
        'name',
        'discription',
        'checkactive',
        'image',
        'icon',

    ];


    //thiết lập mối quan hệ giữa hình thức thanh toán và đơn hàng 1-n

    public function oders()
    {
        return $this->hasMany(Oder::class,'id_pay');
    }

    //thiết lập mối quan hệ giữa thanh toán và lịch sử mua hàng 1-n

    public function purchaseHistory()
    {
        return $this->hasMany(PurchaseHistory::class,'id_pay');
    }
}
