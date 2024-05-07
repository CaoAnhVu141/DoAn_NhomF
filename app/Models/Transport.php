<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    use HasFactory;

    protected $table = 'transports';
    protected $primaryKey = 'id_transport';

   
    protected $fillable = [
        'name',
        'id_carrier',
        'transportfee',
        'deliverytime',
        
    ];

    public function carrier()
    {
        return $this->belongsTo(Carrier::class,'id_carrier');
    }

     //thiết lập mối quan hệ giữa hãng vẩn chuyển và đơn hàng 1-n

     public function oders()
     {
        return $this->hasMany(Oder::class,'id_transport');
     }

}
