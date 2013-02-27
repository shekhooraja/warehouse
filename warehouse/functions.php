<?php

session_start();

function make_header($page)
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
    
    	<div id="heading-text">
        
        Hello, <?php  echo $_SESSION['username']; ?>
        
        <span style="float:right"><a href="home.php">Home</a> | <a href="logout.php">Logout</a></span>
        
        </div>
        
        <div id="main-nav">
        
        	<div id="main-nav-buttons">
            
            	<?php 
					
				switch($page)
				{
					case 'home': ?>
            		<a href="goods-in.php"><img title="Goods In" src="images/button-in.png" /></a>
                   	<a href="goods-out.php"><img title="Goods Withdraw" src="images/button-out.png" /></a>
                	<a href="payments.php"><img title="Payments In or Out" src="images/button-money.png" /></a>
                	<a href="parties.php"><img title="Manage Parties" src="images/button-party.png" /></a>
                	<a href="goods.php"><img title="Manage Goods" src="images/button-goods.png" /></a>
                    <a href="reports.php"><img title="Reports" src="images/button-reports.png" /></a>
                    
                    </div>
            		<div id="main-nav-cover"></div></div>
        
        			<div id="page-content">
        
        			<div id="page-nav">
                    <a href="add-new-party.php">Add New Party</a>  |  <a href="#">Menu Section</a>  |  <a href="#">Menu Section</a>  |  <a href="#">Menu Section</a>
            
            		</div>
            		<div class="page-section">
                    
                	<?php break;
					
					case 'reports': ?>
            		<a href="goods-in.php"><img title="Goods In" src="images/button-in.png" /></a>
                   	<a href="goods-out.php"><img title="Goods Withdraw" src="images/button-out.png" /></a>
                	<a href="payments.php"><img title="Payments In or Out" src="images/button-money.png" /></a>
                	<a href="parties.php"><img title="Manage Parties" src="images/button-party.png" /></a>
                	<a href="goods.php"><img title="Manage Goods" src="images/button-goods.png" /></a>
                    <img title="Reports" src="images/button-reports.png" style="z-index:+1;opacity:1.0"/>
                    
                    </div>
            		<div id="main-nav-cover"></div></div>
        
        			<div id="page-content">
        
        			<div id="page-nav">
                    <a href="add-new-party.php">Add New Party</a>  |  <a href="#">Menu Section</a>  |  <a href="#">Menu Section</a>  |  <a href="#">Menu Section</a>
            
            		</div>
            		<div class="page-section">
                    
                	<?php break;
					
					case 'goods-in': ?>
                    <img title="Goods In" src="images/button-in.png" style="z-index:+1;opacity:1.0"/>
            		<a href="goods-out.php"><img title="Goods Withdraw" src="images/button-out.png" /></a>
                	<a href="payments.php"><img title="Payments In or Out" src="images/button-money.png" /></a>
                	<a href="parties.php"><img title="Manage Parties" src="images/button-party.png" /></a>
                	<a href="goods.php"><img title="Manage Goods" src="images/button-goods.png" /></a>
                    <a href="reports.php"><img title="Reports" src="images/button-reports.png" /></a>
                    
                    </div>
            		<div id="main-nav-cover"></div></div>
        
        			<div id="page-content">
        
        			<div id="page-nav">
                    <a href="add-new-party.php">Add New Party</a>  |  <a href="#">Menu Section</a>  |  <a href="#">Menu Section</a>  |  <a href="#">Menu Section</a>
            
            		</div>
            		<div class="page-section">
                    
                	<?php break;
					
					case 'goods-out': ?>
                    <a href="goods-in.php"><img title="Goods In" src="images/button-in.png" /></a>
            		<img title="Goods Withdraw" src="images/button-out.png" style="z-index:+1;opacity:1.0"/>
                    <a href="payments.php"><img title="Payments In or Out" src="images/button-money.png" /></a>
                	<a href="parties.php"><img title="Manage Parties" src="images/button-party.png" /></a>
                	<a href="goods.php"><img title="Manage Goods" src="images/button-goods.png" /></a>
                    <a href="reports.php"><img title="Reports" src="images/button-reports.png" /></a>
                    
                    </div>
            		<div id="main-nav-cover"></div></div>
        
        			<div id="page-content">
        
        			<div id="page-nav">
                    <a href="add-new-party.php">Add New Party</a>  |  <a href="#">Menu Section</a>  |  <a href="#">Menu Section</a>  |  <a href="#">Menu Section</a>
            
            		</div>
            		<div class="page-section">
                    
                	<?php break;
					
					case 'payments': ?>
                    <a href="goods-in.php"><img title="Goods In" src="images/button-in.png" /></a>
                    <a href="goods-out.php"><img title="Goods Withdraw" src="images/button-out.png" /></a>
                    <img title="Payments In or Out" src="images/button-money.png" style="z-index:+1;opacity:1.0"/>
                	<a href="parties.php"><img title="Manage Parties" src="images/button-party.png" /></a>
                	<a href="goods.php"><img title="Manage Goods" src="images/button-goods.png" /></a>
                    <a href="reports.php"><img title="Reports" src="images/button-reports.png" /></a>
                    
                    </div>
            		<div id="main-nav-cover"></div></div>
        
        			<div id="page-content">
        
        			<div id="page-nav">
                    <a href="add-new-party.php">Add New Party</a>  |  <a href="#">Menu Section</a>  |  <a href="#">Menu Section</a>  |  <a href="#">Menu Section</a>
            
            		</div>
            		<div class="page-section">
                	<?php break;
					
					case 'parties': ?>
                    <a href="goods-in.php"><img title="Goods In" src="images/button-in.png" /></a>
                    <a href="goods-out.php"><img title="Goods Withdraw" src="images/button-out.png" /></a>
                	<a href="payments.php"><img title="Payments In or Out" src="images/button-money.png" /></a>
                    <img title="Manage Parties" src="images/button-party.png" style="z-index:+1;opacity:1.0"/>
                	<a href="goods.php"><img title="Manage Goods" src="images/button-goods.png" /></a>
                    <a href="reports.php"><img title="Reports" src="images/button-reports.png" /></a>
                    
                    </div>
            		<div id="main-nav-cover"></div></div>
        
        			<div id="page-content">
        
        			<div id="page-nav">
                    <a href="add-new-party.php">Add New Party</a>  |  <a href="#">Menu Section</a>  |  <a href="#">Menu Section</a>  |  <a href="#">Menu Section</a>
            
            		</div>
            		<div class="page-section">
                	
					<?php break;
					
					case 'goods': ?>
                    <a href="goods-in.php"><img title="Goods In" src="images/button-in.png" /></a>
                    <a href="goods-out.php"><img title="Goods Withdraw" src="images/button-out.png" /></a>
                	<a href="payments.php"><img title="Payments In or Out" src="images/button-money.png" /></a>
                	<a href="parties.php"><img title="Manage Parties" src="images/button-party.png" /></a>
                    <img title="Manage Goods" src="images/button-goods.png" style="z-index:+1;opacity:1.0"/>
                    <a href="reports.php"><img title="Reports" src="images/button-reports.png" /></a>
                    
                    </div>
            		<div id="main-nav-cover"></div></div>
        
        			<div id="page-content">
        
        			<div id="page-nav">
                    <a href="add-new-party.php">Add New Party</a>  |  <a href="#">Menu Section</a>  |  <a href="#">Menu Section</a>  |  <a href="#">Menu Section</a>
            
            		</div>
            		<div class="page-section">
                	<?php break;
				} ?>
					
                
            
            
