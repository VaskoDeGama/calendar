<?
$result = mysql_query("SELECT data FROM zapisi");
if (!$result) {
    die('Неверный запрос: ' . mysql_error());
}
$i = 0;
$arrdata = array();
while($row = mysql_fetch_array($result))
{
  $arrdata[i] = $row['data'];
  $s = $arrdata[i];
  if ($s[5] == 0) {
    $s[5] = '';
  }
  $arrdata[i] = $s;
  echo "<a class='notdisp' id='$i'>$s</a><br/>\n";
  $i++;
};
echo "<span id='max' class='notdisp'>$i</span>";
?>