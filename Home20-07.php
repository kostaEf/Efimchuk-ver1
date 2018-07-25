<?php
//Задача 1:
// Создайте переменную $name и присвойте ей строковое значение содержащее ваше имя
// Создайте переменную $age и присвойте ей числовое значение
// Выведите: Меня зовут: "ваше имя"
// Выведите: Мой "ваш возраст" лет
// P.S. Каждая фраза должна начинаться с новой строки

$name = 'Константин';
$age = 32;
echo "Меня зовут: $name" . '</br>';
echo "Мой возраст: $age года" . '</br>';



// Задача 2:
// Создайте константу и присвойте ей значение
// Проверьте существует ли константа.
//Выведите значение константы
// Попытайтесь изменить ее значение.

define("MY_CONST", "12345");

echo 'Выводим константу:' . MY_CONST .'</br>';
const MY_CONST = 54321;

//Задача 3:
// Создайте переменную $age и присвойте ей значение
//- Напишите конструкцию if, которая выводит фразу:
// "Вам еще работать и работать" при условии что $age попадает в диапазон чисел от 18 до 59 (включительно)
//- Расширьте конструкцию if, выводя фразу: "Вам пора на пенсию" при условии, что $age больше 59
//- Если $age от 1 до 17 то выводите вам еще рано работать

$age3 = 16;
if (18<=$age3 && $age3<=59){
    echo 'Вам еще работать и работать' . '</br>';
}
    elseif ($age3>59){
    echo 'Вам пора на пенсию'  . '</br>';
}
else
echo 'Вам еще рано работать' . '</br>';

// Задача 4:
// Создайте переменную $day и присвойте ей числовое значение
// С помощью конструкции switch выведите фразу "Это рабочий день если $day от 1-5
// Если 6-7 "Это выходной день"
// Если переменная $day не попадает в диапазон выводить неизвестный день

$day = 8;
switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "Это рабочий день";
        break;
    case 6:
    case 7:
        echo "Это выходной день";
        break;
    default:
        echo "неизвестный день";
}
// Задача 5:
// Вывести все числа, меньшие 10000, у которых есть хотя бы одна цифра 3 и которые не делятся на 5

//for($i = 0;$i < 10000; $i++){
//    if(strpos($i , '3')!== false && $i % 5 !== 0 ){
//        echo $i . "<br>";
//   }
//}

// Задача 6:
// Использую куки выводите информацию о количестве посещений и дате последнего посещения.

//$counter = isset($_COOKIE['counter']) ? $_COOKIE['counter'] : 0;
//++$counter;
//setcookie("counter", $counter);
//echo $counter;

//<!--<!doctype html>-->
//<!--<html lang="en">-->
//<!--<head>-->
//<!--    <meta charset="UTF-8">-->
//<!--    <meta name="viewport"-->
//<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
//<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
//<!--    <title>Document</title>-->
//<!--</head>-->
//<!--<body>-->
//<!---->
//<!--</body>-->
//<!--</html>-->

// Задача 7:
// Создайте в сессии массив для хранения всех посещенных страниц.
// Выведите в цикле список всех посещенных страниц.
//
// Задача 8:
// Создайте файл 'test.txt' и запишите в него массив ['name' => 'Your name', 'age' => 'Your age'].
// Считайте данные из файла 'test.txt' и выведите их на экран.


if (isset($_POST['send'])){

    $data = [
        'name' => $_POST['name'],
        'age' => $_POST ['age']
            ];
    $fp = fopen('test.txt', 'a');

    //$myText = 'Эту строку необходимо нам записать';
//    $test = fwrite($fp, $myText); //Запись в файл
    $test = fwrite($fp, serialize($data)); //Запись в файл

//    if ($test) {
//        echo 'Данные в файл успешно записаны';
//            } else {
//        echo 'Ошибка при записи в файл';
//    }
    fclose($fp);
    header("Location: " . "http://" . $_SERVER['HTTP_HOST'].'/HM/');
    //var_dump($data); die;
}

$myfile = fopen('counter.txt', 'r');
$messages =  fread($myfile, filesize("test.txt"));
fclose($myfile);

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <p>Name:<input type="text" name="name"/></p>
    <p>Massage:<input type="text" name="age"/></p>
    <input type="submit" name="send" value="send">



</form>
</body>
</html>
// Задача 9:
// Даны два упорядоченных по возрастанию массива. Образовать из этих двух массивов единый упорядоченный по возрастанию массив0.
<?php
$arrayOne = [1,3,5,7,9];
$arrayTwo = [2,4,6,8,10];
$arrayMerge = array_merge($arrayOne,$arrayTwo);
sort ($arrayMerge);
print_r($arrayMerge);
?>
// Задача 10:
//// Написать функцию сортировки пузырьком, с возможностью доп. фильтрации результатов с помощью callback функции
/// ?>