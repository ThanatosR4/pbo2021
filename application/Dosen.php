<?php

namespace application;

require_once('application/User.php');
require_once('application/Pegawai.php');

class Dosen
{
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

    function __construct($nip="", $nama="Dian Prawira", $hp="0800000", $gp="50000000"){
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