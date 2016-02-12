<?php

// местоположение скрипта
$self = $_SERVER['PHP_SELF'];     
// проверяем, если в переменная month была установлена в URL-адресе, 
//либо используем PHP функцию date(), чтобы установить текущий месяц.
if(isset($_GET['month']))
    $month = $_GET['month']; 
elseif(isset($_GET['viewmonth']))
    $month = $_GET['viewmonth']; 
else $month = date('m'); 
 
// Теперь мы проверим, если переменная года устанавливается в URL, 
//либо использовать PHP функцию date(), 
//чтобы установить текущий год, если текущий год не установлен в URL-адресе.
if(isset($_GET['year']))
    $year = $_GET['year']; 
elseif(isset($_GET['viewyear'])) 
    $year = $_GET['viewyear']; 
else $year = date('Y'); 
 
if($month == '12')
    $next_year = $year + 1; 
else $next_year = $year; 

$Month_r = array(
"1" => "Январь",
"2" => "Февраль",
"3" => "Март",
"4" => "Апрель",
"5" => "Май",
"6" => "Июнь",
"7" => "Июль",
"8" => "Август",
"9" => "Сентябрь",
"10" => "Октябрь",
"11" => "Ноябрь",
"12" => "Декабрь"); 
 
$first_of_month = mktime(0, 0, 0, $month, 1, $year); 
 
// Массив имен всех дней в неделю
$day_headings = array('Sunday', 'Monday', 'Tuesday', 
'Wednesday', 'Thursday', 'Friday', 'Saturday'); 
 
$maxdays = date('t', $first_of_month); 
$date_info = getdate($first_of_month); 
$month = $date_info['mon']; 
$year = $date_info['year']; 
 
// Если текущий месяц это январь, 
//и мы пролистываем календарь задом наперед число, 
//обозначающее год, должно уменьшаться на один. 
 
if($month == '1'): 
    $last_year = $year-1; 
else: $last_year = $year; 
endif; 
 
// Вычитаем один день с первого дня месяца, 
//чтобы получить в конец прошлого месяца
$timestamp_last_month = $first_of_month - (24*60*60); 
$last_month = date("m", $timestamp_last_month);
 
// Проверяем, что если месяц декабрь, 
//на следующий месяц равен 1, а не 13
if($month == '12')
    $next_month = '1'; 
else $next_month = $month+1; 
 



$calendar = "
<table>
    <tr class='head'>
        <td colspan='7' class='navi'>
            <a href='$self?month=".$last_month."&year=".$last_year."'><img class='ternlft' src='../img/back_6420.png' width='30px'
            </img> </a>
           ".$Month_r[$month]." ".$year."
            <a href='$self?month=".$next_month."&year=".$next_year."'><img class='ternrght' width='30px' src='../img/back_6420.png'></img></a>
        </td>
    </tr>
    <tr class='head'>
        <td class='border'>Пн</td>
        <td class='border'>Вт</td>
        <td class='border'>Ср</td>
        <td class='border'>Чт</td>
        <td class='border'>Пт</td>
        <td class='border'>Сб</td>
        <td class='border'>Вс</td>
    </tr>
    <tr>"; 


// очищаем имя класса css
$class = "";
 
$weekday = $date_info['wday'];
 
// Приводим к числа к формату 1 - понедельник, ..., 6 - суббота
$weekday = $weekday-1; 
if($weekday == -1) $weekday=6;
 
// станавливаем текущий день как единица 1
$day = 1;
 
// выводим ширину календаря
if($weekday > 0) 
    $calendar .= "<td colspan='$weekday'>  </td>";


while($day <= $maxdays)
{
    // если суббота, выводим новую колонку.
    if($weekday == 7) {
        $calendar .= "</tr><tr>";
    $weekday = 0;
  }
  
  $linkDate = mktime(0, 0, 0, $month, $day, $year);
  $id = "$year"."-"."$month"."-"."$day";

  // проверяем, если распечатанная дата является сегодняшней датой.
  //если так, используем другой класс css, чтобы выделить её 
    if((($day < 10 and "0$day" == date('d')) or ($day >= 10 and "$day" == date('d'))) 
    and (($month < 10 and "0$month" == date('m')) 
    or ($month >= 10 and "$month" == date('m'))) and $year == date('Y'))
       $class = "border today";
    
  //в противном случае, печатаем только ссылку на вкладку
    else {
    $d = date('m/d/Y', $linkDate);
      $class = "border";
  }
 
  //помечаем выходные дни красным
  if($weekday == 5 || $weekday == 6) $red='style="color: red" ';
  else $red='';    
    
    
    $calendar .= "
        <td class='{$class}'><span ".$red.">{$day}</span>
        <a onclick=\"show('block')\" id= '{$id}' class='btn noevents'>Заметки</a>

        </td>";
    $day++;
    $weekday++;  
}
 
if($weekday != 7) 
  $calendar .= "<td colspan='" . (7 - $weekday) . "'> </td>";
// выводим сам календарь
echo $calendar . "</tr></table>";  

?>
