<?php
$mahasiswa = [
    ["Jundi Robbani", "043059924", "Teknik informatika", "muhammadjundi184@gmail.com"],
    ["Ilzam abdillah", "043050987", "Teknik industri", "ilzamabdillah@gmail.com"],
    ["Fauz haunan", "043057890", "Teknik sipil", "Fauzhaunan007@gmail.com"],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    
<h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs ) : ?>
<ul>
    <li><?php echo $mhs [0]; ?></li>
    <li><?php echo $mhs [1]; ?></li>
    <li><?php echo $mhs [2]; ?></li>
    <li><?php echo $mhs [3]; ?></li>
</ul>
<?php endforeach; ?>
</body>
</html>