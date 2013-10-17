<html>
<head>
<title>KALKULATOR</title>
</head>
<script type="text/javascript">
  function validasi_input( form){
	  if (form.bil1.value != ""){
		  var x = (form.bil1.value);
		  var status = true;
		  var list = new Array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "-");
		  for (i=0; i<=x.length-1; i++)
		  {
			  if (x[i] in list) cek = true;
			  else cek = false;
			  status = status && cek;
		  }		  
			if (status == false)
			{
				alert("Harus Angka!");
				form.bil1.focus();
				return false;
			}
				  if (form.bil2.value != ""){
		  var x = (form.bil2.value);
		  var status = true;
		  var list = new Array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "-");
		  for (i=0; i<=x.length-1; i++)
		  {
			  if (x[i] in list) cek = true;
			  else cek = false;
			  status = status && cek;
		  }		  
			if (status == false)
			{
				alert("Harus Angka!");
				form.bil2.focus();
				return false;
			}

  	}


  	}
			return (true);
  } 
  
  </script>

<body>
<form name="form1" method="post" onSubmit="return validasi_input(this)" action="hasil.php">
KALKULATOR
<p>
	<input name="bil1" type="text" id="bil1">
	<select name="operator" id="operator">
	<option>+</option>
	<option>-</option>
	<option>*</option>
	<option>/</option>
	</select>
	<input name="bil2" type="text" id="bil2">
	<input type="submit" name="Submit" value="Hitung">
</p>
</form>

<p>&nbsp;</p>
</body>
<html>

	
	