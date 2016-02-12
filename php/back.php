<?
$months = array(
'Январь', 
'Февраль', 
'Март', 
'Апрель', 
'Май', 
'Июнь', 
'Июль', 
'Август', 
'Сентябрь', 
'Октябрь', 
'Ноябрь', 
'Декабрь');
 
echo "<form class='formnavi' action='$self' method='get'>
<select class='selectformnavi' name='month'>";
 
for($i=0; $i<=11; $i++) {
  echo "<option value='".($i+1)."'";
  if($month == $i+1) 
    echo "selected = 'selected'";
  echo ">".$months[$i]."</option>";
}
 
echo "</select>";
echo "<select class='selectformnavi' name='year'>";
 
for($i=date('Y'); $i<=(date('Y')+20); $i++)
{
  $selected = ($year == $i ? "selected = 'selected'" : '');
 
  echo "<option value=\"".($i)."\"$selected>".$i."</option>";
}
 
echo "</select><input class='buttonformnavi' type='submit' value='Cмотреть' /></form>";
 
if($month != date('m') || $year != date('Y'))
  echo "<a class='backdata' 
  href='".$self."?month=".date('m')."&year=".date('Y')."'><< Вернуться к текущей дате</a>";
  ?>