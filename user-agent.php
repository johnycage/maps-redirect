<?php
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$ipad = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
$wp = strpos($_SERVER['HTTP_USER_AGENT'],"Windows Phone");


if ($wp == true)
{
echo "<script>window.location='http://www.bing.com/maps/default.aspx?rtp=~pos.0.0000_00.0000_Name,%20Area,%20Town'</script>";
}

else 
{ 
echo "<script>window.location='https://www.google.co.in/maps/dir//0.0000000,00.0000/@00.00000,00.0000,18z'</script>";
}
?>