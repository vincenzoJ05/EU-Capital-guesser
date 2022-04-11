<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/O12.css">
    <title>Document</title>
</head>
<body>
    <table>
        <th class="th">Maand</th>
        <th class="th">Gem. temperatuur</th>
    <?php 
        $temperatuur=[
            'januari'=>3.1, 
            'februari'=>3.3, 
            'maart'=>6.2, 
            'april'=>9.2, 
            'mei'=>13.1, 
            'juni'=>15.6, 
            'juli'=>17.9, 
            'augustus'=>17.5, 
            'september'=>14.5, 
            'oktober'=>10.7, 
            'november'=>6.7, 
            'december'=>3.7, 
            ];
         foreach($temperatuur as $temp => $temper){ ?>
             <tr>
                <td>
                    <?php echo $temp;?>
                </td>
                <td class="td">
                    <?php echo $temper;?>
                </td>
             </tr>
         <?php } ?>
    
    </table>
</body>
</html>