<?php

namespace App;

require_once('application/User.php');

class Pegawai extends User{
    protected $nip;
    protected $nama;
    protected $no_hp;
    protected $gaji_pokok;

    	// method untuk setter
	public function setnip($a){
		$this->nip= $a;
	}
	public function setnama($a){
		$this->nama = $a;
	}
    public function setno_hp($a){
		$this->no_hp= $a;
	}
	public function setgaji_pokok($a){
		$this->gaji_pokok = $a;
	}
         // method untuk getter
	public function getnip() {
		return $this->nip; 
	}
	public function getnama() {
		return $this->nama;
	}
    public function getno_hp() {
		return $this->no_hp; 
	}
	public function getgaji_pokok() {
		return $this->gaji_pokok;
	}

    function __construct($nip,$nama,$hp,$gp){
        $this->nip = $nip;
        $this->nama = $nama;
        $this->no_hp = $hp;
        $this->gaji_pokok = $gp;
    }

    function tampilkanGaji(){

    }
}

?> 