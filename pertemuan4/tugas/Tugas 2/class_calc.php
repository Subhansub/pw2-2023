<?php
/**
 * Task 1
 * Buatlah class Calculator 2 bilangan
 * Method: Pertambahan, Pengurangan, Pembagian dan Perkalian
 * Tampilkan masing-masing method dengan object
 */
    class Calculator {
        public $bilangan1;
        public $bilangan2;

        public function __construct($bil1, $bil2) {
            // code..
            $this->bilangan1 = $bil1;
            $this->bilangan2 = $bil2;
        }

        // Method lainnya
        public function Pertambahan() {
            $tambah = $this->bilangan1 + $this->bilangan2;
            return $tambah;
        }
        public function Pengurangan() {
            $kurang = $this->bilangan1 - $this->bilangan2;
            return $kurang;
        }
        public function Perkalian() {
            $kali = $this->bilangan1 * $this->bilangan2;
            return $kali;
        }
        public function Pembagian() {
            $bagi = $this->bilangan1 / $this->bilangan2;
            return $bagi;
        }
    }

    // Buat object dan tampilkan masing-masing method
    $calculator = new Calculator(15, 8);

    echo '<br>Hasil Pertambahan'.$calculator->Pertambahan();
	echo '<br>Hasil Pengurangan'.$calculator->Pengurangan();
	echo '<br>Hasil Perkalian'.$calculator->Perkalian();
	echo '<br>Hasil Pembagian'.$calculator->Pembagian();
?>