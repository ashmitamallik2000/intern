<?php


it('sum of two numbers',function(){
    $sum = 2+5;
    $user= createUser();
    $this->assertEquals($sum, 7); 
});