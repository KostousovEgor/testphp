<?php
    require('dop1.php');
    use PHPUnit\Framework\TestCase;

    class dop1Test extends TestCase{
        /** @test */
        public function checkdop1Test(){
            $testClass = new dop1(5);
            $result = $testClass->proverka1(2,4);
            $this->assertEquals('Точки внутри',$result);
        }
    }
?>