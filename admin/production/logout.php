<?php

session_start(); //session çalıştır ve 
session_destroy(); // hafızadaki bütün session siler...

header('Location:login.php?durum=exit');

?>