<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .warna-table {
            background-color: pink;
        }
    </style>

</head>
<body>
    <table border = "1" cellpadding = "10" cellspacing = 0 width = "100%">
        <?php for ($i = 0 ; $i < 4; $i++) { ?>
            <?php if ($i % 2 == 0) { ?>
        <tr class = "warna-table">
            <?php } else { ?>
                <tr>
            <?php }?>

            <?php for ($j = 0; $j < 6; $j++) { ?>
            <td>
                <?php echo "$i, $j";?>
            </td>
            <?php } ?>
        </tr>
        <?php } ?>
    </table>
    </body>
</html>