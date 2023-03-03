<?php
    require('Treygol4.php');
    use PHPUnit\Framework\TestCase;

    class Treygol4Test extends TestCase{
        /** @test */
        public function checkTreygolTest(){
            $testClass = new Treygol4();
            $result = $testClass->proverka4(4,4);
            $this->assertEquals(1,$result);
        }
    }
?>