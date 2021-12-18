<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Customer;

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
}