<?php

//make_header() 
}

function make_footer()
{
	?>
    	<!-- page section -->
        </div>
    <!-- page-content -->
    </div>
    
    <!-- content-wrapper -->
    </div>


<!-- main-wrapper -->
</div>



</body>
</html>

<?php 

//make_footer()
}

function check_login()
{
	if($_SESSION['username'])
	{
	$result = connect("SELECT * FROM validsessions WHERE sessionid = ".$_SESSION['sessionid']);
	
	$row = mysql_fetch_assoc($result);
	
		if($row['username'] != $_SESSION['username']) 
		{
			echo "<script type='text/javascript'>location.href='login.php'</script>";
			exit();
		}
	}
	else 
	{
		echo "<script type='text/javascript'>location.href='login.php'</script>";
		exit();		
	}
	
}


function connect($query)
{
	$hostname= "localhost";
	$database= "warehouse";
	$username= "root";
	$password= "root";
	$connect = mysql_pconnect($hostname, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR);
	mysql_select_db($database, $connect);
	$getdata= mysql_query($query, $connect) or die(mysql_error());
	return($getdata);
}

//Function to sanitize values received from the form. Prevents SQL injection
function clean($str) {
    $str = @trim($str);
    if(get_magic_quotes_gpc()) {
        $str = stripslashes($str);
    }
    return $str;
}

function swap_id($table, $name, $id)
{
	$result_id = connect("SELECT ".$name." FROM ".$table." WHERE id = '".$id."' LIMIT 1");
	
	$row_id = mysql_fetch_assoc($result_id);
	
	return($row_id[$name]);
}


?>