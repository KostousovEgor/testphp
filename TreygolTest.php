<?php
    require('Treygol.php');
    use PHPUnit\Framework\TestCase;

    class TreygolTest extends TestCase{
        /** @test */
        public function checkTreygolTest(){
            $testClass = new Treygol();
            $result = $testClass->proverka(1,4,1);
            $this->assertEquals('Равнобедренный',$result);
        }
    }
?>