<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
        .warna-baris2 {
            background-color: gold;
        }
    </style>
</head>
<body>

<table border="1" cellpadding="10" cellspacing="0">
    <!-- titik dua di bawah ini untuk menganti buka kurung biar ga ribet -->
    <?php for ( $i = 1; $i <= 5; $i++ ) : ?> 
        <?php if ( $i % 2 == 1 ) : ?>
            <tr class="warna-baris">
        <?php else : ?>
            <tr class="warna-baris2"> 
        <?php endif; ?> 
            <?php for( $j = 1; $j <= 5; $j++ ) : ?>
                <td><?php echo "$i, $j"; ?></td>
            <?php endfor; ?>   
        </tr>
        <!-- endfor di bawah ini adalah pengganti tutup kurung di komen pertama -->
    <?php endfor; ?>  
</table>

</body>
</html>