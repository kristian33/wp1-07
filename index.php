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
$myGPU = 7;
$myCPU = 7;
$myRAM = 8; //GB
$myHDD = 520; //GB

    if (($KCGPU<=$myGPU) && ($KCCPU<=$myCPU) && ($KCRAM<=$myRAM) && ($KCHDD<=$myHDD)){
    echo "Užij si hru";
    }
    else {
    echo "Máš smůlu, zahrej si jiný RPG";
    }
?>
</body>

</html>
