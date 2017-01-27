<?php
//must appear BEFORE the <html> tag
session_start();
include_once('config.php');	
$conn  = db_connect();	
	  $user_email = $_SESSION['valid_user'];
	  //make a query to check if user login successfully
	  $sql = "select * from articles where user_email = '$user_email'";
	  if ($result = $conn->query($sql)){



?>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Blog Posts</title>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
</script>
<![endif]-->
<link rel="stylesheet" href="mystyle.css"/>
</head>
<body>
<header>
<h1 style="float:left">BlogAll-The Public Blog</h1>
<div align="right" style="float:right">
<form id="searchform" method="post" action="search.php" style="background:none !important;padding:30px !important">
	<input type="text" placeholder="Search Text" name="searchtext"/> <input type="submit" value="Search" name="submit">
</form>
</div>
</header>

<nav>
<ul class="leftnav">
  <li ><a href="index.html">Home </a></li>
  <li><a href="about.html">About </a></li>
  <li><a href="blog.php">Blog </a></li>
</ul>
<ul class="rightnav">
<?php 
if (isset($_SESSION['valid_user']))
  {
 ?>
<li><a href="newarticle.php" class="button">Add Article</a></li>
<li><a href="myarticles.php" class="button">My Articles</a></li>
<li><a href="logout.php" class="button">Logout</a></li>
<?php
}
else{
?>
  <li><a href="login.html" class="button">Login </a></li>
  <li><a href="registration.html" class="button">Register</a></li>
  <?php 
}
?>
</ul>
</nav>

<section>
	<div class="container">
		<?php 

		while ($article = $result->fetch_assoc()) {

?>

		<article>
		<img class="article-thumb" src="<?php echo $article['img_url']?>"/>
		<h2><?php echo $article['title']?></h2>
		<p>  <?php echo substr($article['content'],0,200) ?></p>
		<a href="article.php?article_id=<?php echo $article['id']?>">Read more..</a>
		</article>
<?php	
}
$conn->close();
}
?>

	</div>
</section>

<footer>
<p>&copy; 2016 BlogAll Media LLC. All rights reserved.</p>
</footer>
<?php
if(isset($_GET['success']))
{
?>
<script>
alert('Article uploaded successfully');
</script>
<?php 
}
?>
</body>
</html>
