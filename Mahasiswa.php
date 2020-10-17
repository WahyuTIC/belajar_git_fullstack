<?php

class Mahasiswa 
{
    private $name;
    private $umur;

    function __construct($name="Reyhan", $umur=21)
    {
        $this->name = $name;
        $this->umur = $umur;
    }

    function call_identity()
    {
        echo "<p>".$this->name." umur : ".$this->umur."</p>";
    }

    // void method
    function set_name($name)
    {
        $this->name = $name;
    }

    // non void
    function get_name()
    {
        return $this->name;
    }
}

$mhs1 = new Mahasiswa("NooBee", 2);
$mhs1->call_identity();
// var_dump($setName);
