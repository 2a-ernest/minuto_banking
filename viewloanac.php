<?php
session_start();
error_reporting(0);
include("dbconnection.php");

if(!(isset($_SESSION['customerid'])))
    header('Location:login.php?error=nologin');

$result = mysql_query("select * from customers WHERE customerid='$_SESSION[customerid]'");
$loan=mysql_query("select * from loan where customerid='$_SESSION[customerid]'");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MinutoFinance</title>
<link href="css/LoginPageStyle.css" rel="stylesheet" type="text/css" />
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" /><link href="images/favicon.ico" rel="shortcut icon">
</head>
<body>
    
    <div><img src="images/batman1.png" id="batimg1"><img src="images/batman1.png" id="batimg2"></div>
    <div id="bodycontent">

<div id="templatemo_wrapper">

    
<div id="toptabmenu">
    <ul>
            <li><a href="accountalerts.php">My accounts</a></li>
            <li><a href="transferfunds.php">Transfer funds</a></li>
            <li><a href="payloans.php">Pay loans</a></li>
            <li><a href="mailinbox.php">Mails</a></li>
            <li><a href="changetranspass.php">Personalise</a></li>
            <li><a href="logout.php">logout</a></li>
    </ul>
    
</div>
</div>

<div id="templatemo_main">
    <div id="sidecon">
       <h2>Loan Accounts</h2>

        	<form id="form1" name="form1" method="post" action="">

        	  <table width="575" border="1">
                <tr>
                  <td width="35" height="42"><strong>Loan No.</strong></td>
                  <td width="57"><strong>Loan Type</strong></td>
                  <td width="58"><strong>Account Holder</strong></td>
                  <td width="58"><strong>Loan amount</strong></td>
                  <td width="61"><strong>Interest</strong></td>
                  <td width="41"><strong>Created at</strong></td>
                </tr>					
                 <?php
				  $i=1;
			  while($arrvar = mysql_fetch_array($loan))
                          {
        	           echo " <tr>
                                <td height='30'>$arrvar[loanid] </td>
                                <td>$arrvar[loantype]</td>
				<td>$_SESSION[customername]</td>
				<td>$arrvar[loanamt]</td>
                                <td>$arrvar[interest] %</td>
				<td>$arrvar[startdate]</td>

      	      </tr>";
				$i++;
			  }
			  ?>
              </table>
          
       	  </form>
    </div>
    
    <div id="sidebar">
         <h2>Pay Loans</h2>
                
                <ul>
                <li><a href="viewloanac.php">View Loan Account</a></li>
                <li><a href="makeloanpayment.php">Pay loan</a></li>
                <li><a href="loanpayment.php">View Loan Payments</a></li>
                </ul>
    </div>
</div>


<?php include'footer.php' ?>
    </div>
</body>
</html>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>