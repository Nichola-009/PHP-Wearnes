<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellspacing = "0" cellpadding = "10" width = "100%">

    <?php for ($i = 0; $i < 3; $i++) {?>
        <tr>
            <?php for ($j = 0; $j < 5; $j++) { ?>
                <td>
                <?php echo "$i, $j"?>
                </td>
                <?php } ?>
              
                
        </tr>
    <?php } ?>
        </table>
</body>
</html>