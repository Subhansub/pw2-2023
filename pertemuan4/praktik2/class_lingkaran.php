<?php

    class Lingkaran {
        //Property
        private $r;
        const PHI = 3.14;

        //Method
        function __construct($jari) {
            $this->r = $jari;
        }

        function getLuas() {
            //phi * r^2
            $luas = self::PHI * $this->r * $this->r;
            return $luas;
        }

        function getKel() {
            $kel = 2 * self::PHI * $this->r;
            return $kel;
        }

    }

?>