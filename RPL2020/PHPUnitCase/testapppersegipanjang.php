<?php
require_once 'apppersegipanjang.php';
// $persegipanjang= new apppersegipanjang(19,15);
// print $persegipanjang->getLuas()."<br>";
// print $persegipanjang->getKeliling();

require_once '../../php/pear/PHPUnit2/Framework/TestCase.php';
class testapppersegipanjang extends PHPUnit\framework\TestCase {
    public $luas;
    public $keliling;

    protected function setUP(){
        $persegipanjang= new apppersegipanjang(19,15);
        $this->luas=$persegipanjang->getLuas();
        $this->keliling=$persegipanjang->getKeliling();
    }

    public function testluas(){
        $this->assertEquals(285,$this->luas);

    }

    public function testkeliling(){
        $this->assertEquals(68,$this->keliling);
    }
}

?>