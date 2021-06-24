<?php

namespace App\Models;

interface Pegawai  
{
    /**
     * Methode pada interfae tidak bisa private
     */

    public function setNip($nip);

    public function presensiMasuk();

    public function getNip();

    public function setNama($nama);

    public function getNama();
} 