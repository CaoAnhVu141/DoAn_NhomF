<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $primaryKey = 'id_post';

   
    protected $fillable = [
        'name',
        'description',
        'content',
        'avatar',
        'id_categorypost',
        'id',
        

    ];

    //thiết lập mối quan hệ cho danh mục bài viết và bài viết

    public function categorypost()
    {
        return $this->belongsTo(CategoryPost::class,'id_category');
    }

    //thiết lập mối quan hệ giữa người bán và bài viết 1-n

    public function usersell()
    {
        return $this->belongsTo(AdminandUser::class,'id');
    }
}
