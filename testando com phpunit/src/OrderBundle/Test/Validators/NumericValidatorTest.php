<?php

namespace OrderBundle\Validators\Test;

use OrderBundle\Validators\NumericValidator;
use PHPUnit\Framework\TestCase;

class NumericValidatorTest extends TestCase{
    /**
     * @dataProvider valueProvider
     */
    public function testComValueProvider($value,$expectedResult){
      
        $Validator = new NumericValidator($value);
        $isValid = $Validator->isValid();
        
        $this->assertEquals($expectedResult,$isValid);

    }

    public function valueProvider(){

        return [
            "The value is Numeric and isnt return true"=>['value'=>'2','expectedResult'=>true],
            "The value is Numeric String and isnt return true"=>['value'=>2,'expectedResult'=>true],
            "The value not is string and isnt return false"=>['value'=>'v','expectedResult'=>false],
            "The value not is string and isnt return false"=>['value'=>'zero','expectedResult'=>false],
            "The value not is string and isnt return false"=>['value'=>null,'expectedResult'=>false],
            "The value not is string and isnt return false"=>['value'=>"two",'expectedResult'=>false],
        ];

    }
}
