<?php
class Lingkaran{
    // atribut / properti
    /**
     * Access Modifier:
     * 1. Public : Properti atau methode dapat di akses dimanapun
     * 2. private : hanya dapat di akses didalam class tersebut
     * 3. protected : mirip dengan private, tetapi dapat diakses juga oleh child class (anak dari class lingkaran)
     */

     // properti
     private $jari;
     const PHI = 3.14;

     // method: function yang berada didalam class
     // constructor : method yang otomatis berjalan ketika object dibuat
     public function __construct($r)
     {
        $this->jari = $r;
     }

     public function getLuas(){
        return self::PHI * $this->jari * $this->jari;
     }
     public function getKeliling(){
        return 2 * self::PHI * $this->jari;
     }
}