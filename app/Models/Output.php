<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Work;

class Output extends Model
{
    //use HasFactory;
    protected $fillable = [
        'work_id',
    ];
    public function work(){
        return $this->belongsTo(Work::class);
    }
}
