<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>td</title>
</head>
<body>
    <table border='2'>
        <?php for($i=1; $i <13;$i++){
            echo "<tr>";
            echo "<th> $i </th>";
            for($j=1; $j<11;$j++){
                echo "<td>$j</td>";
            }
            echo "</tr>";
        }?>
    </table> 
</body>
</html>