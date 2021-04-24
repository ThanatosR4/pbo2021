<?php

namespace App;

require_once('User.php');
require_once('Mahasiswa.php');

class MahasiswaBaru extends Mahasiswa{
    protected $no_registrasi;

    	// method untuk setter
	public function setno_registrasi($a){
		$this->no_registrasi = $a;
	}
         // method untuk getter
	public function getno_registrasi() {
		return $this->no_registrasi; 
	}

    function __construct($nim,$nama,$tgl,$jk){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->tanggal_lahir = $tgl;
        $this->jenis_kelamin = $jk;
    }

    function bayarGedung(){

    }
}

?>