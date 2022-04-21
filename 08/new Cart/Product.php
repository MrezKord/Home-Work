<?php

use Product as GlobalProduct;

class Product
{
    private int $id;
    private string $title;
    private float $price;
    private int $availableQuantity;

    // TODO Generate constructor with all properties of the class
    // TODO Generate getters and setters of properties

    /**
     * Constructor
     * 
     * @param $id
     * @param $title
     * @param $price
     * @param $availableQuantity
     */

    public function __construct(int $id, string $title, float $price, int $availableQuantity)
    {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->availableQuantity = $availableQuantity;
    }

    /**
     * chenge availableQuantity
     * 
     * @param $availableQuantity 
     */

    public function chenge_availableQuantity($new_Quantity){
        $this->availableQuantity = $new_Quantity;
    }

    /**
     * get availableQuantity
     * 
     * @return $this->availableQuantity
     */

    public function get_availableQuantity(){
        return $this->availableQuantity;
    }

    /**
     * get product
     * 
     * @return array
     */

    public function get_product(){
        return [
            'id' => $this->id,
            'title' => $this->title,
            'price' => $this->price,
            'availableQuantity' => $this->availableQuantity
        ];
    }



    /**
     * Add Product $product into cart. If product already exists inside cart
     * it must update quantity.
     * This must create CartItem and return CartItem from method
     * Bonus: $quantity must not become more than whatever
     * is $availableQuantity of the Product
     *
     * @param Cart $cart
     * @param int $quantity
     * @return CartItem
     */
    public function addToCart(Cart $cart, int $quantity) : CartItem
    {
        //TODO Implement method
        foreach ($cart->get_items() as $key => $value) {
            $total_quantity = $quantity + $value['quantity'];
            if ($value['id'] === $this->id && $value['title'] == $this->title && $total_quantity <= $this->availableQuantity) {
                // $cart->set_after($total_quantity, $key);
                // $cart->chenge_availableQuantity($key, $value['availableQuantity'] - $quantity);
                // $this->availableQuantity = $value['availableQuantity'] - $quantity;
                return new CartItem($this, $cart, $value['quantity']);
                break;
            }else {
                //TODO
            }
        }
    }

    /**
     * Remove product from cart
     *
     * @param Cart $cart
     */
    public function removeFromCart(Cart $cart)
    {
        //TODO Implement method
        foreach ($cart->get_items() as $key => $value) {
            if ($this->id === $value['id']) {
                $cart->unset_value($key);
            }
        }
    }
}