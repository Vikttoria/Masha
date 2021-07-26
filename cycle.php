<?php
/*$a=[1,2,3,8];
 $res=0;
foreach($a as $k=>$v){
    $res+=$v;  
}
echo($res);
*/
/*$a=[1,2,3,8];
 $res=0;
foreach($a as $k=>$v){
    $res*=$v;  
}
echo($res);
//умножения так не работает, посмотрела есть функция pow/ но у меня не пполучилось, рассмотри на занятии)
*/
/*$a=[5,5,6,4];
$res= (array_sum($a))/count($a);
echo $res;
*/

/*var_dump(range(1,100));
var_dump(range('a','z'));
*/
/*$a=range(1,9);
echo implode('-',$a);
*/
/*$a=range(1,100);
echo array_sum($a);
*/
/*$a=[1,2,3,4];
$b=['a','b','c','d'];
$res= array_merge($a,$b);
print_r($res) ;
*/
/*$a=['1','2','3','4','5','6'];
$res=array_slice($a,3,5);
var_dump($res);
*/
/*$arr=[ 
    [1,2,3],
    [5,6,7],
    [8,9,10]
];
$res=0;
$sum=0;
for($i=0;$i< count($arr);$i++){
  // var_dump($arr[$i]) ;
   for($j=0;$j< count($arr[$i]);$j++){
    
    if($i==$j){
        $res+=$arr[$i][$j] ; 
    }
  if($i+$j==count($arr)-1){
      $sum+=$arr[$i][$j];
  }
 }
 
}

echo $sum;


for($i=count($arr)-1;$i>=0;$i--){
    
     for($j=count($arr[$i])-1;$j>=0 ;$j--){
        if($i==$j){
            $res+=$arr[$i][$j] ; 
        }
    }
     }
     //echo $res;
     */
    /*if(-1){
        echo true;
    }else{
        echo false;
    }
    */
    /*echo (int) 3/ (int) 2;
    */
    /*$a=1+ "%1"+"$ 1";
echo $a;
*/
/*function ggg($a, $b=12) {

    for($i=0; $i< strlen($a); $i++) {

  if($a[$i] !== $a[strlen($a) -1 -$i]) {
    
    return false;
    } 
    
}
return true ;

}
 echo ggg('tenkt')
 */
 /*$array = array(2,2,1);
$new=array_filter(array_count_values($array),'custom_filter');
print_r($new);
function custom_filter($val)
{
 return $val > 1 ; 
}
*/
/*$a = [1,2,3,4];
$rea = array_splice($a, 1,0,['a',8,9]);
var_dump($a);
*/
/*$arr = ['a'=>1, 'b'=>2, 'c'=>3, 'd'=>4, 'e'
		=>5];
$res = array_values($arr);
var_dump($res);
*/
/*$keys = ['a' , 'b', 'c', 'd', 'e'];
	$elems = [1, 2, 3, 4, 5];
    $res = array_combine($keys,$elems);
    var_dump($res);
    */
    /*
    $arr = ['a', 'b', 'c', 'd', 'e'];
    var_dump(array_reverse($arr));
    $arrl = ['a'=>1, 'b'=>2, 'c'=>3, 'd'=>4, 'e'
		=>5];
        var_dump(array_flip($arrl));
        */
       /*$a= ['a', '-', 'b', '-', 'c', '-', 'd'];
       var_dump(array_search('-',$a));
       $res=array_slice($a,1);
       var_dump($res);
       */
      /*$arr = ['a', 'b', 'c', 'd', 'e'];
	
      $result = array_replace($arr, [0=>'!', =>
          '!!']);
      var_dump($result);
      */
      /*$arr = [1, 3, 2, 5, 4];
	
      sort($arr);
      var_dump($arr)
      */
      /*$ar = [1, 3, 2, 4];
	  rsort($ar);
      var_dump($ar)
      */
      /*$arr = [1, 3, 2, 5, 4];
	
      asort($arr);
      var_dump($arr)
      */
      
      function van($a){
         
$new=array_filter(array_count_values($a),function($val)
{
return $val > 1 ;
});


return($new);
      }
var_dump(van([5,5,5,1]));

       ?>