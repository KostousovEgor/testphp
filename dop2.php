<?php
    class dop2{
        public $a;
        public $b;
        public $c;

        public function __construct($a,$b,$c)
        {
            $this->a = $a;
            $this->b = $b;
            $this->c = $c;   
        }
        
        public function Streygol(){
            $p = $this->a + $this->b + $this->c;  
            return sqrt($p*($p-$this->a)*($p-$this->b)*($p-$this->c));
        }
    }
?>