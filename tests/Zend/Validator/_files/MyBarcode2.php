<?php
namespace Zend\Validator\Barcode;
class MyBarcode2 extends \Zend\Validator\Barcode\AbstractAdapter
{
    public function __construct()
    {
        $this->setLength(array(1, 3, 6));
        $this->setCharacters(128);
        $this->setChecksum('_mod10');
    }
}
