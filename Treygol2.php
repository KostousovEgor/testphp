<?php
    class Treygol2{
        public function proverka2($x){
            if(!is_nan($x)){
                if($x>9 && $x<100) return 'Число двухзначное';
                else return 'Число недвухзначное';
            }
        } 
    }
?>