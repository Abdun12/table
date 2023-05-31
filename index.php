<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perkalian Bilangan Genap</title>
</head>
<body>
    <h1>Perkalian Bilangan Genap</h1>
    <table border="1">
        <tr>
           <th>Nilai</th>
           <th>Perkalian</th> 
        </tr>
        <?php
            for($i = 2 ; $i <= 100 ; $i+=2)
            {
                $hasil = $i * $i;
                echo "<tr>";
                echo "<td>$i x $i</td>";
                echo "<td>$hasil</td>";
                echo "</tr>";
            }
        ?>
    </table>
    
</body>
</html>