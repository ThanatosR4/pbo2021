<?php
require_once('User.php');
require_once('Pegawai.php');

class Dosen extends Pegawai{
    public $nidn;
    public $jabatan_akademis;

    function __construct($nip,$nama,$hp,$gp){
        $this->nip = $nip;
        $this->nama = $nama;
        $this->no_hp = $hp;
        $this->gaji_pokok = $gp;
    }

    function mengajar(){

    }

    function meneliti(){

    }
}


?> 