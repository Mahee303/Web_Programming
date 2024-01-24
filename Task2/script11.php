<html>
<body>
<form action="script11.php" method="get">
enter a number:<input type="text" name="num" /><br>
<input type="submit">
</form>
</body>
</html>

<?php
$n1=$_REQUEST['num'];
if ($n1%2==0)
	echo "number is even";
else
	echo "number is odd";
?>