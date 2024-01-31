<html>
<body>
<form>
Enter number1:<input type="text" name="num1" />
<br>
Enter number2:<input type="text" name="num2" />
<br>
<input type="submit" />
<br>
</form>
</body>
</html>

<?php
error_reporting(0);
$myval1=$_REQUEST['num1'];
$myval2=$_REQUEST['num2'];

function add($myval1,$myval2)
{
	return $myval1+$myval2;
}
function sub($myval1,$myval2)
{
	return $myval1-$myval2;
}
function mul($myval1,$myval2)
{
	return $myval1*$myval2;
}
$sum=add($myval1,$myval2);
echo "Addition is:  " .$sum;
echo "<br>";

$subtraction=sub($myval1,$myval2);
echo "Subtraction is: " .$subtraction;
echo"<br>";

$multiplication=mul($myval1,$myval2);
echo "Multiplication is: " .$multiplication;
echo"<br>";
?>