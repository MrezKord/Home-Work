<?php


class Cart
{

    private array $items = [];

    // TODO Generate getters and setters of properties

    /**
     * check items in Items or not
     * 
     * @param array
     * @return bool
     */

    public function check_item(Product $item){
        $flag = false;
        foreach ($this->items as $key => $value) {
            if ($item->get_id() === $value['product']->get_id()) {
                $flag = $key;
                break;
            }
        }
        return $flag;
    }

    /**
     * add quantity
     * 
     * @param $key
     * @param int $quantity
     */
    
    public function add_quantity($key, int $quantity){
        $this->items[$key]['quantity'] += $quantity; 
    }
    
    /**
     * reduce quantity
     * 
     * @param $key
     * @param int $quantity
     */

    public function reduce_quantity($key, int $quantity){
        $this->items[$key]['quantity'] -= $quantity; 
    }

    /**
     * unset value of items
     * 
     * @param $key
     */

    public function unset_value($key){
        unset($this->items[$key]);
    }

    /**
     * get items
     * 
     * @return array
     */

    public function get_items(){
        return $this->items;
    }


    /**
     * add item
     * 
     * @param
     */

    public function add_item(Product $item, int $quantity){
        $this->items[] = ['product' => $item, 'quantity' => $quantity];
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
    public function addProduct(Product $product, int $quantity): CartItem
    {
        //TODO Implement method
        if ($product->get_availableQuantity() >= $quantity) {
            if ($this->check_item($product) !== false) {
                $this->items[$this->check_item($product)]['quantity'] += $quantity;
                $product->decrease_availableQuantity($quantity);
            }else {
                $this->items[] = ['product' => $product, 'quantity' => $quantity];
                $product->decrease_availableQuantity($quantity);
            }
        }else {
            //TODO
            trigger_error("Your request is more than the store inventory", E_USER_ERROR);
        }
        return new CartItem($product, $quantity, $this);    
    }

    /**
     * Remove product from cart
     *
     * @param Product $product
     */
    public function removeProduct(Product $product)
    {
        //TODO Implement method
        if ($this->check_item($product) !== false) {
            $key = $this->check_item($product);
            if ($this->items[$key]['quantity'] === 1) {
                unset($this->items[$key]);
                $product->increase_availableQuantity(1);
            }else {
                $this->reduce_quantity($key, 1);
                $product->increase_availableQuantity(1);
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
        foreach ($this->items as $key => $value) {
            $c += ($value['product']->get_price() * $value['quantity'] );
        }
        return $c;
    }
}