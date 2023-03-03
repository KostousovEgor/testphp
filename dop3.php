<?php
    class dop3{
        public $a;
        public $b;
        public $c;

        public function __construct($a,$b,$c)
        {
            $this->a = $a;
            $this->b = $b;
            $this->c = $c;   
        }

        public function proverka3(){
                if($this->a == 0) return 'Не существет';

                $D = $this->b * $this->b - 4 * $this->a * $this->c;

                if($D < 0) return 'Не существет';

                if($D == 0){
                    $res1 = (-$this->b + sqrt($D)) / (2 * $this->a);
                    return $res1;
                }
                else if($D > 0){
                    $res2 = (-$this->b + sqrt($D)) / (2 * $this->a);
                    $res2 .= " " . (-$this->b - sqrt($D)) / (2 * $this->a);
                    return $res2;
                }
            }
        }
?>