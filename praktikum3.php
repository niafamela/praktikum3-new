<?php
$bayam         = [1, "Bayam" , 20 , 20000 , 20000000, 11];
$sawi          = [2, "Sawi" , 40, 40000, 40000000, 55];
$wortel        = [3, "Wortel" , 60, 60000, 60000000, 77];
$kangkung      = [4, "Kangkung" , 50, 50000, 50000000, 0];
$buncis        = [5, "Buncis" , 30, 30000, 30000000, 44];
$kacangpanjang = [6, "Kacang Panjang" , 40, 40000, 40000000, 22];
$kentang       = [7, "Kentang" , 90 , 90000, 90000000, 66];
$tomat         = [8, "Tomat" , 30 , 30000, 30000000, 0];
$brokoli       = [9, "Brokoli", 50 , 50000, 50000000, 33];
$daunubi       = [10, "Daun Ubi", 20 , 20000, 20000000,  0];
?>

<!DOCTYPE html>
<html lang = "en">
    <head>
    <style>
    
    table{
        font-family: arial, sans-serif;
        border-collapse : collapse;
        width : 60%;
         : center;
    }
    td,th{
        border: 4px solid #59A5D1;
        text-align : left;
        padding: 6px;
    }
    tr:nth-child(even){
        background-color: #DFE280;
    }
    h1{
        color: #5E8A5E;
        text-align : center;
    }
    thead{
        background-color: #4B96D7;
    }
    </style>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width , initial-scale=1.0">
        <title>Praktikum 3 PHP</title>
</head>
<body>
<h1>Konversi Berat Stok Sayur Warung Pak Joy</h1>
<table align = "center">
<thead>
        <tr>
            <th>No</th>
            <th>Nama Sayur</th>
            <th>Berat (kg)</th>
            <th>Berat (g)</th>
            <th>Berat (mg)</th>
            <th>Stock</th>
</tr>
</thead>
<tbody>
    <tr>
        <?php for($a=0; $a<6; $a++){?>
            <td> <?php echo $bayam[$a]?></td>
        <?php } ?>
    </tr>
    <tr>
        <?php for($a=0; $a<6; $a++){?>
            <td> <?php echo $sawi[$a]?></td>
        <?php } ?>
    </tr>
    <tr>
        <?php for($a=0; $a<6; $a++){?>
            <td> <?php echo $wortel[$a]?></td>
        <?php } ?>
    </tr>
    <tr>
    <?php for($a=0; $a<6; $a++){?>
            <td> <?php echo $kangkung[$a]?></td>
        <?php } ?>
    </tr>
    <tr>
        <?php for($a=0; $a<6; $a++){?>
            <td> <?php echo $buncis[$a]?></td>
        <?php } ?>
    </tr>
    <tr>
        <?php for($a=0; $a<6; $a++){?>
            <td> <?php echo $kacangpanjang[$a]?></td>
        <?php } ?>
    </tr>
    <tr>
        <?php for($a=0; $a<6; $a++){?>
            <td> <?php echo $kentang[$a]?></td>
        <?php } ?>
    </tr>
    <tr>
    <?php for($a=0; $a<6; $a++){?>
            <td> <?php echo $tomat[$a]?></td>
        <?php } ?>
    </tr>
    <tr>
        <?php for($a=0; $a<6; $a++){?>
            <td> <?php echo $brokoli[$a]?></td>
        <?php } ?>
    </tr>
    <tr>
    <?php for($a=0; $a<6; $a++){?>
            <td> <?php echo $daunubi[$a]?></td>
        <?php } ?>
    </tr>
    </tbody>
</table>
</body>


