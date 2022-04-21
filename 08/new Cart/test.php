<?php

require_once "Product.php";
require_once "Cart.php";
require_once "CartItem.php";

$product1 = new Product(1, "iPhone 11", 2500, 10);
$product2 = new Product(2, "M2 SSD", 400, 10);
$product3 = new Product(3, "Samsung Galaxy S20", 3200, 10);

$cart = new Cart();
$cartItem1 = $cart->addProduct($product2, 3);
$cart->addProduct($product3, 1);

$cartItem2 = $product2->addToCart($cart, 1);
$cartItem3 = $product3->addToCart($cart, 1);

print_r($cart->get_items());

// echo "--------------------";
// print_r($cartItem1);
// print_r($cartItem2);
// print_r($cartItem3);

// echo "--------- test -----------";

// // $a = new CartItem($product1, 1);
// // print_r($cart->get_items());



// echo "--------- test -----------";


// echo "Number of items in cart: ".PHP_EOL;
// echo $cart->getTotalQuantity().PHP_EOL; // This must print 2
// echo "Total price of items in cart: ".PHP_EOL;
// echo $cart->getTotalSum().PHP_EOL; // This must print 2900

// $cartItem2->increaseQuantity();
// $cartItem2->increaseQuantity();
// $cartItem1->increaseQuantity();
// $cartItem1->increaseQuantity();




// $cartItem2->decreaseQuantity();
// $cartItem2->decreaseQuantity();
// $cartItem1->decreaseQuantity();
// $cartItem1->decreaseQuantity();

// $product3->removeFromCart($cart);


// echo '############################';

// print_r($cart->get_items());


// echo "Number of items in cart: ".PHP_EOL;
// echo $cart->getTotalQuantity().PHP_EOL; // This must print 4

// echo "Total price of items in cart: ".PHP_EOL;
// echo $cart->getTotalSum().PHP_EOL; // This must print 3700

// $cart->removeProduct($product2);

// print_r($cart->get_items());


// echo "Number of items in cart: ".PHP_EOL;
// echo $cart->getTotalQuantity().PHP_EOL; // This must print 4

// echo "Total price of items in cart: ".PHP_EOL;
// echo $cart->getTotalSum().PHP_EOL; // This must print 3700
