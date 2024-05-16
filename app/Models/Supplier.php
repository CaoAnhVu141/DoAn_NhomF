<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $table = 'suppliers';
    protected $primaryKey = 'id_supplier';


    protected $fillable = [
        'name',
        'description',
        'email',
        'phone',
        'image',
        'id',

    ];

    //thiết lập mối quan nhà cung câp và sản phẩm
    public function product()
    {
        return $this->hasMany(Product::class,'id_supplier');
    }
}
