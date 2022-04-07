<?php

namespace OrderBundle\Validators\Test;

use OrderBundle\Validators\CreditCardExpirationValidator;
use PHPUnit\Framework\TestCase;

class CreditCardExpirationValidatorTest extends TestCase{
    /**
     * @dataProvider valueProvider
     */
    public function testComValueProvider($value,$expectedResult){
      
        $value= new \Datetime($value);
        $Validator = new CreditCardExpirationValidator($value);
        $isValid = $Validator->isValid();
        
        $this->assertEquals($expectedResult,$isValid);

    }

    public function valueProvider(){

        return [
            "valid"=>['value'=>'2040-01-02','expectedResult'=>true],
            "expired"=>['value'=>'2010-01-02','expectedResult'=>false]
        
        ];

    }
}
