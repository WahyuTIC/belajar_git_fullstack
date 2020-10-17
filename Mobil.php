<?php

require_once "./Kendaraan.php";

class Mobil extends Kendaraan
{
    private $color, $name;

    public function __construct($color="red", $name="BMW-1", $jenis="Mobil", $merk="BMW")
    {
        parent::__construct($jenis, $merk);
        $this->color = $color;
        $this->name = $name;
    }

    public function set_name($name)
    {
        $this->name = $name;
    }

    public function get_name()
    {
        return $this->jenis;
    }

    public function print()
    {
        echo 
            "Nama : ".$this->name.
            "\t Warna : ".$this->color.
            "\t Type : ".$this->get_jenis().
            "\t Merk : ".$this->get_merk();
    }
}

$mobil = new Mobil("White","Kijang 1", "Mobil", "Toyota");
$mobil->print();