<?
// WebImperyus V.1.0-A
// Bye ADM_ZEH & ADM_DiGh
// www.muimperyus.com - ADM_ZEH@hotmail.com | Digaumstone@hotmail.com
$fp = @fsockopen("127.0.0.1", 55901, $errno, $errstr, 1);
if($fp >= 1){ 
echo '<font color=00FF00>Online</font>';}
else{ echo '<font color=#FF0000>Offline</font>'; } 
?>