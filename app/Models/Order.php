<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Customer;
use App\Models\Work;

class Order extends Model
{
    // use HasFactory;
    protected $fillable = [
        'date_start', 
        'customer_id', 
        'number_customer',
        'invoice',
        'note',
    ];

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function works(){
        return $this->hasMany(Work::class);
    }
}
