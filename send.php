<?php
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	
	//Фильтры PHP от хака пользователей - тегов HTML
	$name = htmlspecialchars($name);		
	$phone = htmlspecialchars($phone);
	
	//Фильтры PHP от хака пользователей - сылок URL
	$name = urldecode($name);
	$phone = urldecode($phone);
	
	//Удаление лишних пробелов в начале и в конце строки. 
	$name = trim($name);
	$phone = trim($phone);
	
	// Отладка
	//echo $name;
	//echo "<br>";
	//echo $phone;
	//
	if (mail("illusive.man.1991@mail.ru","Заявка с сайта", "Имя".$name." Телефон: ".$phone ,"From: ageev.maks2014@yandex.ru /r/n"))
	{
		echo "Сообщение успешно отправленно";
	} else
	{
		echo "Прио отправки сообщения возникла ошибка";
	}
?>