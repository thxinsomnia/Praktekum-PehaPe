<?php
session_start();
session_destroy();
echo("Loggout selesai ! <br>");
echo("Kembali ke halaman login klik <a href=\"loggin.php\">Loggin</a>!");
?>