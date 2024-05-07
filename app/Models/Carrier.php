<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrier extends Model
{
    use HasFactory;

    protected $table = 'carriers';
    protected $primaryKey = 'id_carrier';

   
    protected $fillable = [
        'name',
        'email',
        'averagetime',
        'averagemoney',
        'checkactive',
    ];

    public function transports()
    {
        return $this->hasMany(Transport::class,'id_carrier');
    }

    //thiết lập mối quan hệ admin với nhà cung cấp 1-n

    public function userAdmin()
    {
        return $this->belongsTo(AdminandUser::class,'id');
    }

   
}
