<?php

/*1. Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик.*/
echo '<h1> Task 1</h1>';
$task1_arr = array('html', 'css', 'php', 'js', 'jq');
foreach($task1_arr as $task1_small){
    echo '<p>'.$task1_small.'</p>';
}

/*2. Дан массив с элементами 1, 20, 15, 17, 24, 35. С помощью цикла foreach найдите сумму элементов этого массива. Запишите ее в переменную $result.
 */
echo '<h1> Task 2</h1>';
$task2_arr = array(1, 20, 15, 17, 24, 35);
$result2 = 0;
foreach($task2_arr as $task2_small){
    $result2 += $task2_small;

}
echo $result2.'<br>';


/*3. Дан массив с элементами 26, 17, 136, 12, 79, 15. С помощью цикла foreach найдите сумму квадратов элементов этого массива. Результат запишите переменную $result.
 * */
echo '<h1> Task 3</h1>';
$task3_arr = array(26, 17, 136, 12, 79, 15);
$result3 = 0;
foreach($task3_arr as $task3_small){
    $result3 += $task3_small*$task3_small;

}
echo $result3.'<br>';

/*
 * 4. Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей, с помощью второго — столбец элементов.
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
 * */
echo '<h1> Task 4</h1>';
$task4_arr = array('green'=>'зеленый','red'=>'красный','blue'=>'голубой');
echo '<h3>Keys</h3>';
foreach($task4_arr as $task4_key=>$task4_val){
    echo '<p>'.$task4_key.'</p>';
}
echo '<h3>Value</h3>';
foreach($task4_arr as $task4_key=>$task4_val){
    echo '<p>'.$task4_val.'</p>';
}
/*5. Дан массив $arr с ключами 'Коля', 'Вася', 'Петя' с элементами '200', '300', '400'. С помощью цикла foreach выведите на экран столбец строк такого формата: 'Коля — зарплата 200 долларов.'.
 *
 * */
echo '<h1> Task 5</h1>';
$task5_arr = array('Коля'=>'200','Вася'=>'300','Петя'=>'400');
foreach($task5_arr as $task5_key=>$task5_val){
    echo '<p>'.$task5_key. ' — зарплата '.$task5_val.' долларов.</p>';
}
/*6. Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а русские — в массив $ru.
 * */
echo '<h1> Task 6</h1>';
$task6_arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$task6_en = array();
$task6_ru = array();
foreach ($task6_arr as $task6_key=>$task6_val){
    $task6_en[] = $task6_key;
    $task6_ru[] = $task6_val;
}

/*7. Дан массив с элементами 2, 5, 9, 15, 0, 4. С помощью цикла foreach и оператора if выведите на экран столбец тех элементов массива, которые больше 3­, но меньше 10.*/
echo '<h1> Task 7</h1>';
$task7_arr = array(2, 5, 9, 15, 0, 4);
foreach ($task7_arr as $task7_el){
    if($task7_el > 3 && $task7_el < 10){
        echo '<p>'.$task7_el.'</p>';
    }
}

/*
 * 8. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach создайте строку '­1­2­3­4­5­6­7­8­9­'. Циклы while и for.*/
echo '<h1> Task 8</h1>';
$task8_arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
echo '<p>-';
foreach($task8_arr as $task8_el){
    echo $task8_el.'-';
}
echo '</p>';

/*9. Выведите столбец чисел от 1 до 100.*/
echo '<h1> Task 9</h1>';
for($i = 1; $i<= 100; $i++){
    echo $i.'<br>';
}
/*10. Выведите столбец чисел от 11 до 33..*/
echo '<h1> Task 10</h1>';
for($i = 11; $i<= 33; $i++){
    echo $i.'<br>';
}
/*11. Выведите столбец чётных чисел в промежутке от нуля до 100. */
echo '<h1> Task 11</h1>';
for($i = 0; $i<= 100; $i++){
    if($i%2 == 0) {
        echo $i . '<br>';
    }
}
/*12. Дано число $n = 1000. Делите его на 2 столько раз, пока результат деления не станет меньше 50. Какое число получится? Посчитайте количество итераций, необходимых для этого (итерации — это количество проходов цикла), и запишите его в переменную $num.
*/
echo '<h1> Task 12</h1>';
$task12_n = 1000;
$task12_num = 0;
do {
    $task12_n = $task12_n/2;
    $task12_num++;
}
while($task12_n/2 > 50 );
echo ($task12_n/2).'<br>';
echo $task12_num+1;


