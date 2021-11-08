<?php
echo "Hello, World!";
?>

<?php
$name = "GeekBrains user"  ;
echo "Hello, $name! <br>";
?>

<?php
define('MY_CONST', 100) ;
echo MY_CONST;
?>

<?php
$int10 = 42 ;
$int2 = 0b101010 ;
$int8 = 052 ;
$int16 = 0x2A ;
echo "Десятеричная система $int10 <br>";
echo "Двоичная система $int2 <br>";
echo "Восьмеричная система $int8 <br>";
echo "Шестнадцатеричная система $int16 <br>";
?>

<?php
$precise1 = 1.5 ;
$precise2 = 1.5e4 ;
$precise3 = 6E-8 ;
echo "$precise1 | $precise2 | $precise3 <br>";
?>

<?php
$a = 1 ;
echo "$a" ;
echo '$a';
?>

<?php
$a = 10;
$b = (boolean) $b;
?>

<?php
$a = 'Hello,';
$b = 'world';
$c = $a . $b;
echo $c ;
?>


<?php
$a = 4;
$b = 5;
echo $a + $b . '<br>';    // сложение
echo $a * $b . '<br>';    // умножение
echo $a - $b . '<br>';    // вычитание
echo $a / $b . '<br>';  // деление
echo $a % $b . '<br>'; // остаток от деления
echo $a ** $b . '<br>'; // возведение в степень
?>

<?php
$a = 4;
$b = 5;
$a += $b;
echo 'a = ' . $a ;
$a = 0;
echo $a++;     // Постинкремент
echo ++$a;    // Преинкремент
echo $a--;     // Постдекремент
echo --$a;    // Предекремент
?>

<?php
$a = 4;
$b = 5;
var_dump($a == $b);  // Сравнение по значению
var_dump($a === $b); // Сравнение по значению и типу
var_dump($a > $b);    // Больше
var_dump($a < $b);    // Меньше
var_dump($a <> $b);  // Не равно
var_dump($a != $b);   // Не равно
var_dump($a !== $b); // Не равно без приведения типов
var_dump($a <= $b);  // Меньше или равно
var_dump($a >= $b);  // Больше или равно?>

<br>
<br>


<?php
$a = 5;
$b = '05';
var_dump($a == $b); // Почему true? Потому что переменные имеют одинаковые значения, т.к строка '05' преобразуется в число 5
var_dump((int)'012345');// Почему 12345? потому что строка преобразуется в число
var_dump((float)123.0 === (int)123.0); // Почему false? разный тип float и int
var_dump((int)0 === (int)'hello, world'); // Почему true? потому что имеют один тип string
?>

<br>

1.  Почему true? Потому что переменные имеют одинаковые значения, т.к строка '05' преобразуется в число 5<br>
2. Почему 12345? потому что строка преобразуется в число<br>
 3. Почему false? разный тип float и int<br>
  4. Почему true? потому что имеют один тип string<br>

<?php
$h1='H1';
$title='Title';
$year=date('Y');
?>

<html>
<head>
	<title><?php echo $title;?></title>
</head>
<body>
<h1><?php echo $h1; ?>.</h1>
<span><?php echo $year;?></span>
</body>
</html>

<br><br>

<?php
$a = 1;
$b = 2;
$a += $b-1;
$b += $a-3;
var_dump($a);
var_dump($b);
?>


