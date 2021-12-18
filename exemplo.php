<?php
    class Exemplo{

        private $var1;
        public $var2;
        
        public static $var3 = 'rafa';

        public function Setvar1($var1){
            $this->var1 = $var1;
        }

        public function Pegavar1(){
            echo '<hr>';
            return $this->var1;
        }

    }
?>