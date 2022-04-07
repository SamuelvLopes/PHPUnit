<?php

namespace OrderBundle\Validators\Test;

use OrderBundle\Validators\NotEmptyValidator;
use PHPUnit\Framework\TestCase;


class NotEmptyValidatorTest extends TestCase{

    public function testShouldNotBeValidWhenValueIsEmpty(){

        $emptyValue = "";
        $notEmptyValidator = new NotEmptyValidator($emptyValue);
        $isValid = $notEmptyValidator->isValid();
        
        $this->assertFalse($isValid);

    }
    public function testShouldBeValidWhenValueIsNotEmpty(){

        $notemptyValue = "valor";
        $notEmptyValidator = new NotEmptyValidator($notemptyValue);
        $isValid = $notEmptyValidator->isValid();
        
        $this->assertTrue($isValid);

    }
    public function testValidadorTest(){
        $dataProvider=[
            ''=>false,
            'dd'=>true

        ];
        foreach($dataProvider as $value =>$expectedResult){
        $Validator = new NotEmptyValidator($value);
        $isValid = $Validator->isValid();
        
        $this->assertEquals($expectedResult,$isValid);
        }
    }

    /**
     * @dataProvider valueProvider
     */
    public function testComValueProvider($value,$expectedResult){
      
        $Validator = new NotEmptyValidator($value);
        $isValid = $Validator->isValid();
        
        $this->assertEquals($expectedResult,$isValid);

    }

    public function valueProvider(){

        return [
            "Shold Be Valid When Value Is Not Empty"=>['value'=>'teste','expectedResult'=>true],
            "Shold Be Not Valid When Value Is Not Empty"=>['value'=>'','expectedResult'=>false],
        ];

    }

}
