<html>
<head>
<title>
test xss
</title>
</head>


<body>

<?php
setcookie("session","geheim",0); 
header("X-XSS-Protection: 0");
?>

GET=xss<br>
POST=xssp<br>
COOKIE=<?php echo $_COOKIE["session"]; ?><br>

<?php echo $_GET["xss"]; ?>
<?php echo $_POST["xssp"]; ?>


</body>
</html>
