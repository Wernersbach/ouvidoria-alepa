<?php
$url = explode("/", $_SERVER['PHP_SELF'], -1);
echo(end($url));
?>