<?php

class Kendaraan 
{
    private $jenis, $merk;

    public function __construct($jenis="Motor", $merk="Toyota")
    {
        $this->jenis = $jenis;
        $this->merk = $merk;
    }

    public function set_jenis($jenis)
    {
        $this->jenis = $jenis;
    }

    public function get_jenis()
    {
        return $this->jenis;
    }

    public function set_merk($merk)
    {
        $this->merk = $merk;
    }

    public function get_merk()
    {
        return $this->merk;
    }

    public function print()
    {
        echo "\t Type : ".$this->get_jenis().
            "\t Merk : ".$this->get_merk();
    }
}