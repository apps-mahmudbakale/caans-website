<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'region_id',
        'country_id',
    ];

    public function region(){
        return $this->belongsTo(Region::class);
    }

    public function country(){
        return $this->belongsTo(Country::class);
    }
}
