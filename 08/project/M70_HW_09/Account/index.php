<?php 

require "Account.php";
require "User.php";

$account = new Account('123456789', 1200);

// print_r($account->get_account_info());

$user = new User('reza', $account);

print_r($user->get_user().PHP_EOL);

$user->add_balance(1000);

print_r($user->get_user().PHP_EOL);

$user->reduce_balance(2100);

print_r($user->get_user().PHP_EOL);

$user->chenge_username('taha');

print_r($user->get_user().PHP_EOL);