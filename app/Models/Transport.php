<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_transport';

    public function carrier()
    {
        return $this->belongsTo(Carrier::class,'id_carrier','id_carrier');
    }
}
