<?php

namespace App;

use App\Pengguna;

class InfoPengguna
{
    private $id;
    private $no_hp;
    private $no_wa;
    private $instagram;
    private $pengguna;

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setPengguna(Pengguna $pengguna)
    {
        $this->pengguna = $pengguna;
    }

    public function setInstagram($username)
    {
        $this->instagram = $username;
    }

    public function getInstagram()
    {
        return $this->instagram;
    }
} 
 11  test_composition.php 
@@ -0,0 +1,11 @@
<?php

use App\Alamat;
use App\Pengguna;

require_once('vendor/autoload.php');

$pengguna = new Pengguna(3, "Dian Prawira", new Alamat(5, "Pontianak"));

$alamat_pengguna = $pengguna->getAlamat();
echo $alamat_pengguna->getKota();
