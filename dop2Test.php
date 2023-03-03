<?php
    require('dop2.php');
    use PHPUnit\Framework\TestCase;

    class dop2Test extends TestCase{
        /** @test */
        public function checkdop2Test(){
            $testClass = new dop2(3,2,2);
            $result = $testClass->Streygol();
            $testClass2 = new dop2(2,5,2);
            $result2 = $testClass2->Streygol();
            if($result > $result2) $Result = '1-ый больше 2-ого';
            else 
            if($result < $result2) $Result = '2-ой больше 1-ого';
            else
            if($result == $result2) $Result = 'оба равны';
            $this->assertEquals('2-ой больше 1-ого',$Result);
        }
    }
?>