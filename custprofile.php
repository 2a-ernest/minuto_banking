<?php
session_start();
error_reporting(0);
include("dbconnection.php");

if(!(isset($_SESSION['customerid'])))
    header('Location:login.php?error=nologin');

$result = mysql_query("select * from customers WHERE customerid='$_SESSION[customerid]'");
$rowrec = mysql_fetch_array($result);
?>
<html>
<head>
<link href="images/favicon.ico" rel="shortcut icon">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MinutoFinance</title>
<link href="css/LoginPageStyle.css" rel="stylesheet" type="text/css" />
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" /></head>
<body>
    
    <div><img src="images/batman1.png" id="batimg1"><img src="images/batman1.png" id="batimg2"></div>
    <div id="bodycontent">

<div id="templatemo_wrapper">

    
<div  id="toptabmenu">
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
        
        	<h2>Customer profile</h2>


        	<form id="form1" name="form1" method="post" action="">
        	  <table width="523" border="1">
        	    <tr>
        	      <th width="199" scope="row">Customer ID</th>
        	      <td width="308">&nbsp;<?php echo $rowrec[customerid]; ?></td>
      	      </tr>
        	    <tr>
        	      <th scope="row">IFSC Code</th>
        	      <td>&nbsp;<?php echo $rowrec[ifsccode]; ?></td>
      	      </tr>
        	    <tr>
        	      <th scope="row">First name</th>
        	      <td>&nbsp;<?php echo $rowrec[firstname]; ?></td>
      	      </tr>
        	    <tr>
        	      <th scope="row">Last name</th>
        	      <td>&nbsp;<?php echo $rowrec[lastname]; ?></td>
      	      </tr>
        	    <tr>
        	      <th scope="row">Login ID</th>
        	      <td>&nbsp;<?php echo $rowrec[loginid]; ?></td>
      	      </tr>
        	    <tr>
        	      <th scope="row">Account status</th>
        	      <td>&nbsp;<?php echo $rowrec[accstatus]; ?></td>
      	 </tr>
          	    <tr>
        	      <th scope="row">City</th>
        	      <td>&nbsp;<?php echo $rowrec[city]; ?></td>
      	      </tr>
        	    <tr>
        	      <th scope="row">State</th>
        	      <td>&nbsp;<?php echo $rowrec[state]; ?></td>
      	      </tr>
        	    <tr>
        	      <th scope="row">Country</th>
        	      <td>&nbsp;<?php echo $rowrec[country]; ?></td>
      	      </tr>
        	    
        	    <tr>
        	      <th scope="row">Account Open Date</th>
        	      <td>&nbsp;<?php echo $rowrec[accopendate]; ?></td>
      	      </tr>
        	    <tr>
        	      <th scope="row">Last Login</th>
        	      <td>&nbsp;<?php echo $rowrec[lastlogin]; ?></td>
      	      </tr>
      	    </table>
        	
   	      </form>
    </div>
    
    <div id="sidebar">
        <h2>Personalise</h2>
                
                <ul>
                <li><a href="changelogpass.php">Change Login Password</a></li>
                <li><a href="changetranspass.php">Change Transaction Password</a></li>
                <li><a href="custprofile.php">Customer Profile</a></li>
                </ul>
    </div>
</div>


<?php include'footer.php' ?>
    </div>
</body>
</html>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>