<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Foil;

class Brand extends Model
{
    // use HasFactory;

    protected $fillable = ['name'];

    public function foils()
    {
        return $this->hasMany(Foil::class);
    }
}
