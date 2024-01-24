<html>
<body>
<form action="script12.php" method="get">
enter value:<input type="text" name="str1" /><br>
enter value:<input type="text" name="str2" /><br>
<input type="submit">
</form>
</body>
</html>
<?php
$s1=$_REQUEST['str1'];
$s2=$_REQUEST['str2'];
echo "$s1 "."$s2";
?>