<?php

include('functions.php');

if($_POST['username'] || $_SESSION['username'])
{ 
//Sanitize the POST values
$login = clean($_POST['username']);
$password = clean($_POST['userpass']);

if($_SESSION['username'])
{
	$result = connect("SELECT * FROM validsessions WHERE username = '".$_SESSION['username']."' AND sessionid = ".$_SESSION['sessionid']." LIMIT 1");
	if($row = mysql_fetch_assoc($result)) 
	echo "<script type='text/javascript'>location.href='home.php'</script>";
	exit();
}
	
//Encrypt password
$encryptedPassword = md5('warehouse'.$password.'manage');

$query="SELECT password from users WHERE username='".$login."' LIMIT 1";
$data=connect($query);

$row=mysql_fetch_assoc($data);

if($row['password']==$encryptedPassword && $login!="")
{
	
	connect("DELETE FROM validsessions WHERE username = '".$login."'");
	
	$_SESSION['sessionid']=rand(10000,99999);
	$_SESSION['username']=$login;
	$query="INSERT INTO validsessions (sessionid, username) VALUES('".$_SESSION['sessionid']."','".$login."')";
	connect($query);
	
	echo "<script type='text/javascript'>location.href='home.php'</script>";
}
}
else
{
	?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Warehouse Management</title>

<link href="main-style.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>

</head>

<body>

<div id="main-wrapper" align="center">

	<div id="content-wrapper">
    
		<h1>WAREHOUSE MANAGEMENT</h1>
            
        <div id="page-content">
        
            
            <div class="page-section">
            
            <form method="post" action="" enctype="multipart/form-data">
            <table>
            	<tr><td>USER NAME</td><td><input type="text" maxlength="15" name="username" /></td></tr>
               	<tr><td>PASSWORD</td><td><input type="password" maxlength="15" name="userpass" /></td></tr>
                <tr><td></td><td><input type="submit" name="usersub" value="LOGIN" /></td></tr>
            </table>
			
            </form>
            
            </div>

            
        <!-- page-content -->
        </div>
    
    <!-- content-wrapper -->
    </div>


<!-- main-wrapper -->
</div>



</body>
</html>

<?php } ?>
