<?php
session_start();
require('connect.php');
if(isset($_POST['btn'])){
$username=$_POST['username'];
$password=$_POST['password'];
$upit=$conn->prepare('Select username,password from Katanac where username= ? and password= ? ');
$upit->execute(array($username,$password));
if($upit->rowCount()==1){
    $_SESSION['username']=$username;
    header("location: index.view.php");
}
else{ echo "Nema te u DB ili si lose unio username i password ili neka greska";}
}
if(isset($_GET['logout'])){
    session_unregister('username');
}
?>
<form method="POST" style="text-align:center">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" value="Login" name="btn">
    <br><i><b>Contact me to get u into DB</b></i>
    <br>
    <a href="mailto:zaboravni123@gmail.com?Subject=Hello%20again"><img src="email.gif"></a>
</form>