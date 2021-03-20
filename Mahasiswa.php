<?php
require_once('User.php');

class Mahasiswa extends User{
    protected $nim;
    protected $nama;
    protected $tanggal_lahir;
    protected $jenis_kelamin;

      	// method untuk setter
	public function setnim($a){
		$this->nim= $a;
	}
	public function setnama($a){
		$this->nama = $a;
	}
    public function settanggal_lahir($a){
		$this->tanggal_lahir= $a;
	}
	public function setjenis_kelamin($a){
		$this->jenis_kelamin = $a;
	}
         // method untuk getter
	public function getnim() {
		return $this->nim; 
	}
	public function getnama() {
		return $this->nama;
	}
    public function gettanggal_lahir() {
		return $this->tanggal_lahir; 
	}
	public function getjenis_kelamin() {
		return $this->jenis_kelamin;
	}


    function __construct($nim,$nama,$tgl,$jk){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->tanggal_lahir = $tgl;
        $this->jenis_kelamin = $jk;
    }
    public function tampilkanAngkatan(){
        echo $this->nama. ' merupakan angkatan tahun '. substr($this->nim,5,2);
    }
    public function tampilkanUmur(){
        echo date_diff(date_create($this->tanggal_lahir), date_create('today'))->y  ;
    }

    public function tampilkanNama(){
        echo $this->nama;
    }
}