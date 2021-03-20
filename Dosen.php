<?php
require_once('User.php');
require_once('Pegawai.php');

class Dosen extends Pegawai{
    protected $nidn;
    protected $jabatan_akademis;

    	// method untuk setter
	public function setnidn($a){
		$this->nidn = $a;
	}
	public function setjabatan_akademis($a){
		$this->jabatan_akademis = $a;
	}
         // method untuk getter
	public function getnidn() {
		return $this->nidn; 
	}
	public function getjabatan_akademis() {
		return $this->jabatan_akademis;
	}

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