<?php

include('functions.php');

check_login();

make_header('parties');

?>

            <table>
            <tr><td><a href="?order=partyname">NAME</a></td><td><a href="?order=phone">PHONE</a></td><td><a href="?order=due">DUE</a></td><td><a href="?order=nextpayment">NEXT DUE</a></td></tr>
            <?php
			
			//SEE IF SOME ORDERING IS NEEDED			
			if($_GET['order']) $result = connect("SELECT * FROM party ORDER BY  `".$_GET['order']."` ASC ");
			else $result = connect("SELECT * FROM party ORDER BY  `nextpayment` ASC ");
			
			$row = mysql_fetch_assoc($result);
			
			do {
				
				echo "<tr><td><a target='_blank' href='party-view.php?id=".$row['id']."'>".$row['partyname']."</a></td><td>".$row['phone']."</td><td>".$row['due']."</td><td>".$row['nextpayment']."</td></tr>";
            	}while($row = mysql_fetch_assoc($result));
			?>
			</table>
			
      
<?php


make_footer();

?>