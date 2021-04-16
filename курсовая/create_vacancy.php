<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Create Vacancy</title>
	<link rel="stylesheet" type="text/css" href="style/css.css">
</head>
<body>
	<?php require('templates/header.php');?>
    <div class="vacancyFormCreate">
        <h1>Create Vacancy</h1>
        <form action="vendor/add_vacancy.php" method="post">
            <p><input name="title" type="text" placeholder="Заголовок" required></p>
            <p><textarea name="body" rows="10" cols="45" placeholder="Вакансия" required></textarea></p>
            <button type="submit">Create</button>
        </form>
        <br>
        <a href="vacancy.php">Back</a>
    </div>
    <br><br>
	<?php require('templates/footer.php');?>
</body>
</html>