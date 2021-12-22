<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Work;

class Material extends Model
{
    //use HasFactory;

    protected $fillable = ['name', 'add_size'];

    public function works(){
        return $this->hasMany(Work::class);
    }
}
