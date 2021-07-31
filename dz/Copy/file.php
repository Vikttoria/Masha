<?php
/*$d=file_get_contents('index.txt');
echo $d;
copy('index.txt','copy.txt');
copy('index.txt','folder/index.txt');
var_dump(file_exists('index.txt'));*/
    if(file_exists('inde.txt')){
        unlink('inde.txt');
    }else{
        file_put_contents('inde.txt',"");//- зачем здесь двойные кавычки пустые?
    }

?>