<?php
 require_once 'vendor/connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>News</title>
	<link rel="stylesheet" type="text/css" href="style/css.css">
</head>
<body>
	<?php require('templates/header.php');?>
	<div class="news">
		<h1>Новости</h1>
		<form>
		   <?php
			   $find_news="SELECT * FROM news";
			   $result=mysqli_query($connect, $find_news);
			   if(!$result)die(mysqli_error($connect));
			   while($news=mysqli_fetch_assoc($result)){
				   ?>
				   <p>
				   <img src="<?=$news['avatar'];?>" style="width:250px">
				   <h2><?=$news['title'];?></h2>
				   <?=$news['body']?>
				   </p>
				   <?php
			   }
		    ?>
        </form>
		<div>
			<a href="create_news.php">Create News</a>	
		</div>
	</div>
	<?php require('templates/chat.php');?>
	<?php require('templates/footer.php');?>
</body>
</html>