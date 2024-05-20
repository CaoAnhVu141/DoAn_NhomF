<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductFavoriteModel extends Model
{
    use HasFactory;
    protected $table = 'favoriteproducts';
    protected $primaryKey = 'id_favorite';

   
    protected $fillable = [
        'id_product',
        'id_user',
    ];
}