/*13. Вывести таблицу умножения.*/
echo '<h1> Task 13</h1>';
echo '<table style="border-collapse: collapse;">';
for($i=1; $i<=10; $i++ ){
    echo '<tr>';
    for($k=1; $k<=10; $k++) {
        echo '<td style="border: 1px solid black;">'.$i*$k.'</td>';

    }
    echo '</tr>';
}
echo '</table>';

/*14. Дан массив с элементами 4, 2, 5, 19, 13, 0, 10. С помощью цикла foreach и оператора if проверьте есть ли в массиве элемент со значением $e, равном 2, 3 или 4. Если есть — выведите на экран 'Есть!', иначе выведите 'Нет!'.*/
echo '<h1> Task 14</h1>';
$task14_arr = array(4, 2, 5, 19, 13, 0, 10);
$task14_result = false;
foreach ($task14_arr as $task14_el){
    if($task14_el == 2 || $task14_el == 3 || $task14_el == 4){
        $task14_result = true;

    }
}
echo $task14_result ? 'Есть!': 'Нет!';

/*15. Дан массив $arr. С помощью цикла foreach и переменной $count подсчитайте количество элементов этого массива. [7 баллов]
Проверьте работу скрипта на примере массива с элементами 4, 2, 5, 19, 13, 0, 10.
*/
echo '<h1> Task 15</h1>';
$task15_arr = array(4, 2, 5, 19, 13, 0, 10);
$task15_count = 0;
foreach ($task15_arr as $task15_el){
    $task15_count++;
}
echo $task15_count;
/*хоча для цього в пхп є функція count();*/


/*16. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach и оператора if выведите на экран столбец элементов массива, как показано ниже: */
echo '<h1> Task 16</h1>';
$task16_arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
foreach ($task16_arr as $task16_el){
    $koma = ',';
    if($task16_el == $task16_arr[count($task16_arr) - 1]){
        $koma = '';
    }
    echo $task16_el.$koma.'<br>';
}
/*17. Составьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий месяц выведите жирным. Текущий месяц должен храниться в переменной $month.*/
echo '<h1> Task 17</h1>';
$task17_arr = array('Січень', 'Лютий', 'Березень', 'Квітень', 'Травень', 'Червень', 'Липень', 'Серпень', 'Вересень', 'Жовтень', 'Листопад', 'Грудень');
$task17_current_month = 'Серпень';
foreach ($task17_arr as $task17_el) {

    echo ($task17_el == $task17_current_month)?'<strong>'.$task17_el.'</strong><br>':$task17_el.'<br>';
}

/*18. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, выходные дни следует вывести жирным.*/
echo '<h1> Task 18</h1>';
$task18_arr = array('Понеділок', 'Вівторок', 'Середа', 'Четвер', 'Пятниця', 'Субота', 'Неділя');
foreach ($task18_arr as $task18_el) {

    echo ($task18_el == $task18_arr[count($task18_arr)-1] || $task18_el == $task18_arr[count($task18_arr)-2])?'<strong>'.$task18_el.'</strong><br>':$task18_el.'<br>';
}


/*19. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а текущий день выведите курсивом. Текущий день должен храниться в переменной $day.*/
echo '<h1> Task 19</h1>';
$task19_arr = array('Понеділок', 'Вівторок', 'Середа', 'Четвер', 'Пятниця', 'Субота', 'Неділя');
$task19_current_day = 'Неділя';
foreach ($task19_arr as $task19_el) {

    echo ($task19_el == $task19_current_day)?'<strong>'.$task19_el.'</strong><br>':$task19_el.'<br>';
}


/*20. Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20 рядов, а не 5.*/
echo '<h1> Task 20</h1>';


for($i=0; $i < 20; $i++){
    for ($k=$i; $k >= 0; $k--){
        echo 'X';

    }

    echo '<br>';
    
}


/*21. Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9 рядов, а не 5.*/
echo '<h1> Task 21</h1>';


for($i=1; $i < 10; $i++){
    for ($k=$i; $k >= 1; $k--){
        echo $i;
    }
    echo '<br>';

}

