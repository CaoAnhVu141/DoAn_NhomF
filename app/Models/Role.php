<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'roles';
    protected $primaryKey = 'id_role';

   
    protected $fillable = [
        'name',
    ];

    ///Thiết lập mối quan hệ giữa bảng phân quyền với bảng admin n-n

    public function adminuser()
    {
        return $this->belongsToMany(AdminandUser::class,'user_roles','id','id_role');
    }
}
