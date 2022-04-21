<?php


class CartItem
{
    private Product $product;
    private int $quantity;
    private Cart $cart;

    /**
     * Constructor
     * 
     * @param $product
     * @param $quantity
     */

    public function __construct(Product $product, int $quantity, Cart $cart)
    {
        $this->product = $product;
        $this->quantity = $quantity;
        $this->cart = $cart;
    }

    // TODO Generate constructor with all properties of the class
    // TODO Generate getters and setters of properties

    
    public function increaseQuantity()
    {
        //TODO $quantity must be increased by one.
        // Bonus: $quantity must not become more than whatever is Product $availableQuantity
        foreach ($this->cart->get_items() as $key => $value) {
            if ($value['product'] === $this->product) {
                if ($value['quantity'] <= $this->product->get_availableQuantity()) {
                    $this->cart->add_quantity($key, 1);
                    $this->product->decrease_availableQuantity(1);
                    break;
                }
            }
        }
    }

    public function decreaseQuantity()
    {
        //TODO $quantity must be decreased by one.
        // Bonus: Quantity must not become less than 1
        foreach ($this->cart->get_items() as $key => $value) {
            if ($value['product'] === $this->product) {
                if ($value['quantity'] > 1) {
                    $this->cart->reduce_quantity($key, 1);
                    $this->product->increase_availableQuantity(1);
                    break;
                }
            }
        }
    }
}