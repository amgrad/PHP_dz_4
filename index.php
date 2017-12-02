<?php

$site = 'http://samples.openweathermap.org/data/2.5/weather?id=2172797&appid=08039f9a3dd9552580539298f56db4fa';
$result = file_get_contents($site);

$data = json_decode($result, true);
//echo '<pre>';
//print_r($data);
?>

<!DOCTYPE HTML>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<title>Задание 1.4. Стандартные функции</title>
	</head>
	<body>
		
		<h1>Погода</h1>
		<table>
			<tr>
				<td>Город</td>
				<td><?php echo $data['name'] ?></td>
			</tr>
			<tr>
				<td>Температура</td>
				<td><?php echo $data['main']['temp'] ?> К</td>
			</tr>
			<tr>
				<td>Облачность</td>
				<td><?php echo $data['clouds']['all'] ?> %</td>
			</tr>
			<tr>
				<td>Давление</td>
				<td><?php echo $data['main']['pressure'] ?> гПа</td>
			</tr>
			<tr>
				<td>Влажность</td>
				<td><?php echo $data['main']['humidity'] ?> %</td>
			</tr>
			<tr>
				<td>Температура минимальная</td>
				<td><?php echo $data['main']['temp_min'] ?> К</td>
			</tr>
			<tr>
				<td>Температура максимальная</td>
				<td><?php echo $data['main']['temp_max'] ?> К</td>
			</tr>
			<tr>
				<td>Видимость</td>
				<td><?php echo $data['visibility']?> м</td>
			</tr>
			<tr>
				<td>Ветер</td>
				<td><?php echo $data['wind']['speed'] ?> м/с</td>
			</tr>
		</table>
		
	</body>
</html>