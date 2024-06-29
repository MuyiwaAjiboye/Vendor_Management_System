<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchases extends Model
{

    use HasFactory;

    protected $guarded = [];

    public function vendor(){
        return $this->belongsTo(brand::class,'vendor_id');
    } 

    public function user(){
        return $this->belongsTo(brand::class,'user_id');
    } 

}
