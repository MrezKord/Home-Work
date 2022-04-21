<?php


class Cart
{

    protected array $items = [];

    // TODO Generate getters and setters of properties

    public function get_items(){
        return $this->items;
    }

    public function set_items(){
        $this->items = [];
    }

    
    /**
     * chenge items
     * 
     * @param $new_quantity
     */

    public function chenge_availableQuantity($key, int $quantity) {
        $this->items[$key]['availableQuantity'] = $quantity;
    }

    public function set_after($quantity, $key){
        $this->items[$key]['quantity'] = $quantity;
    }
    
    /**
     * unset value from items
     * 
     * @param $key
     */

    public function unset_value($key){
        unset($this->items[$key]);
    }

    /**
     * Add Product $product into cart. If product already exists inside cart
     * it must update quantity.
     * This must create CartItem and return CartItem from method
     * Bonus: $quantity must not become more than whatever
     * is $availableQuantity of the Product
     *
     * @param Product $product
     * @param int $quantity
     * @return CartItem
     */
    public function addProduct(Product $product, int $quantity) : CartItem
    {
        //TODO Implement method
        $get_product = $product->get_product();
        if ($get_product['availableQuantity'] >= $quantity) {
            $get_product['quantity'] = $quantity;
            $get_product['availableQuantity'] = $get_product['availableQuantity'] - $quantity;
            $this->items[] = $get_product;
            return new CartItem($product, $this, $quantity);
        }else {
            //TODO
        }
    }

    /**
     * Remove product from cart
     *
     * @param Product $product
     */
    public function removeProduct(Product $product)
    {
        //TODO Implement method
        foreach ($this->items as $key => $value) {
            if ($product->get_product()['id'] === $value['id']) {
                unset($this->items[$key]);
            }
        }
    }

    /**
     * This returns total number of products added in cart
     *
     * @return int
     */
    public function getTotalQuantity(): int
    {
        //TODO Implement method
        $c = 0;
        foreach ($this->items as $value) {
            $c += $value['quantity'];
        }
        return $c;
    }

    /**
     * This returns total price of products added in cart
     *
     * @return float
     */
    public function getTotalSum(): float
    {
        //TODO Implement method
        $c = 0;
        foreach ($this->items as $value) {
            $c += ($value['price'] * $value['quantity']);
        }
        return $c;
    }
}