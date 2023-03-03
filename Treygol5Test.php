<?php
    require('Treygol5.php');
    use PHPUnit\Framework\TestCase;

    class Treygol5Test extends TestCase{
        /** @test */
        public function checkTreygolTest(){
            $testClass = new Treygol5();
            $result = $testClass->proverka5(345,345);
            $this->assertEquals("Спасибо!",$result);
        }
    }
?>