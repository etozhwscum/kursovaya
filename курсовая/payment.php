<!DOCTYPE html>
<html>
<head>
	<title>Payment Info</title>
	<link rel="stylesheet" type="text/css" href="style/css.css">
</head>
<body>
	<?php require('templates/header.php');?>
	<div class="payment_info">
		<h1>Условия оплаты</h1><br>
		<p>Вы можете выбрать один из вариантов оплаты:</p>
		<h2>Оплата наличными</h2>
		<p>При выборе варианта оплаты наличными, вы дожидаетесь приезда курьера и передаёте ему сумму за товар в рублях. Курьер предоставляет<br> товар, который можно осмотреть на предмет повреждений, соответствие указанным условиям. Покупатель подписывает<br> товаросопроводительные документы, вносит денежные средства и получает чек.<br>

		Также оплата наличными доступна при самовывозе из магазина.</p><br>
		<h2>Безналичный расчет</h2>
		<p>При оформлении заказа в корзине вы можете выбрать вариант безналичной оплаты. Мы принимаем карты Visa и Master Card. Чтобы оплатить<br> покупку, вас перенаправит на сервер системы ASSIST, где вы должны ввести номер карты, срок действия, имя держателя.<br>

		Вам могут отказать от авторизации в случае:</p>
		<ul>
			<li>если ваш банк не поддерживает технологию 3D-Secure;</li>
			<li>на карте недостаточно средств для покупки;</li>
			<li>банк не поддерживает услугу платежей в интернете;</li>
			<li>истекло время ожидания ввода данных;</li>
			<li>в данных была допущена ошибка.</li>
		</ul>
		<p>В этом случае вы можете повторить авторизацию через 20 минут, воспользоваться другой картой или обратиться в свой банк для решения<br> вопроса.</p>
		<p>Безналичным расчётом можно воспользоваться при курьерской доставке или самовывоза из магазина.</p>
	</div>
	<br>
	<?php require('templates/chat.php');?>
	<?php require('templates/footer.php');?>
</body>
</html>