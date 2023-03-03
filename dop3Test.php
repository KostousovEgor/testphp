<?php
    require('dop3.php');
    use PHPUnit\Framework\TestCase;

    class dop3Test extends TestCase{
        /** @test */
        public function checkdop3Test(){
            $testClass = new dop3(4,2,5);
            $result = $testClass->proverka3();
            $this->assertEquals('Не существет',$result);
            
            $testClass = new dop3(0,2,5);
            $result = $testClass->proverka3();
            $this->assertEquals('Не существет',$result);
            
            $testClass = new dop3(1,8,7);
            $result = $testClass->proverka3();
            $this->assertEquals('-1 -7',$result);
            
            $testClass = new dop3(2,-5,3);
            $result = $testClass->proverka3();
            $this->assertEquals('1.5 1',$result);
        }
    }
?>