<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		input{
			display:block;
			padding:5px 10px;
			margin:5px;
		}
		input[type="radio"]{
			display:inline-block;
		}
		p{
			background:gray;
		}
	</style>
</head>
<body>
<form action="" method="post">
	<input type="number" name="num01">
	<input type="number" name="num02">
        <span>+</span><input type="radio" name="radio" value="+">
        <span>-</span><input type="radio" name="radio" value="-">
        <span>*</span><input type="radio" name="radio" value="*">
        <span>/</span><input type="radio" name="raido" value="/">
	<input type="submit" value="Hesabla">
	
</form>
</body>
</html>

<?php 
    $num1 = @$_POST['num01'];
    $num2 = @$_POST['num02'];
    
    $operator = $_POST['radio'];
               
    switch ($operator){
        case "+": echo $num1 + $num2;break;
        case "-": echo $num1 - $num2;break;
        case "/": echo $num1 / $num2;break;
        case "*": echo $num1 * $num2;break;
        default: echo "her hansi birin sec!!!";break;
    }
?>