<?php

require_once("application/Dosen.php");


$dian = new application\Dosen();
$dian->setnidn("198411132015041001");
$dian->setjabatan_akademis("Dosen Sistem Informasi");

echo "Nama      : $dian->nama ";
echo "<br>";
echo "NIDN      :" ;
echo $dian->getnidn();
echo "<br>";
echo "Jabatan   :" ;
echo $dian->getjabatan_akademis();
echo "<br>" ;
echo "Nomor HP  : $dian->no_hp ";
echo "<br>";
echo "Gaji Pokok: $dian->gaji_pokok ";
echo "<br>";

