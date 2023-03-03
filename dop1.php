<?php
    class dop1{
        public $x;
        public $y;
        public $r;

        public function __construct($r)
        {
            $this->r = $r;
        }

        public function proverka1($x,$y){
            if(pow($x,2)+pow($y,2)<=pow($this->r,2)) { return 'Точки внутри';}
            else{ return 'Точки не внутри';}
        }
    }
?>