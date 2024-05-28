<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentProduct extends Model
{
    use HasFactory;

    protected $table = "table_payments_products";

    protected $fillable = [
        'product_name',
        'product_price',
        'product_quantity',
        'product_size',
        'order_id',
        'product_image',
    ];

    public function payment()
    {
        return $this->belongsTo(Payment::class, 'order_id', 'payment_products_id');
    }
}
