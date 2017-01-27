<?php
//must appear BEFORE the <html> tag
session_start();
// store session data
$_SESSION['views']=1;
?>

<html>
<body>

<?php
//retrieve session data
echo "Pageviews=". $_SESSION['views'];
?>

<p><a href="session2.php">Next Page</a></p>
</body>
</html>

