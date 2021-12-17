<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Brand;

class Foil extends Model
{
    // use HasFactory;
    protected $fillable = ['brand_id', 'article', 'name', 'price'];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
