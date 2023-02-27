<?php
    /**
     * Esta es la clase calculadora donde se podrá sumar o restar
     * @version 1.11
     * @author Victor Martinez Escobar
     */

     class Calculadora{
         /**
         *  Los dos operandos para sumar y restar
         * @var int 
         */
        private $operando1; 
        private $operando2;
        
        /**
         * Constructor de la clase
         * @param int $numero1
         * @param int $numero2
         * @example 1,2
         */
        function __construct($numero1, $numero2) {
            $this->operando1=$numero1;
            $this->operando2=$numero2;
        }
        /**
         * Suma dos enteros
         * @param int $numero1
         * @param int $numero2
         * @return int  Devuelve el resultado
         * @example 1+2
         */
        static function suma($numero1, $numero2){
            $resultado=$numero1+$numero2;
            return $resultado;
        }
        /**
         * Resta dos enteros
         * @param int $numero1
         * @param int $numero2
         * @return int Resultado de la resta
         * @example 1-2
         */
        static function resta($numero1, $numero2){
            $resultado=$numero1-$numero2;
            return $resultado;
        }
     }
?>
