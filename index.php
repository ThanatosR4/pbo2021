<?php
 
include('Mahasiswa.php');

$mahasiswa_Ais = new Mahasiswa();
$mahasiswa_Yuni = new Mahasiswa();
$mahasiswa_Faiz = new Mahasiswa();
 
$mahasiswa_Ais->nim = "H1101191048" ;
$mahasiswa_Ais->nama = "Rahmat Ramadhan Al Hais" ;
$mahasiswa_Ais->tanggal_lahir = "23-12-2000" ;
$mahasiswa_Ais->jenis_kelamin = "laki-Laki" ;

$mahasiswa_Yuni->nim = "H1101191031";
$mahasiswa_Yuni->nama = "Yunida Salsabila" ;
$mahasiswa_Yuni->tanggal_lahir = "16-10-2001";
$mahasiswa_Yuni->jenis_kelamin = "Perempuan";

$mahasiswa_Faiz->nim = "H1101191034";
$mahasiswa_Faiz->nama = "Faiz Al Fauzi";
$mahasiswa_Faiz->tanggal_lahir = "20-09-2000" ;
$mahasiswa_Faiz->jenis_kelamin = "Laki-Laki";

$mahasiswa_Ais->tampilkanAngkatan();
$mahasiswa_Ais->tampilkanUmur()  ;
$mahasiswa_Yuni->tampilkanAngkatan();
$mahasiswa_Yuni->tampilkanUmur() ; 
$mahasiswa_Faiz->tampilkanAngkatan();
$mahasiswa_Faiz->tampilkanUmur()  ;
