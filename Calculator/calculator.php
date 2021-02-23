<?php 

	$result = '';
	$operation = '';
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		if(isset($_POST['calculate'])){
			if (!empty($_POST['num1']) and !empty($_POST['num2'])){
				$operation = $_POST['operation'];
				$num1 = $_POST['num1'];
				$num2 = $_POST['num2'];
				if ($_POST['operation'] == '+'){
					$result = $num1 + $num2;
				} elseif ($_POST['operation'] == '-'){
					$result = $num1 - $num2;
				} elseif ($_POST['operation'] == '*'){
					$result = $num1 * $num2;
				} elseif ($_POST['operation'] == '/'){
					$result = $num1/$num2;
				}
		}

		}
		
	}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<h1>Calculator</h1>
	<hr>
	<fieldset>
	
	<form method="post" process="<?php echo $_SERVER['PHP_SELF'] ?>">
		<br>
		<br>
		<input type="number" name="num1"  value='<?php echo $num1 ?>'>
		<select name='operation'>
			<option value="+" <?php if ($operation == '+') echo 'selected' ?> >+</option>
			<option  value="-" <?php if ($operation == '-') echo 'selected' ?> >-</option>
			<option  value="*" <?php if ($operation== '*') echo 'selected' ?> >*</option>
			<option  value="/" <?php if ($operation == '/') echo 'selected' ?> >/</option>
		</select>
		<input type="number" name="num2" value='<?php echo $num2 ?>'>
		<input type="submit" name="calculate" value="Calculate">
		<h3>Answer: <?php echo $result ?></h3>
		</fieldset>
		
	</form>

	

</body>
</html>