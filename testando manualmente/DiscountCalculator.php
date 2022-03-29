<?php

class DiscountCalculator{

    const MINIUM_VALUE=100;
    const DISCOUNT_VALUE=20;

    public function apply($value){

        if($value>self::MINIUM_VALUE){

            return $value - self::DISCOUNT_VALUE;
    
        }
        return $value;

    }

}

?>