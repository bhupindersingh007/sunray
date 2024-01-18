<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;


    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];


    /**
     * Get the items for the order.
     */
    public function orderItems(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }


    /**
     * Get the order number
     */
    public static function orderNumber(): int
    {

        return self::doesntExist() ? 10001 : self::max('order_number') + 1;

    }


    public static function createOrder($data, $subTotal, $tax, $cartItems): void
    {

        $order = Order::create([
            'order_number' => Order::orderNumber(),
            'user_id' => auth()->id(),
            'first_name' => $data->first_name,
            'last_name' => $data->last_name,
            'email' => $data->email,
            'phone_number' => $data->phone_number,
            'address' => $data->address,
            'postal' => $data->postal,
            'order_notes' => $data->order_notes,
            'subtotal' => $subTotal,
            'tax' => $tax,
            'total' => $subTotal + $tax
        ]);

        foreach ($cartItems as $cartItem) {

            OrderItem::create([
            'order_id' => $order->id,
            'product_id' => $cartItem->product_id,
            'quantity' => $cartItem->quantity,
            'price' => $cartItem->price
            ]);

        }

    }

}
