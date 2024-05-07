<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelUser extends Model
{
    use HasFactory;

    protected $table = 'levelusers';
    protected $primaryKey = 'id_leveluser';

   
    protected $fillable = [
        'namelevel',
        'id_user',
        'totalmoney',
    ];

    //thiết lập mối quan hệ giữa xếp hạng người dùng và người dùng 1-n

    public function userBuy()
    {
        return $this->belongsTo(User::class,'id_user');
    }
}
