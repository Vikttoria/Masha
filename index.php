<?php 
/*$b=["appleone","bananatwo","style"];
$i=0;
while($i<count($b)){
if($b[$i]=="appleone"){
    echo $b[$i];
}
$i++;
}*/


/*$ar="abcde";
1.
echo $ar[0] ;
echo $ar[2];
echo $ar[4];
2.
$ar[0]="!";
echo $ar;
3.
$num = "12345";
$sum = $num[0] + $num[1] + $num[2] + $num[3] + $num[4];
echo $sum;
4.kol sek v chase
$kolSekVChase=60*60;
echo $kolSekVChase."<br>";
$kolSekVSutki=3600*24;
echo $kolSekVSutki."<br>";

$kolSekVCM=86400*30;
echo $kolSekVCM."--"."30 days"."<br>";

$kolSekVCM=86400*31;
echo $kolSekVCM."--"."31 days";

$a=21;
$b=12;
$c=55;
echo $a.":".$b.":".$c;
$a=12;
$r=$a*$a;
echo $r;

$var = 47;
$var += 7;
$var -= 18;
$var *= 10;
$var /= 20;
echo $var;
*/
//$arr=['a', 'b', 'c'];
//var_dump($arr);

/*$a = 15;
if ($a == 10) {
    echo "Yes";
} else {
    echo "Noy";
}
/*$a = 1;
if ($a >0) {
    echo "Yes";
} else {
    echo "Noy";
}
*/
/*$a = "1";
if ($a ==1) {
    echo "Yes";
} else {
    echo "Noy";
*/
/*$arr = [
	'cms'=>['joomla', 'wordpress', 'drupal'],
	'colors'=>['blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый']
];
echo $arr ['smc'][0];
*/
/*$arr=[
    ['name'=>"Alex", "date_b"=>"1998-02-12","status"=>0],
    ['name'=>"Maria", "date_b"=>"1993-05-15","status"=>1],
    ['name'=>"Vika", "date_b"=>"1993-04-27","status"=>1]

];
echo '<table border="1">
<caption>Таблица размеров обуви</caption>
<tr>
 <th> Name</th>
 <th>Date</th>
 <th>Status</th>
 
</tr>';
for ($tr=0; $tr<count($arr); $tr++){ 

    
    if($arr[$tr]["status"]==1){
        echo "<tr>";
        
        echo "<td>".$arr[$tr]["name"]."</td>";
        echo "<td>".$arr[$tr]["date_b"]."</td>";
        echo "<td>".$arr[$tr]["status"]."</td>";
        */
        //foreach ($arr[$tr] as $key => $value) {
        
            // if($key){
     
            // }
            // $arr[3] будет перезаписываться значениями $arr при каждой итерации цикла
            // "{$key} => {$value} ";
            //echo "<td>{$value} </td>";
             
         //} 
         //echo "</tr>";
    //}
    
//}
//echo"</table>";
?>



  
<?php
/*
$arr=[
    ["Alex", "1998-02-12"],
    ["Maria", "1993-05-15"],
    ["Vika", "1993-04-27"]

];




for ($tr=0; $tr<count($arr); $tr++){ 
    //var_dump(count($arr[$tr]));
    for ($td=0; $td<count($arr[$tr]); $td++){  
    var_dump($arr[$tr][$td]);   
    }
    
}
*/

/*$arr=[
    ['name'=>"Alex", "date_b"=>"1998-02-12","status"=>0],
    ['name'=>"Maria", "date_b"=>"1993-05-15","status"=>1],
    ['name'=>"Vika", "date_b"=>"1993-04-27","status"=>1]

];
foreach($arr as $key1=>$value1)
{
    var_dump($value1["name"]);


}
*/
/*$arr = [
	'cms'=>['joomla', 'wordpress', 'drupal'],
	'colors'=>['blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый']
];
 echo $arr["cms"][0].",".$arr["cms"][2].",".$arr["colors"]['blue'];
 */
