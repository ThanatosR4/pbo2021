<?php

require_once ('Mahasiswa.php');
$ais = new Mahasiswa("H1101191048","Rahmat Ramadhan Al Hais","2000-12-23","Laki-Laki");
$yuni = new Mahasiswa("H1101191031","Yunida Salsabila","2001-10-16","Perempuan");
$faiz = new Mahasiswa("H1101191034","Faiz Al Fauzi","2000-09-20","Laki-Laki");
?>
<html>
 <head>
   <title>PHP Test</title>
 </head>
 <body>
   <?php echo '<p>Hello World</p>'; ?>
   <?php
    $ais->tampilkanNama();
   ?><br>
   <?php
    $ais->tampilkanUmur();
   ?><br>
   <?php
    $ais->tampilkanAngkatan();
   ?><br>

 </body>
</html>