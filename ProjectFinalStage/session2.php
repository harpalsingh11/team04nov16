<?php
//must appear BEFORE the <html> tag
session_start();
?>
<html>
<head>
<title>Untitled Document</title>
</head>
<body>
<?php
if(isset($_SESSION['views']))
  $_SESSION['views']=$_SESSION['views']+1;

else
  $_SESSION['views']=1;
echo "Views=". $_SESSION['views']; 
?>
</body>
</html>

