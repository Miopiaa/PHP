<?php

    class Exemplo 
    {
        private $var1;
        public $var2;
        /*

        public static $var3 = 'estatico';

        public function metodo(){

        }

        public static function metodoStatico(){
            //echo 'metodo statico';
        }

        public function metodo2(){

        }
        */

        public function setVar1($var1){
            $this->$var1 = $var1;
        }

        public function pegaVar1(){
            return $this->var1;
        }
    }
    

?>