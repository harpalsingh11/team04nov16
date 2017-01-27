<?php
  session_start();
  if(isset($_SESSION['valid_user']))
  {
  	$old_user = $_SESSION['valid_user'];  // store  to test if user *was* logged in
  	unset($_SESSION['valid_user']);		// free session var valid_user 
  }
  else
  	$old_user = "";

  if (!empty($old_user))	//user logged in
  {
    if (isset($_SESSION['valid_user']))	//if valid_user still exist
	// user was logged in and could not be logged out
    {
	  echo "<html>";
	  echo "<body>";
	  echo "<h1>Log out</h1>";
      echo "Could not log you out.<br>";
    } 
	else //valid_user not exist
	{
	  echo "<html>";
	  echo "<body>";
	  echo "<h1>Log out</h1>";
      echo "$old_user, you logged out.<br>";
	}
  }
  else //not logged in
  {
	  echo "<html>";
	  echo "<body>";
	  echo "<h1>Log out</h1>";
    // if user was not logged in but came to this page somehow
    echo "You were not logged in, and so have not been logged out.<br>"; 
  }
  echo '<br><br><a href="login.html" class="button">Back to login page</a>';
  echo '<a href="index.php" class="button">Back to home page</a>';
  echo '</body>';
  echo '</html>';
?> 

<html>
<head>
<link rel="stylesheet" href="mystyle.css" />
</head>
</html>