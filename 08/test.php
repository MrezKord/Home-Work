<?php

$a = 'eee';
if (gettype((int)$a) === "integer") {
    echo 12;
}else {
    echo 123;
}

echo gettype((int)$a);