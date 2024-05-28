<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'order_date',
        'total_amount',
        'payment_method',
        'payment_status',
        'shipping_address',
        'shipping_country',
        'postal_code',
        'shipping_cost',
        'tax_amount',
        'order_status',
        'is_paid',
        'is_shipped',
        'is_delivered',
        'delivery_date',
        'delivery_time',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'order_date' => 'datetime',
        'delivery_date' => 'datetime',
        'is_paid' => 'boolean',
        'is_shipped' => 'boolean',
        'is_delivered' => 'boolean',
    ];

    /**
     * Get the user that placed the order.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
