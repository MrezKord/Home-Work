<?php


class CartItem
{
    private Product $product;
    private Cart $cart;
    private int $quantity;

    /**
     * Constructor
     * 
     * @param $product
     * @param $quantity
     */

    public function __construct(Product $product, Cart $cart, int $quantity)
    {
        $this->product = $product;
        $this->cart = $cart;
        $this->quantity = $quantity;
    }

    // TODO Generate constructor with all properties of the class
    // TODO Generate getters and setters of properties

    public function increaseQuantity()
    {
        //TODO $quantity must be increased by one.
        // Bonus: $quantity must not become more than whatever is Product $availableQuantity
        $product_array = $this->product->get_product();
        foreach ($this->cart->get_items() as $key => $value) {
            if ($product_array['id'] == $value['id']) {
                if ($value['availableQuantity'] > 0) {
                    $this->cart->chenge_availableQuantity($key, $value['availableQuantity'] - 1);
                    $this->product->chenge_availableQuantity($value['availableQuantity'] - 1);
                    $this->cart->set_after($value['quantity'] + 1, $key);

                    break;
                }
            }
        }
        
    }

    public function decreaseQuantity()
    {
        //TODO $quantity must be decreased by one.
        // Bonus: Quantity must not become less than 1
        $product_array = $this->product->get_product();
        foreach ($this->cart->get_items() as $key => $value) {
            if ($product_array['id'] == $value['id']) {
                if ($value['quantity'] > 1) {
                    $this->cart->chenge_availableQuantity($key, $value['availableQuantity'] + 1);
                    $this->product->chenge_availableQuantity($value['availableQuantity'] + 1);
                    $this->cart->set_after($value['quantity'] - 1, $key);                
                }
            }
        }
    }
}