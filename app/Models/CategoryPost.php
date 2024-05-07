<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryPost extends Model
{
    use HasFactory;

    protected $table = 'categorypost';
    protected $primaryKey = 'id_category';

   
    protected $fillable = [
        'name',
        'discription',
        'checkstatus',
        'id',

    ];

    //thiết lập mối quan hệ giữa người bán và danh mục bài viết 1-n

    public function usersell()
    {
        return $this->belongsTo(AdminandUser::class,'id');
    }

     //thiết lập quan hệ giữa danh mục bài viết với bài viết 1-n
     
    public function post()
    {
        return $this->hasMany(Post::class,'id_categorypost');
    }
}
