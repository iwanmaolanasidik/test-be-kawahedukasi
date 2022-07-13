<?php


$data = [1, 2, 4, 3, 10, 11, 20, 5, 100, 200];

foreach ($data as $dt) {
    if($dt == 5){
        echo "Fizz <br>";
    }elseif($dt == 11){
        echo "Buzz <br>";
    }else{
        echo $dt."<br>";
    }
}


