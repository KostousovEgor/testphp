<?php
    class Treygol4{
        public function proverka4($x,$y){
            if($x > 0 && $y > 0) return 1;
            else if($x < 0 && $y > 0) return 2;
            else if($x < 0 && $y < 0) return 3;
            else if($x > 0 && $y < 0) return 4;
        } 
    }
?>