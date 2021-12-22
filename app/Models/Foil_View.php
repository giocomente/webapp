<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Brand;
use App\Models\Works;

class Foil_View extends Model
{
    // use HasFactory;
    protected $fillable = ['brand_id', 'article', 'name', 'price'];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function works(){
        return $this->hasMany(Work::class);
    }
}
