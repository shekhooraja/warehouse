<?php

include('functions.php');

check_login();

make_header('parties');

if($_GET['id'])
{
	$result = connect("SELECT * FROM party WHERE id ='".$_GET['id']."' LIMIT 1");
						
	$row = mysql_fetch_assoc($result);

	echo "<table><tr><td>".$row['partyname']."</td><td>".$row['phone']."</td><td>".$row['due']."</td><td>".$row['nextpayment']."</td></tr></table>";
	
	$result = connect("SELECT * FROM contracts WHERE party_id = ".$_GET['id']);
	
	if($row = mysql_fetch_assoc($result))
	{
		echo "<h3>Relevant Contracts</h2><table>";
		echo "<tr><td>DATE</td><td>TYPE</td><td>NEXT PAYMENT</td><td>AMOUNT</td><td>GOODS</td><td>VALID TILL</td><td>BAGS</td><td>LOAN</td><td>DUE</td></tr>";
	
		do{
			echo "<tr><td><a href='show-contract?id=".$row['id']."' target='_blank'>".$row['contract_date']."</a></td><td>".$row['payment_type']."</td><td>".$row['next_payment']."</td><td>".$row['payment_amount']."</td><td>".swap_id('goods', 'good_name', $row['goods_id'])."</td><td>".$row['valid_till']."</td><td>".$row['bags']."</td><td>".$row['loan']."</td><td>".$row['due']."</td></tr>";
		}while($row = mysql_fetch_assoc($result));
	
		echo "</table>";
	}
	else echo "<h3>No Attached Contracts</h3>";
	
	
		
	$result = connect("SELECT * FROM cash WHERE party_id = ".$_GET['id']." AND type = 'in'");
	
	if($row = mysql_fetch_assoc($result))
	{
		echo "<h3>Payments Received</h2><table>";
		echo "<tr><td>DATE</td><td>USER</td><td>CONTRACT</td><td>LOAN</td><td>AMOUNT</td></tr>";
	
		do{
			echo "<tr><td>".$row['payment_date']."</td><td>".swap_id('users', 'username', $row['user_id'])."</td><td>".$row['contract_id']."</td><td>".$row['loan_id']."</td><td>".$row['amount']."</td></tr>";
		}while($row = mysql_fetch_assoc($result));
	
		echo "</table>";
	}
	else echo "<h3>No Recieved Payments</h3>";
	
	
	
	$result = connect("SELECT * FROM cash WHERE party_id = ".$_GET['id']." AND type = 'out'");
	
	if($row = mysql_fetch_assoc($result))
	{
		echo "<h3>Payments Given</h2><table>";
		echo "<tr><td>DATE</td><td>USER</td><td>CONTRACT</td><td>WITHDRAWAL</td><td>LOAN</td><td>AMOUNT</td></tr>";
	
		do{
			echo "<tr><td>".$row['payment_date']."</td><td>".swap_id('users', 'username', $row['user_id'])."</td><td>".$row['contract_id']."</td><td>".$row['withdrawal_id']."</td><td>".$row['loan_id']."</td><td>".$row['amount']."</td></tr>";
		}while($row = mysql_fetch_assoc($result));
	
		echo "</table>";
	}
	else echo "<h3>No Given Payments</h3>";
	
	
	
	$result = connect("SELECT * FROM loans WHERE party_id = ".$_GET['id']);
	
	if($row = mysql_fetch_assoc($result))
	{
		echo "<h3>Loans Given</h2><table>";
		echo "<tr><td>DATE</td><td>AMOUNT</td><td>TYPE</td><td>RATE</td><td>INSTALLMENT</td><td>DUE</td><td>NEXT PAYMENT</td></tr>";
	
		do{
			echo "<tr><td>".$row['loan_date']."</td><td>".$row['amount']."</td><td>".$row['payment_type']."</td><td>".$row['rate']."</td><td>".$row['installment']."</td><td>".$row['due']."</td><td>".$row['next_payment']."</td></tr>";
		}while($row = mysql_fetch_assoc($result));
	
		echo "</table>";
	}
	else echo "<h3>No Given Loans</h3>";
	
	
	
	$result = connect("SELECT * FROM withdrawals WHERE party_id = ".$_GET['id']);
	
	if($row = mysql_fetch_assoc($result))
	{
		echo "<h3>Withdrawals Done</h2><table>";
		echo "<tr><td>DATE</td><td>CONTRACT</td><td>RECEIPT</td><td>BAGS</td><td>WEIGHT</td><td>REASON</td></tr>";
	
		do{
			echo "<tr><td>".$row['withdrawal_date']."</td><td>".$row['contract_id']."</td><td>".$row['receipt_id']."</td><td>".$row['bags']."</td><td>".$row['goods_weight']."</td><td>".$row['reason']."</td></tr>";
		}while($row = mysql_fetch_assoc($result));
	
		echo "</table>";
	}
	else echo "<h3>No Withdrawals Done</h3>";
}
make_footer();

?>