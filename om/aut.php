<?php
session_start();
if ($_POST){
if(!empty($_POST['mail']) && !empty($_POST['pwd']) )
{
require'dbconfig.php';
$email=$_POST['mail'];
$mot=md5($_POST['pwd']);
$verif=$db_con->prepare("SELECT *FROM admin WHERE user = ? AND pass = ?");
$verif->execute(array($email,$mot));
$autorise=$verif->rowCount();
if($autorise==1)
{
$col=$verif->fetch();
$_SESSION['name']=$col['nom'];
$_SESSION['user']=$col['user'];
header('location:reussit.php');
}else
{
$erreur="Entrer des information correcte";
}
}
}
 ?>
