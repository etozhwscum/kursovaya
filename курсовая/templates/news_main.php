<?php
 require_once 'vendor/connect.php';
?>
<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="style/css.css">
</head>
<body>
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
				   <img src="<?=$news['avatar'];?>" style="width:150px; height: 190px;" >
				   <h2><?=$news['title'];?></h2>
				   <?=$news['body']?>
				   </p>
				   <?php
			   }
		    ?>
        </form>
	</div>
</body>
</html>