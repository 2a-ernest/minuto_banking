<?php
session_start();
error_reporting(0);
include("dbconnection.php");

if(!($_SESSION["adminid"]))
{
		header("Location: emplogin.php");
}
$brancharray = mysql_query("select * from branch");
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

    


<!-- <div  id="toptabmenu">
    <ul>
            <li><a href="admindashboard.php">Dashboard</a></li>
            <li><a href="viewbranch.php">Settings</a></li>
            <li><a href="viewcustomer.php">customers</a></li>
            <li><a href="viewtransaction.php">Transactions</a></li>
            <li><a href="mailinbox.php">Mail</a></li>
            <li><a href="logout.php">logout</a></li>
        </ul>
    
</div> --> 

<?php require_once('nav-loggedin.php') ?>

</div>

<div id="templatemo_main">
    <div id="sidecon">
        <table width="883" border="1" id="brtable">
    <tr>
      <th width="113" scope="col"><a href="viewbranch.php">BRANCH</a></th>
      <th width="133" scope="col"><a href="addaccountmaster.php">ACCOUNT TYPES</a></th>
      <th width="87" scope="col"><a href="viewemp.php">EMPLOYEES</a></th>
      <th width="162" scope="col"><a href="viewloantype.php">LOAN TYPE</a></th>
    </tr>
  </table>
  <br /><br />
  <table width="883" border="1" id="brtable">
    <tr>
      <th colspan="6" scope="col"><a href="addbranch.php">ADD BRANCH</a></th>
    </tr>
    <tr>
      <th width="113" scope="col">IFSC CODE</th>
      <th width="133" scope="col">BRANCH CODE</th>
      <th width="87" scope="col">CITY</th>
      <th width="162" scope="col">BRANCH ADDRESS</th>
      <th width="114" scope="col">STATE</th>
      <th width="160" scope="col">COUNTRY</th>
    </tr>
      <?php	
 while($branch = mysql_fetch_array($brancharray))
	  {
echo " <tr>
      <td>&nbsp;$branch[ifsccode]</td>
      <td>&nbsp;$branch[branchname]</td>
      <td>&nbsp;$branch[city]</td>
      <td>&nbsp;$branch[branchaddress]</td>
      <td>&nbsp;$branch[state]</td>
      <td>&nbsp;$branch[country]</td>
    </tr>";
	  }
	  ?>
  </table>
    </div>
    
</div>


<?php include'footer.php' ?>
    </div>
</body>
</html>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>