/*22. Нарисуйте пирамиду, как показано на рисунке, используя цикл for или while.*/
echo '<h1> Task 22</h1>';
for($i=1; $i < 10; $i++){
    for ($k=$i*2; $k >= 1; $k--){
        echo 'X';

    }

    echo '<br>';

}

/*23. Вам нужно разработать программу, которая считала бы сумму цифр числа, введённого пользователем.
Например: есть число 123, то программа должна вычислить сумму цифр 1, 2, 3, т.е. 6.*/
echo '<h1> Task 23</h1>';
function user_put_some($a){
    if(is_numeric($a)){



        $a = (string)$a;
        $result = 0;
        for ($i = 0; $i < strlen($a); $i++) {

            $result += $a[$i] ;
        }
       echo $result;
    } else {
        echo $a . ' - не число.';
    }
}

user_put_some('123');

/*24. Вам нужно разработать программу, которая считала бы количество вхождений какой­нибуть выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе 442158755745 встречается 4 раза.*/
echo '<h1> Task 24</h1>';
function user_find_number($a){
    if(is_numeric($a)){
    $a = (string)$a;
    $result = 1;
    for ($i = 0; $i < strlen($a); $i++) {
        if($a[$i] == 5)
            ++$result;
        }
        echo $result;
    } else {
        echo $a . ' - не число.';
    }
}
user_find_number('55505');

/*25. Создать массив, наполнить его случайными значениями (функция rand), найти максимальное и минимальное значение и поменять их местами. */
echo '<h1> Task 25</h1>';
$task25_arr = array();
for($i = 0; $i < 10; $i++){
    $task25_arr[] = rand();
}

$task25_arr_max = max($task25_arr);
$task25_arr_min =   min($task25_arr);
$task25_arr_max_key = array_search($task25_arr_max, $task25_arr);
$task25_arr_min_key = array_search($task25_arr_min, $task25_arr);
list($task25_arr[$task25_arr_max_key], $task25_arr[$task25_arr_min_key]) = array($task25_arr[$task25_arr_min_key], $task25_arr[$task25_arr_max_key]);


/*26. Создать массив и заполнить его случайными числами от 1 до 100 (функция rand). Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные индексы. После вывести на экран элементы, которые больше ноля и у которых не парный индекс.*/
echo '<h1> Task 26</h1>';

$task26_arr = array();
for($i = 0; $i < 20; $i++){
    $task26_arr[] = rand(0, 100);
}
$task26_multiplay = 1;
for($k=0; $k < count($task26_arr); $k = $k+2) {
        if(!!$task26_arr[$k]){
            $task26_multiplay *= $task26_arr[$k];
        }

}
echo $task26_multiplay.'<br>';

for($j=1; $j < count($task26_arr); $j = $j+2) {
    if(!!$task26_arr[$j]){
        echo $task26_arr[$j].'<br>';
    }

}

/*27. Создать генератор случайных таблиц. Есть переменные: $row – кол-во строк в таблице, $cols - кол-во столбцов в таблице. Есть список цветов, в массиве: $colors = array('red','yellow','blue','gray','maroon','brown','green'). Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $rows на $cols, в которой все ячейки будут иметь цвета, выбранные случайным образом из массива $colors. В каждой ячейке должно находиться случайное число.*/
echo '<h1> Task 27</h1>';
$task27_colors = array('red','yellow','blue','gray','maroon','brown','green');
$task27_row = rand(1, 10);
$task27_col = rand(1, 10);
echo '<table style="border-collapse: collapse;">';
for($i= 0; $i< $task27_row; $i++){
    echo '<tr>';
        for($k= 0; $k < $task27_col; $k++){
            echo '<td style="border: 1px solid #fff; padding: 20px; background: '.$task27_colors[rand(0, count($task27_colors)-1)].';">'.rand().'</td>';
        }
    echo '</tr>';
}
echo '</table>';

/*28. Вывести таблицу умножения с помощью двух циклов for.*/
echo '<h1> Task 28</h1>';
echo '<table style="border-collapse: collapse;">';
for($i=1; $i<=10; $i++ ){
    echo '<tr>';
    for($k=1; $k<=10; $k++) {
        echo '<td style="border: 1px solid black;">'.$i*$k.'</td>';

    }
    echo '</tr>';
}
echo '</table>';