<?php
$string = "abc@grepsr.com";
$exp = preg_match_all("/([a-zA-Z0-9.]+)/",$string, $array);

print_r($array[0]);
?>
