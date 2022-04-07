<?php

namespace OrderBundle\Validators\Test;

use OrderBundle\Validators\CreditCardNumberValidator;
use PHPUnit\Framework\TestCase;

class CreditCardNumberValidatorTest extends TestCase{
    /**
     * @dataProvider valueProvider
     */
    public function testComValueProvider($value,$expectedResult){
      
        $Validator = new CreditCardNumberValidator($value);
        $isValid = $Validator->isValid();
        
        $this->assertEquals($expectedResult,$isValid);

    }

    public function valueProvider(){

        return [
            "The value is Numeric and not is credit card"=>['value'=>'2','expectedResult'=>false],
            "The value is Numeric and is credit card"=>['value'=>'5542013567541476','expectedResult'=>true],
            "The value is Numeric and is credit card"=>['value'=>5542013567541476,'expectedResult'=>true],
            "The value is Numeric and is credit card"=>['value'=>'55s2013567541476','expectedResult'=>false],
          
        ];

    }
}
