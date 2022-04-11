<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tafel van 13</title>
</head>
<body>
    <table border="1">
        <?php for($i=1; $i <11; $i++){
            $berek = $i * 13;
            echo "<tr>"."<th>$i</th>"."<td>X</td>"."<td>13</td>"."<td>=</td>"."<td>$berek</td>"."</tr>";
        } ?>

        </table>
</body>
</html>