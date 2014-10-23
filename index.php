<html>
	<head>
		<title>Расчет доставки</title>
	</head>
	<body>
		<h3 align="center">Расчет доставки</h3>
		
		<form action = "handler.php" method = "POST">
			<table align="center">
				<tr> 
					<td colspan="3"><b>Введите размеры в см:</b></td>
				</tr>
				
				<tr>
					<td>Высота <input type="text" name="v" size="5"></td>
					<td>Ширина <input type="text" name="s" size="5"></td>
					<td>Длина <input type="text" name="d" size="5"></td>
				</tr>
					<td colspan="3"><b>Введите вес в кг:</b> <input type="text" name="m" size="5"></td>
				<tr> 
					
				</tr>
					<td colspan="3"><b>Отправляете с города</b> <input type="text" name="s_gorod" size="15"> <b>в город</b> <input type="text" name="v_gorod" size="15"></td>
				<tr> 
				
				</tr> 
				<tr>
					<td colspan="3" align="center">
						<input type = "submit" name="submit_k" value = "Рассчитать">
						
					</td>  
				</tr>
			</table>						
		</form>
		
		<br/ >
		
		<h3 align="center">Добавить транспортную компанию</h3>		
		<form action = "register.php" method = "POST">
			<table align="center">
				<tr> 
					<td><b>Введите название компании:</b></td>
				</tr>
				
				<tr>
					<td><input type="text" name="name" size="20"></td>
				</tr>
				
				<tr> 
					<td>
						<input type = "submit" name="submit_t" value = "Добавить">
					</td>  
				</tr>  
			</table>						
		</form>		
		
	
	</body>
</html>
