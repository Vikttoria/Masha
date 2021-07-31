<?php
$a=['1.txt','2.txt','3.txt'];
for($i=0;$i<3;$i++)
{
    if(file_exists($a[$i]))
    {
        echo $a[$i] , ' - yes'.'<br>';
    }else{
        echo $a[$i] , ' - noy'.'<br>';
    }
}

?>