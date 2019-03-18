<?php
 $res="add";
 hui($res);
 function hui($res){
     $ser=strrev($res);
     if ($ser==$res) {
         echo "是回文";
     }else{
        echo "不是回文";
     }
 }
?>