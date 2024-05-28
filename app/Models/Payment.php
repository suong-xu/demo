<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = "tbl_payments";

    protected $fillable = [
        'customer_id',
        'address',
        'notes',
        'payment_products_id',
        'total_cost',
    ];

    public function paymentProducts()
    {
        return $this->hasMany(PaymentProduct::class, 'order_id', 'payment_products_id');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'customer_id');
    }
}
