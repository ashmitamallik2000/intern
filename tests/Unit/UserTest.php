<?php

function sum($a,$b){
    return $a + $b;
}

describe('sum',function(){
 test('may sum integer', function(){
    $result = sum(1,2);
    expect($result)->toBe(3);
 });
  test('may sum float', function(){
    $result = sum(1.5,2.5);
    expect($result)->toBe(4.0);
  });
});