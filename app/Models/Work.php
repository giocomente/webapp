<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Order;
use App\Models\Material;
use App\MOdels\Foil;
use App\MOdels\Foil_View;

class Work extends Model
{
    // use HasFactory;
    protected $fillable = [
        'order_id',
        'status',
        'material_id',
        'size_1',
        'size_2',
        'foil_size_1_id',
        'foil_size_2_id',
        'note',
    ];

    public function order(){
        return $this->belongsTo(Order::class);
    }
    public function material(){
        return $this->belongsTo(Material::class);
    }
    public function foil_size_1(){
        return $this->belongsTo(Foil::class);
    }
    public function foil_size_2(){
        return $this->belongsTo(Foil_View::class);
    }
}
