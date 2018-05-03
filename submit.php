<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>

<body>
<?php
$KCGPU = 10; //index spotřebitelů
$KCCPU = 10; //index spotřebitelů
$KCRAM = 16; //GB
$KCHDD = 40; //GB
$myGPU = filter_input (INPUT_POST, 'KCGPU');
$myCPU = filter_input (INPUT_POST, 'KCCPU');
$myRAM = filter_input (INPUT_POST, 'KCRAM'); //GB
$myHDD = filter_input (INPUT_POST, 'KCHDD'); //GB

    if (($KCGPU<=$myGPU) && ($KCCPU<=$myCPU) && ($KCRAM<=$myRAM) && ($KCHDD<=$myHDD)){
    echo "Užij si hru";
    }
    else {
    echo "Máš smůlu, zahrej si jiný RPG";
    }
?>

</body>

</html>
