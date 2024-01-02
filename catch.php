<?php
$fname=$_GET['f_name'];
$lname=$_GET['l_name'];
$class=$_GET['class'];
$div=$_GET['div'];
$city=$_GET['city'];
$address=$_GET['adrs'];
$mobileno=$_GET['mno'];
$pincode=$_GET['pcode'];
$state=$_GET['state'];
$country=$_GET['country'];
$submit=$_GET['sub'];
echo"<table border=1 bgcolor#F08080	 align=center>
<tr> <center>REGISTRATION FORM </center> </tr>
<tr> <td>FIRST NAME:</td> <td>$fname</td> </tr> 
<tr> <td>LAST NAME:</td> <td>$lname</td> </tr>
<tr> <td>CLASS:</td> <td>$class</td> </tr>
<tr> <td>DIVISION:</td> <td>$div</td> </tr>
<tr> <td>CITY:</td> <td>$city</td> </tr>
<tr> <td>ADDRESS:</td> <td>$address</td> </tr>
<tr> <td>MOBILE NO:</td> <td>$mobileno</td> </tr>
<tr> <td>PIN:</td> <td>$pincode</td> </tr>
<tr> <td>STATE:</td> <td>$state</td> </tr>
<tr> <td>COUNTRY:</td> <td>$country</td> </tr></table>";
?>