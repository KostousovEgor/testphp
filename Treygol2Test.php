<?php
    require('Treygol2.php');
    use PHPUnit\Framework\TestCase;

    class Treygol2Test extends TestCase{
        /** @test */
        public function checkTreygolTest(){
            $testClass = new Treygol2();
            $result = $testClass->proverka2(4);
            $this->assertEquals('Число недвухзначное',$result);
        }
    }
?>