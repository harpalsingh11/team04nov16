<?php
session_start();
include_once('config.php');
if(isset($_POST["submit"])){
if(isset($_POST['title'], $_POST['content'], $_FILES["fileToUpload"])) {
	$title = $_POST['title'];
	$content = $_POST['content'];
	$tags = $_POST['tags'];
	$img_url =$_FILES["fileToUpload"]["name"];
	$email = $_SESSION['valid_user'];
	move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $img_url);
	
	$conn  = db_connect();
	//create an insert query 	
	$sql = "insert into articles (title, content, tags, user_email,img_url) 
			VALUES ('$title', '$content', '$tags', '$email', '$img_url')";
	//execute the query
	if($conn -> query($sql))
	{
		 header("location: myarticles.php?success=1"); 
	}
	$conn -> close();
}
else {
	echo '<span style="color:red">Error saving article</span>';
}
}
?>
<!DOCTYPE html>
<html>
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
  <li ><a href="index.php">Home </a></li>
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
	<div class="container" >
			<form action="newarticle.php" method="post" enctype="multipart/form-data" style="text-align:left !important">
				<label>Title</label>
				<input type="text" name="title" placeholder="Title" /><br><br>
				
				<label>Content</label>
				<textarea name="content" placeholder="Content" rows=4 cols=50></textarea><br><br>

				<label>Tags</label>
				<input type="text" name="tags" placeholder="Tags(Separate multiple tags by comma(,))" style="width:400px;"/><br><br>
				
    			<label>Select image to upload(Images only - Max file size 500KB)</label><br>
			    <input type="file" name="fileToUpload" id="fileToUpload" size="50000" accept="image/*"><br><br>
    			<input type="submit" value="Save Article" name="submit">
</form>
	</div>
</section>

<footer>
<p>&copy; 2016 BlogAll Media LLC. All rights reserved.</p>
</footer>

</body>
</html>

