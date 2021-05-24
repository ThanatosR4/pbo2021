<?php

use App\Alamat;
use App\Pengguna;

require_once('vendor/autoload.php');

$pengguna = new Pengguna(3, "Dian Prawira", new Alamat(5, "Pontianak"));

$alamat_pengguna = $pengguna->getAlamat();
echo $alamat_pengguna->getKota();