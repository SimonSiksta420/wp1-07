<?php
$entryfee;
$age = "8";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
if (($age <= 10 ) || ($age >= 65)) {
    $entryfee = 50;
}
if (($age >= 15) && ($age <= 26)) {
    $entryfee = 80;
}
else {
    $entryfee = 120;
}
?>

<p> Je vám <?= $age ?> Musíte zaplatit <?= $entryfee ?> Korun. </p>

</body>
</html>