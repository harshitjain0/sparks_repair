<?php
 function generatekey(){
$keyLength = 8;
$str = "1234567890abcefghijklmnoprstuvwxyz()/$";
$randStr = substr(str_shuffle($str), 0,);
return $randStr;
}
echo generateKey();
?>