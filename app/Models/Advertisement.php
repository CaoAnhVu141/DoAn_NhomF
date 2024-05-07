<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    use HasFactory;

    protected $table = 'advertisement';
    protected $primaryKey = 'id_adver';

   
    protected $fillable = [
        'title',
        'image',
        'information',
        'id',
    ];

    ///thiết lập mối quan hệ giữa quảng cáo và admin 1-n

    public function admin()
    {
        return $this->belongsTo(AdminandUser::class,'id');
    }
}
