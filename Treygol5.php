<?php
    class Treygol5{
        public function proverka5($cost,$money){
            if($cost > $money) return "Не хватает: ". $cost-$money . " рублей";
        else if($cost < $money) return "Сдача" . $money-$cost . " рублей";
        else if ($cost == $money) return "Спасибо!";
        } 
    }
?>