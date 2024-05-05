<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrier extends Model
{
    use HasFactory;

    protected $primaryKey  = 'id_carrier';

    public function transports()
    {
        return $this->hasMany(Transport::class);
    }
}
