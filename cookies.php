<?php
session_start();
if (!isset($_COOKIE['ultima_visita'])) {
    setcookie('ultima_visita', date("d-m-Y H:i:s"), time() + (86400 * 30), "/"); 
} else {
    echo "Última visita: " . $_COOKIE['ultima_visita'];
}
?>