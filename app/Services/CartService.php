<?php

namespace App\Services;

class CartService {


    public function getCartItems() : ?array {

        return session('cart_items');

    }


    public function emptyCart() : void {

        session()->forget('cart_items');

    }

    public function addCartItem($product, $quantity) : void {

        $productFound = false;


        if(session()->has('cart_items')) {

            foreach (session('cart_items') as &$cartItem) {

                if (isset($cartItem['product_id']) && $cartItem['product_id'] == $product->id) {

                    // product found in the array, so update quantity

                    $cartItem['quantity'] = $cartItem['quantity'] + $quantity;
                    $productFound = true;

                    break;
                }
            }

        }

        if(!$productFound) {

            $product['product_id'] = $product->id;
            $product['quantity'] = $quantity;

            // product not found in the cart, so add it
            session()->push('cart_items', $product);

        }


    }



    public function removeCartItem(int $id) : void {

        foreach (session('cart_items') as $key => $cartItem) {

            if (isset($cartItem['product_id']) && $cartItem['product_id'] == $id) {
                
                // remove the item from the cart
                session()->forget("cart_items.$key");
                    
            }
        }

    }


    public function getCartSubTotal() : float {

        $subTotal = 0;

        $cartItems = session('cart_items');

        if(session()->has('cart_items')){

            foreach ($cartItems as $key => $cartItem) {

                $subTotal += $cartItem->price * $cartItem->quantity;
                
            }
        }

        return $subTotal;

    }

    public function getCartItemsCount() : int
    {
        
        $totalQuantity = 0;

        if(session()->has('cart_items')){

            foreach (session('cart_items') as $key => $cartItem) {

                $totalQuantity += $cartItem->quantity;
                
            }

        }

        return $totalQuantity;

    }



}