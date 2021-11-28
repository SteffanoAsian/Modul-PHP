<?php
	
$username=$_POST['username']; 	
$password=$_POST['password']; 	

if($username =="admin  " || $password=="admin"){
    header("location: sukses.php");

}else{
   
    echo '<script language="javascript">alert("Login Gagal!"); document.location="index.php";</script>';
	
}
?>
