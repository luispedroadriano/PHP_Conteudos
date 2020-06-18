<?php
session_id('4n7noppco4sfsrr0oclgov8rbr');
require_once("config.php");
session_regenerate_id();
echo session_id();

var_dump($_SESSION);
?>