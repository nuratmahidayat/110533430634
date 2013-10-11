<!DOCTYPE html>
<html>
<!-- 
Algoritma Program
 1. Mulai
 2. Masukkan Username dan Password
 3. Tekan tombol Login
 4. Muncul alert jika login berhasil
 5. Selesai

-->
<head>
<title>Tugas Praktikum</title>
<style>
body{
	background-color: #808080;
}
.content{
	background-color: #C0C0C0;
	margin: 100px auto;
	padding: 5px 20px 40px 5px;
	width: 350px;
	border: solid 8px #FFFFFF;
}
.min_content{
	margin: 0px auto;
	width: 250px;
	
	
}
.content h1{
	 font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	 text-decoration: blink;
	 color: #000000;
}
.content label{
	display:block;
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	
}
.content input{
	display:block;
	margin: 5px 0 0 0;
	padding: 5px;
	
}
</style>
</head>
<body>

<?php
if(isset($_POST['nama'])&&isset($_POST['admin'])){
	if($_POST['nama']=='atma'&&$_POST['admin']=='admin'){
		echo "Selamat Datang di Website ". $_POST['nama'];
	}else {
		echo "<script>
		alert('Username atau password salah');
		</script>";
	}
}
?>
<form name="login" action="<?php $_SERVER['PHP_SELF'];?>" method="post" onSubmit="return validateForm()">
<div class="content">
<div class="min_content">
<h1>Login</h1>
</div>
<hr color="#FFFFFF", size="8px", width="104%" align="left" />

<div class="min_content">
<label>Username</label>
<input type="text" name="nama" id="nama" autofocus />
<label>Password</label>
<input type="password" name="admin" />
<input type="submit" value="Login" />
</div>
</div>
</form>

<script>
function validateForm(){
var x=document.forms["login"]["nama"].value;
if (x==null || x==""){
	alert("Username tidak boleh kosong!");
	document.getElementById("nama").focus();
	return false;
}
var y=document.forms["login"]["admin"].value;
if (y==null || y==""){
	alert("Password Tidak boleh Kosong!");
	document.getElementById("admin").focus();
	return false;
}
var alphaExp = /^[a-zA-Z]+$/;
if(x.match(alphaExp)){
	if(y.match(alphaExp)){
		return true;
	}else{
		alert("Password yang diisikan Harus Huruf!");
		document.getElementById("nama").focus();
		return false;
	}
	}else{
		alert("Username yang diisikan Harus Huruf!");
		document.getElementById("nama").focus();
		return false;
	}
}
</script>
</body>
</html>