/*$arr=[
    'ru'=>[ 1=>'Понедельник',2=>'Вторник',3=>'Среда',4=>'Четверг',5=>'Пятница',6=>'Суббота',7=>'Воскресенья'],
    'en'=>[1=>'monday',2=>'tuesday',3=>'wednesday',4=>'thursday',5=>'friday',6=>'saturday',7=>'sunday']
];
    echo $arr["ru"][1].",".$arr["en"][3].'</br>';
    $lang = 'ru';

    $day = 3;

  echo $arr[$lang][$day];

*/
/*$num = 1;
switch($num){
    case 1 : $result='Зима';
    break;
    case 2 : $result='Лето';
    break;
    case 3 : $result='Осень';
    break;
    case 4 : $result='Весна';
    break;
}
echo $result;
*//*$day=23;
if($day<=10){
    $d=1;
}
if($day>=11 && $day<=20){
    $d=2;
}
if($day>=21 && $day<=31){
    $d=3;

echo $d;
*/
/*$day=5;
if($day>=12 && $day<=2){
    $d="Зима";
}
if($day>=3 && $day<=5){
    $d="Весна";
}
if($day>=6 && $day<=8){
    $d="Лето";
    if($day>=9 && $day<=11){
        $d="Осень";
}
echo $d;
не получилась это задача. уже хочу спать после завтрашнего занятия буду продолжать выполнять задачи 
*/


/*$year = 2200;

if ( ($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
    echo "$year год - Высокосный";
} else {
    echo "$year год - Не высокосный";
}
*/
/*$arr=bkgk;
if($arr[0]==="a"){
    echo "Первая буква а";
}else{
    echo "Первая буква  не а";
}
*/
/*$arr="252";
if($arr[0]==1 || $arr[0]==2 || $arr[0]==3 ){
    echo "Верно";
}else{
    echo "Неверно";
}
*/
/*$arr='555';
$res=$arr[0]+$arr[1]+$arr[2];
echo $res;
*/

/*$number = '55555';
$sum = 0;

for ($i = 0; $i < strlen($number); $i++) {
    $sum += (int) $number[$i] ;
}

echo $sum;
*/

/*$number="225226";
$sum = 0;
$sumtwo = 0;

for ($i = 0; $i < 3; $i++) {
    $sum += (int) $number[$i] ;
}

echo $sum.'<br>';
for ($j = 3 ; $j < 6; $j++) {
    $sumtwo += (int) $number[$j] ;
}

echo $sumtwo.'<br>';

if($sum == $sumtwo ){
    echo $sum." = ".$sumtwo;
}else{
    echo $sum." != ".$sumtwo;
}

$a= '123448';

for($i=0;$i<strlen($a); $i++){
    if($a[$i] %2==0){
    $res=$a[$i];
    //$res+=$res ;
  
   echo $res+$res;
}
}
*/
/*$array = array(1,2,3,5,5,6,8,9,9);
$new=array_filter(array_count_values($array),'custom_filter');
print_r($new);
function custom_filter($val)
{
 return $val > 1 ; 
}
*/
/*$s="I";
switch ($s) {
    case 'I' : echo "1";
        break;
    case 'II' : echo "2";
        break;
    case 'III': echo "3";
        break;
    case 'IV' : echo "4";
        break;
    case 'V': echo "5";
        break;
    case 'VI': echo "6";
        break;
  
       var_dump($s);
}
*/
/*$r = array(
    'M' => 1000,
    'CM' => 900,
    'D' => 500,
    'CD' => 400,
    'C' => 100,
    'XC' => 90,
    'L' => 50,
    'XL' => 40,
    'X' => 10,
    'IX' => 9,
    'V' => 5,
    'IV' => 4,
    'I' => 1,
);

$roman = 'MMMCMXCIX';
$result = 0;

foreach ($r as $key => $value) {
    while (strpos($roman, $key) === 0) {
        $result += $value;
        $roman = substr($roman, strlen($key));
    }
}
echo $result;
*/


?>
