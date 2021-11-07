<?php
$a = 5;
$b = 3;
if ($a>0&$b>0) {
	 echo '$a-$b'.'<br>';
	}
if ($a<0&$b<0) {
	echo '$a*$b'.'<br>';
}else if ($a<0&$b>0) {
	echo '$a+$b'.'<br>';
}
?>

<br> <br>

<?php
$a =15;
switch ($a) {
	case 0:
		echo 'a=0'.'<br>';
		break;
	case 1:
		echo 'a=1'.'<br>';
		break;
	case 2:
		echo 'a=2'.'<br>';
		break;
	case 3:
		echo 'a=3'.'<br>';
		break;
	case 4:
		echo 'a=4'.'<br>';
		break;
	case 5:
		echo 'a=5'.'<br>';
		break;
	case 6:
		echo 'a=6'.'<br>';
		break;
	case 7:
		echo 'a=7'.'<br>';
		break;
	case 8:
		echo 'a=8'.'<br>';
		break;
	case 9:
		echo 'a=9'.'<br>';
		break;
	case 10:
		echo 'a=10'.'<br>';
		break;
	case 11:
		echo 'a=11'.'<br>';
		break;
	case 12:
		echo 'a=12'.'<br>';
		break;
	case 13:
		echo 'a=13'.'<br>';
		break;
	case 14:
		echo 'a=14'.'<br>';
		break;
	case 15:
		echo 'a=15'.'<br>';
		break;
	default:
		echo 'default';
		break;
}
?>

<br> <br>

<?php
$a = 6;
$b = 3;
function sum($a,$b)
{

return $a + $b;
}

echo Sum($a,$b).'<br>';
function Minus($a,$b)
{

return $a - $b;
}

echo Minus($a,$b).'<br>';

function divaip($a,$b)
{

return $a * $b;
}

echo divaip($a,$b).'<br>';

function multipul($a,$b)
{

return $a / $b;
}

echo multipul($a,$b).'<br>';
?>

<br> <br>

<?php
$arg1 = 5;
$arg2 = 3;
$operation= 'sum';
function mathOperation($arg1, $arg2, $operation)
{
switch ($operation) {
	case "sum":
		return $arg1 + $arg2;
		break;
	case "minus":
		return $arg1 - $arg2;
		break;
	case "divaip":
		return $a * $b;
		break;
	case "multipul":
		return $a / $b;
		break;
		default:
		echo "Введена неккоректная информация";
	}
}
echo mathOperation($arg1,$arg2,$operation).'<br>';
?>

<br> <br>

<?php
$val=5;
$pow=5;
function power($val, $pow)
{
	if ($pow===0) {
		return 1;
	}
	return $val*power($val, $pow - 1);
}
echo power($val, $pow);
?>



