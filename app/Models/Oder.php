<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oder extends Model
{
    use HasFactory;

    protected $table = 'oders';
    protected $primaryKey = 'id_oder';

   
    protected $fillable = [
        'id_user',
        'id_transport',
        'status',
        'amount',
        'intomoney',
        'address',
        'id_pay',
        

    ];

    /// thiết lập mối quan hệ giữa đặt hàng và người mua 1-n

    public function userBuy()
    {
        return $this->belongsTo(User::class,'id_user');
    }

    //thiết lập mối quan hệ giữa đơn hàng và hãng vận chuyển 1-n

    public function transport()
    {
        return $this->belongsTo(Transport::class,'id_transport');
    }

    //thiết lâp mối quan hệ giữa loại thanh toán và đơn hàng 1-n

    public function payoftype()
    {
        return $this->belongsTo(PayofType::class,'id_pay');
    }

}
