<?php
//must appear BEFORE the <html> tag
session_start();
include_once('config.php');	
$conn  = db_connect();	
	  
	  //make a query to check if user login successfully
	  $sql = "select * from articles where id=".$_GET['article_id'];
	  if ($result = $conn->query($sql)){
		while ($article = $result->fetch_assoc()) {


?>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Do Nots</title>

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
  <li><a href="blog.html">Blog </a></li>
  <li><a href="#">Contact Us </a></li>
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
	<article>
		<h1><?php echo $article['title'] ?></h1>
			<div align="center">
				<img class="article-main" src="<?php echo $article['img_url']?>"/>
			</div>

	      <?php echo $article['content'] ?>
	      
	    
	</article>
	<?php }}?>
	<br>
	<div align="center">
	<a href="blog.php" class="button" >Back to Blog</a>
</div><br><br>
	</div>

</section>

<footer>
<p>&copy; 2016 BlogAll Media LLC. All rights reserved.</p>
</footer>
</body>
</html>
