<?php
    require('Treygol3.php');
    use PHPUnit\Framework\TestCase;

    class Treygol3Test extends TestCase{
        /** @test */
        public function checkTreygolTest(){
            $testClass = new Treygol3();
            $result = $testClass->proverka3(2012);
            $this->assertEquals(1951.64,$result);
        }
    }
?>