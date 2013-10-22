<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
 
<head> 
  <title>Set Cookie</title> 
</head> 
 
<body> 
 
<?php 
// Mendapatkan nilai cookie 
echo $_COOKIE['nama_cookie']; 
 
 
// Men-set nilai cookie 
setcookie('nama_cookie', 'nilai_cookie'); 
 
 
?> 
 
<p> 
Tekan Refresh (F5); 
 
</body>  
</html>
