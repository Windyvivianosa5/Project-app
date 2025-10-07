<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function detail()
    {
        return $this->hasOne(DetailHotel::class, 'hotel_id','id');

    }
}
