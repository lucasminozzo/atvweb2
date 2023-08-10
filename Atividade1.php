<?php
$ini = $_GET["inicio"];
$raz = $_GET["razao"];
$qua = $_GET["quant"];
$setini=isset($ini);
$setraz=isset($raz);
$setqua=isset($qua);

if($setini==false)
    echo "Informe o parametro 'inicio'";

elseif($setraz==false)
    echo "Informe o parametro 'razao'";

elseif($setqua==false)
    echo "Informe o parametro 'quant'";


else{
for($i=0;$i<$qua;$i++){
    if($i==0){
        print $ini . " ";
        $i++;
    }
    $ini = $ini + $raz;
    print $ini . " ";
}
}
?>
