<?php


use Post\Post;
use UserType\GoldenUser;
use UserType\SilverUser;
use UserType\NormalUser;
use User\User;

include "./vendor/autoload.php";


$content1 = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, obcaecati.";
$content2 = "consectetur adipisicing elit. Laborum, obcaecati";

$post1 = new Post('lorem', $content1);
$post2 = new Post('sky', $content2);

$golden_user = new GoldenUser('reza', 'mohammadrezasaeedi8295@gmail.com');
$silver_user = new SilverUser('sara', 'sasrasaeedi8295@gmail.com');
$normal_user = new NormalUser('saba', 'aeedi8295@gmail.com');

$golden_user->like($post1);
$silver_user->like($post1);
$normal_user->like($post1);


// print_r($post1->getLikes());


$golden_user->comment('never give up', $post1);
$silver_user->comment('i love programming', $post2);


// print_r($post2->getComments());


$golden_user->archive($post1);
$golden_user->archive($post2);


// print_r($golden_user->getArchivePost());


// print_r(User::getUsers());


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="output.css">
</head>
<body>
    <div class="container-main">
        <?php echo $post1->show(); ?>
    </div>
</body>
</html>