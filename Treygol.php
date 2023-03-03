<?php
    class Treygol{
        public function proverka($a,$b,$c){
            if($a>$b && $b>$c){ return 'Разносторонний';}
            else if($a==$b && $b==$c){ return 'Равносторонний';}
            else if($a==$b || $b==$c || $a==$c) {return 'Равнобедренный';}
            else {return 'Некорректные данные';}
        } 
    }
?>