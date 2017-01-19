<?php

// 3で割り切れる時 Fizz
// 5で割り切れる時 Buzz
// 15 で割り切れる時 FizzBuzz

for ($i=1; $i <=100 ; $i++) {
    if ($i % 15 === 0) {
        $result = "FizzBuzz";
    }
    
    if($i % 3 === 0) {
        $result = "Fizz";
    }
    
    if($i % 5 === 0) {
        $result = "Buzz";
    }
    
    echo $result;
}
