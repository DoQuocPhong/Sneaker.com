<?php

namespace App;

class Cart
{
    public $products = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($cart)
    {
        if ($cart) {
            $this->products = $cart->products;
            $this->totalPrice = $cart->totalPrice;
            $this->totalQty = $cart->totalQty;
        }
    }

    public function AddCart($product, $id)
    {
        if ($product->promotion_price != 0) {
            $newProduct = ['quanty' => 0, 'price' => $product->promotion_price, 'productInfor' => $product];
            if ($this->products) {
                if (array_key_exists($id, $this->products)) {
                    $newProduct = $this->products[$id];
                }
            }
        } else {
            $newProduct = ['quanty' => 0, 'price' => $product->unit_price, 'productInfor' => $product];
            if ($this->products) {
                if (array_key_exists($id, $this->products)) {
                    $newProduct = $this->products[$id];
                }
            }
        }
        $newProduct['quanty']++;
        if ($product->promotion_price != 0) {
            $newProduct['price'] = $newProduct['quanty'] * $product->promotion_price;
        } else {
            $newProduct['price'] = $newProduct['quanty'] * $product->unit_price;
        }
        $this->products[$id] = $newProduct;
        if ($product->promotion_price != 0) {
            $this->totalPrice += $product->promotion_price;
        } else {
            $this->totalPrice += $product->unit_price;
        }
        $this->totalQty++;
    }

    public function DeleteItemCart($id)
    {
        $this->totalQty -= $this->products[$id]['quanty'];
        $this->totalPrice -= $this->products[$id]['price'];
        unset($this->products[$id]);
    }

    public function UpdateItemCart($id, $quanty)
    {
        $this->totalQty -= $this->products[$id]['quanty'];
        $this->totalPrice -= $this->products[$id]['price'];

        $this->products[$id]['quanty'] = $quanty;
        if ($this->products[$id]['productInfor']->promotion_price != 0) {
            $this->products[$id]['price'] = $quanty * $this->products[$id]['productInfor']->promotion_price;
        } else {
            $this->products[$id]['price'] = $quanty * $this->products[$id]['productInfor']->unit_price;
        }
        $this->totalQty += $this->products[$id]['quanty'];
        $this->totalPrice += $this->products[$id]['price'];
    }

    public function AddHeart($product, $id)
    {
        $newProduct = ['productInfor' => $product];
        if ($this->products) {
            if (array_key_exists($id, $this->products)) {
                $newProduct = $this->products[$id];
            }
        }
        $this->products[$id] = $newProduct;
    }

    public function DeleteItemHeart($id)
    {
        unset($this->products[$id]);
    }
}

?>
