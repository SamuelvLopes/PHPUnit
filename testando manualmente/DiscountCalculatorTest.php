<?php

    class DiscountCalculatorTest{

        public function ShouldApply_WhenValueIsAboveTheMinimunTest(){

            $discountCalculator = new DiscountCalculator;
            

            $totalValue=130;
            $totalWithDiscount=$discountCalculator->Apply($totalValue);
            
            $expectedValue=110;

            $this->assertEquals($expectedValue,$totalWithDiscount);

        }
        public function ShouldNotApply_WhenValueIsBellowTheMinimunTest(){

            $discountCalculator = new DiscountCalculator;
            

            $totalValue=90;
            $totalWithDiscount=$discountCalculator->Apply($totalValue);
            
            $expectedValue=90;

            $this->assertEquals($expectedValue,$totalWithDiscount);

        }

        public function assertEquals($expectedValue,$actualValue){

            if ($expectedValue != $actualValue){

                $message ='Expected:' . $expectedValue . 'but got:'.$actualValue;
                throw new \Exception($message);

            }
            echo "Test passed! \n";
        }
}