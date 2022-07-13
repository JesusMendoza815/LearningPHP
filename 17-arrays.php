<?php
echo 'Numeric index'.'<br>';
$array = array('Fresa','Manzana','Pera');
for ($i=0; $i < 3; $i++) { 
    
    echo $i.'. '.$array[$i].'<br>';
}

echo '<br>'.'Asociative index'.'<br>';
$arrayAsociativeIndex = array('F'=>'Fresa','M'=>'Manzana','P'=>'Pera');
foreach ($arrayAsociativeIndex as $index=>$value)
     
    echo $index.'. '.$value.'<br/>';

?>