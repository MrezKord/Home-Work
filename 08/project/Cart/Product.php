<?php


class Product
{
    private int $id;
    private string $title;
    private float $price;
    private int $availableQuantity;

    public function __construct(int $id, string $title, float $price, int $availableQuantity)
    {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->availableQuantity = $availableQuantity;
    }

    /**
     * get availableQuantity
     * 
     * @return $this->availableQuantity;
     */

    public function get_availableQuantity(){
        return $this->availableQuantity;
    }

    /**
     * decrease availableQuantity
     * 
     * @param $quantity
     */

    public function decrease_availableQuantity($quantity)
    {
        $this->availableQuantity -= $quantity;
    }

    /**
     * decrease availableQuantity
     * 
     * @param $quantity
     */

    public function increase_availableQuantity($quantity){
        $this->availableQuantity += $quantity;
    }

    /**
     * get id
     * 
     * @return $id
     */

    public function get_id(){
        return $this->id;
    }

    /**
     * get price
     * 
     * @return $price
     */

    public function get_price(){
        return $this->price;
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
            'availableQuantity' => $this->availableQuantity,
        ];
    }
    
    // TODO Generate constructor with all properties of the class
    // TODO Generate getters and setters of properties

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
    public function addToCart(Cart $cart, int $quantity): CartItem
    {
        //TODO Implement method;

        if ($this->get_availableQuantity() >= $quantity) {
            if ($cart->check_item($this) !== false) {
                $cart->add_quantity($cart->check_item($this), $quantity);
                $this->decrease_availableQuantity($quantity);
            }else {
                $cart->add_item($this, $quantity);
                $this->decrease_availableQuantity($quantity);                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
            }
        }else {
            trigger_error("Your request is more than the store inventory", E_USER_ERROR);
        }
        return new CartItem($this, $quantity, $cart);

    }

    /**
     * Remove product from cart
     *
     * @param Cart $cart
     */
    public function removeFromCart(Cart $cart)
    {
        //TODO Implement method
        if ($cart->check_item($this) !== false) {
            $key = $cart->check_item($this);
            if ($this->availableQuantity >= $cart->get_items()[$key]['quantity']) {
                if ($cart->get_items()[$key]['quantity'] === 1) {
                    $cart->unset_value($key);
                    $this->availableQuantity += 1;
                }else {
                    $cart->reduce_quantity($key, 1);
                    $this->availableQuantity += 1;
                }
            }
        }
    }
}