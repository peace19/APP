<?php
require('aut.php');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>APP</title>
<link href="style.css" type="text/css" rel="stylesheet">
</head>

<body>
<center><img  src="../assets/img/3.jpg" width="1000" alt=""></center>
<center>
<form name="Formulaire" method="post">
<fieldset>
<legend class="trt">Authentication</legend>
<h4><?php if(isset($erreur)){ echo $erreur;} ?> </h4>
<table>
<tr>
<td class="trt">user_name :</td><td width="20"></td><td><input type="text" id="0" name="mail" size="20" placeholder="user_name" required="required" height="80"/></td></tr>
<tr><td colspan="3" height="5"></td></tr>
<tr><td class="trt">Password :</td><td width="20"></td><td><input type="password" id="1" name="pwd" size="20" placeholder="Password" required="required" height="60"/></td></tr>

<tr><td colspan="3" height="5"></td></tr>
<tr><td></td><td width="20"></td><td align="center"><input type="image" src="btn.png"/></td></tr>
<tr><td colspan="3" height="5"></td></tr>
<tr><td colspan="3" align="left">



</td></tr>


</table>

</fieldset>
</form>
</center>
</body>
</html>
